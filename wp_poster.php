<?php
## tpau

require './wp-load.php';

	$user = $this ->_user;
	 //   $pass = $config['pass'];
	    $url = $this ->_url;
		$path = $this ->_path;
			$title=$_POST['post_title'];
			$category=$_POST['categories'];
			$body=$_POST['post_content'];
			$articleUrl = $_POST['articleUrl'];
			$tags=$_POST['tags'];
			$image=$_POST['image'];
			
			if ($image){
			$upload = saveImage($image);
			}
			
			$source=$_POST['source'];
		$catIds = explode(',',$category); 
		 $catIds = $catIds . $source;
			foreach ($catIds as $cat) {
		  $idObj = $category_id = get_cat_ID($cat);
		    $zid = $idObj->term_id;
		    array_push($catIds, $zid);
			}	
		
		if (!isset($tags)) {
			 get_hashTags($articleUrl);
			//	wp_set_post_tags( $post_id, $keywords, 'true' );
			}
				$excerpt=strip_tags($body);	
					$my_post = array(
						'post_title' => $title,
						'post_excerpt' => $excerpt,
						'post_content' => $body,
						'post_status' => 'publish',
						'post_author' => 1,
						'post_category' => array ($zid),
						'post_type'  => 'post',
						'tags_input' => array($tags)
       					);
				

		
			echo $postId = wp_insert_post( $my_post );
			
			uploadAttachImage($upload, $post_id);
			
			if (is_numeric($postId)){
			$file= $path . "/results.txt";
			$woohoo = $postId . '/n';
			
			file_put_contents($file, $woohoo, FILE_APPEND | LOCK_EX);
			
			} else {
			$file= $path . "/results.txt";
			$boo = 'epic fail/n' . $post_title;
			file_put_contents($file, $boo, FILE_APPEND | LOCK_EX);
			}
	
			function saveImage($imgurl)
	{
		//add time to the current filename
$name = basename($imgurl);
list($txt, $ext) = explode(".", $name);
$name = $txt.time();
$name = $name.".".$ext;
	 $url = $config['url'];
		$path = $config['path'];
//check if the files are only image / document
if($ext == "jpg" or $ext == "png" or $ext == "gif" or $ext == "doc" or $ext == "docx" or $ext == "pdf"){
//here is the actual code to get the file from the url and save it to the uploads folder
//get the file from the url using file_get_contents and put it into the folder using file_put_contents
$upload = file_put_contents($path."/wp-contents/uploads/".$name,file_get_contents($imgurl));
//check success
}
}
	function uploadAttachImage($image, $postId)
	{
$url = $this->_url;
$path = $this->_path;
	// $filename should be the path to a file in the upload directory.
$filename = $image;
// The ID of the post this attachment is for.
$parent_post_id = $postId;
// Check the type of file. We'll use this as the 'post_mime_type'.
$filetype = wp_check_filetype( basename( $filename ), null );
// Get the path to the upload directory.
$wp_upload_dir = wp_upload_dir();
// Prepare an array of post data for the attachment.
$attachment = array(
	'guid'           => $wp_upload_dir['url'] . '/' . basename( $filename ), 
	'post_mime_type' => $filetype['type'],
	'post_title'     => preg_replace( '/\.[^.]+$/', '', basename( $filename ) ),
	'post_content'   => '',
	'post_status'    => 'inherit'
);
// Insert the attachment.
$attach_id = wp_insert_attachment( $attachment, $filename, $postId );
// Make sure that this file is included, as wp_generate_attachment_metadata() depends on it.
require_once( $url.'/wp-admin/includes/image.php' );
// Generate the metadata for the attachment, and update the database record.
$attach_data = wp_generate_attachment_metadata( $attach_id, $filename );
wp_update_attachment_metadata( $attach_id, $attach_data );
set_post_thumbnail( $postId, $attach_id );
return ($attach_id);
	}
	  
	
			
			

	
	
	
	
function get_hashTags( $articleUrl ) {
	echo $tags = call_api( $articleUrl );
 }

function call_api($url){
$APPLICATION_ID = '4ecd9e16';
$APPLICATION_KEY='be54f0e53443501357865cbc055538aa';
  $ch = curl_init('https://api.aylien.com/api/v1/hashtags');
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Accept: application/json',
    'X-AYLIEN-TextAPI-Application-Key: ' . $APPLICATION_KEY,
    'X-AYLIEN-TextAPI-Application-ID: '. $APPLICATION_ID
  ));
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $url);
  $response = curl_exec($ch);
  return json_decode($response);
} 

?>