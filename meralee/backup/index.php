<?php 

  if (isset($_POST['kwh_holder'])) {
      $kwh_var = $_POST['kwh_holder'];
      $url = "Generate-Results.php?kwh_holder=" . $kwh_var;
      header('Location: ' . $url);
      exit();


}

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Calculation Page</title>
    <link rel="stylesheet" href="header.css" media="screen">
    <link rel="stylesheet" href="Calculation-Page.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Meralee 5.10.10, meralee.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Calculation Page">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-b6de"><div class="u-clearfix u-sheet u-valign-bottom u-sheet-1">
        <a href="https://company.meralco.com.ph/meralco-online" class="u-image u-logo u-image-1" data-image-width="600" data-image-height="600">
          <img src="images/EE.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-8772">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-2 u-border-grey-dark-1 u-container-style u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-form u-form-1">
              <form method = "post" action="index.php" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" name="form" style="padding: 10px;">
                <div class="u-form-group u-form-name">
                  <label for="name-8d84" class="u-label">Total kWh Usage</label>
                  <input type="text" placeholder="Ex.: 1234.5678" id="name-8d84" name="kwh_holder" class="u-input u-input-rectangle" required="">
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <input type="submit" class ="u-btn u-btn-submit u-button-style" value="Submit"></a>
                  
                   
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
  
</body></html>