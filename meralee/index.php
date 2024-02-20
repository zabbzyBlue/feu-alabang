<?php 

    if (isset($_POST['name'], $_POST['kwhusage'])) {
      $name_var = $_POST['name'];
      $kwhusage_var = $_POST['kwhusage'];
      $url = "results.php?name=" . $name_var . "&kwhusage=" . $kwhusage_var;
      header('Location: ' . $url);
      exit();
    }

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>inputpage</title>
    <link rel="stylesheet" href="header.css" media="screen">
    <link rel="stylesheet" href="inputpage.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <meta name="generator" content="Meralee 5.10.10, meralee.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="inputpage">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
</head>


  <body data-home-page="inputpage.html" data-home-page-title="inputpage" class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-b6de"><div class="u-clearfix u-sheet u-valign-bottom u-sheet-1">
        
        <!--Logo that functions as a redirectable button -->
        <a href="https://company.meralco.com.ph/meralco-online" class="u-image u-logo u-image-1" data-image-width="600" data-image-height="600">
          <img src="images/EE.png" class="u-logo-image u-logo-image-1">
        </a>
         <!-- Ends here-->

      </div></header>


      <section class="u-clearfix u-section-1" id="sec-3cab">
        <div class="u-clearfix u-sheet u-sheet-1">
          <div class="u-form u-form-1">
             <!-- Whole form used for sending data to php-->
            <form method="post" action="index.php" class="u-clearfix u-form-spacing-36 u-form-vertical u-inner-form" name="form" style="padding: 10px;">
              <div class="u-form-group u-form-name u-form-group-1">
                <label for="name-9e5e" class="u-label">Consumer Name</label>
                <input type="text" placeholder="Ex.: Kennedy Von Dutch" id="name-9e5e" name="name" class="u-input u-input-rectangle" required="">
              </div>
              <div class="u-form-email u-form-group u-form-group-2">
                <label for="email-9e5e" class="u-label">Total kWh Usage</label>
                <input type="number" step = "any" placeholder="Ex.: 1234.5678" id="email-9e5e" name="kwhusage" class="u-input u-input-rectangle" required="">
              </div>
              <div class="u-align-center u-form-group u-form-submit">
                <input type="submit" class="u-btn u-btn-submit u-button-style" value="Generate"></input>
              </div>
            </form>
             <!--Ends here -->
          </div>
        </div>
      </section>
    
    
   
  
</body></html>