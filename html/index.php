<!DOCTYPE html>
<html lang="en">

<head>
  <!--
##@Version           :  202303091846-git
# @@Author           :  Jason Hempstead
# @@Contact          :  git-admin@casjaysdev.pro
# @@License          :  WTFPL
# @@ReadME           :  
# @@Copyright        :  Copyright: (c) 2023 Jason Hempstead, Casjays Developments
# @@Created          :  Thursday, Mar 09, 2023 18:46 EST
# @@File             :  index.php
# @@Description      :  php document
# @@Changelog        :  Updated header
# @@TODO             :  
# @@Other            :  
# @@Resource         :  
# @@Terminal App     :  no
# @@sudo/root        :  no
# @@Template         :  html
# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
-->
  <meta charset="utf-8" />
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <meta name="robots" content="index, follow" />
  <meta name="generator" content="CasjaysDev" />

  <meta name="description" content="REPLACE_SERVER_SOFTWARE container" />
  <meta property="og:title" content="REPLACE_SERVER_SOFTWARE container" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="./images/favicon.ico" />
  <meta property="og:url" content="" />

  <meta name="theme-color" content="#000000" />
  <link rel="manifest" href="./site.webmanifest" />

  <link rel="icon" type="image/icon png" href="./images/icon.png" />
  <link rel="apple-touch-icon" href="./images/icon.png" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" type="text/css" href="./css/cookieconsent.css" />
  <link rel="stylesheet" href="./css/bootstrap/darkly.css" />
  <link rel="stylesheet" href="./css/index.css" />
  <script src="./js/errorpages/isup.js"></script>
  <script src="./js/errorpages/homepage.js"></script>
  <script src="./js/errorpages/loaddomain.js"></script>
  <script src="./js/jquery/default.js"></script>
  <script src="./js/passprotect.min.js" defer></script>
  <script src="./js/bootstrap.min.js" defer></script>
  <script src="./js/app.js" defer></script>
  <title>Welcome to REPLACE_SERVER_SOFTWARE server</title>
</head>

<body class="container text-center" style="align-items: center; justify-content: center">
  <div class="vh-100">
    <h1 class="m-5">Congratulations</h1>
    <h2>
      Your REPLACE_SERVER_SOFTWARE container has been setup.<br />
      This file is located in:
      <?php
      echo $_SERVER['DOCUMENT_ROOT']; ?>
      <br />
      <br />
      SERVER Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?>
      <br />
      SERVER Address: <?php echo $_SERVER['SERVER_ADDR']; ?>
      <br />
    </h2>
  </div>
  <br />
  <br />
  <!-- Begin Casjays Developments Footer -->
  <hr />
  <div class="footer footer-custom col-sm-12">
    <div class="footer vh-100">
      <div class="footer-custom fs-5">
        <br />
        <br />
        <br />
        <!-- begin legal block --->
        <div class="legal">REPLACE_COPYRIGHT_FOOTER</div>
        <!-- end legal block --->
        <!-- begin engine block --->
        <div class="text-center" style="color: royalblue">
          <br />
          Made with 💜💜💜💜💜💜 by
          <br />
          <a href="//github.com/casjay" target="_blank" rel="noopener">Jason M. Hempstead (Casjay)</a>
          <br />
          This site is powered by an
          <a href="//github.com/casjay-templates/default-web-assets" target="_blank" rel="noopener">open source
          </a>theme
        </div>
        <br />
        <!-- end engine block --->
        <!-- Begin last updated -->
        <br />
        <br />
        <span style="color: skyblue"> REPLACE_LAST_UPDATED_ON_MESSAGE </span>
        <br />
        <br />
        <br />
        <!-- End last updated -->
        <br />
        <br />
      </div>
    </div>
  </div>
  <br /><br /><br /><br /><br /><br /><br />
  <!-- Begin Casjays Developments Footer -->
</body>

</html>
