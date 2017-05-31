<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

<?php include('header.php'); ?>

</head>
  <body>
 <header>
 
<?php include('navi.php'); ?>
  </header>
 <main>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
 
        <br><br>
         <h1 class="header center blue-dark-text text-darken-2">Trendy Publishing</h1>
 
        <div class="row center">
          <h5 class="header col s12 light">Engaging, insightful content driving audience participation across a network of niche digital platforms, affecting viral media straegies through the power of social amplification.</h5>
        </div>
 
        <div class="row center">
          <a href="#media_kit" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Start Exploring</a>
        </div>
 
        <br><br>

      </div>
    </div>
 </div>
 
    <div class="parallax"><img src="timg/sm1.jpg" alt="Unsplashed background img 1"></div>
 <div class="section no-pad-bot">
     </div>

 
    <div class="section black">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col m4">
          <div class="icon-block">
          <h2><a class="btn-large pulse"><i class="material-icons">cloud</i></h2>
            <h5 class="center">International Audience</h5>

            <p class="light">With millions of unique visits every month advertisers are able to segment key target demographics across a broad spectrum of consumer.</p>
          </div>
        </div>

        <div class="col m4">
        
         <h2><a class="btn-large pulse"><i class="material-icons">group</i></h2>
            <h5 class="center">Go Viral on Day 1</h5>

            <p class="light">Utilizing social channels campaigns can reap exponentially greater results that when compared with traditional or offline marketing channels.</div>
        </div>
 </div>
        <div class="col m4">
          <div class="icon-block">
   <><h2><a class="btn-large pulse"><i class="material-icons">settings</i></h2>
            <h5 class="center pulse">Unlimited Tweaks Available to Maximise Every Dollar</h5>

            <p class="light">Expert digital accounts teams in the US and Australia provide a 24/7 unyielding approach to succeed in a world with a 24hour news cycle.</p>
          </div>
        </div>
      </div>

   <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">

      <div class="container">
        <div class="row center">

          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>

        </div>
      </div>
    </div>
</div>


    <div class="parallax"><img src="timg/sm2.jpg" alt="Unsplashed background img 2"></div>
  </div>


  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center">

          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">MELBOURNE</p>
        <p class="left-align light">LOS ANGELES</p>
        <p class="left-align light">BANGKOK</p>
        
        </div>
      </div>
    </div>
  </div>


  <div class="parallax-container valign-wrapper">
   <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">


          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>


        </div>
      </div>
    </div>    
  </div>



    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>


</main>

<footer>
<?php include('footer.php'); ?>
</footer>

<script>
$(document).ready(function(){
      $('.parallax').parallax();
    });   </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/materialize.js"></script>
<script src="js/init.js"></script>
 <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  
    <!-- Google Plus Button-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

   <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-84079763-11', 'auto');
   //ga('require', '');
    ga('send', 'pageview');
 </script>

<!-- facebook SDK --><script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php echo $this -> fbAppId; ?>",
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();   
  };
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
});
</script>



</body>
</html>