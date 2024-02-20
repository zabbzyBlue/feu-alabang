<?php

/*--Request Variables from index.php--*/
 $username = $_GET['name'];
 $kwhusage_var = $_GET['kwhusage'];
/*ends here*/

/*--declare tariff/fee variable to be used for getting the total cost per kwhusage--*/
 $tariff = 12.3168;
/*ends here*/

/*--Generate total cost per kwhusage--*/
 $total = $tariff * $kwhusage_var;
/*ends here*/

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">
<!-- Header -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="header.css" media="screen">
    <link rel="stylesheet" href="resultscss.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <meta name="generator" content="Meralee 5.10.10, Meralee.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
</head>
<!-- Header Ends Here -->

<!-- Display all important information -->
  <body class="u-body u-xl-mode" data-lang="en">
     <!-- Header-->
    <header class="u-clearfix u-header u-header" id="sec-b6de"><div class="u-clearfix u-sheet u-valign-bottom u-sheet-1">
        <a href="https://company.meralco.com.ph/meralco-online" class="u-image u-logo u-image-1" data-image-width="600" data-image-height="600">
          <img src="images/EE.png" class="u-logo-image u-logo-image-1">
        </a>
      </div>
    </header>
    <!-- Header Ends Here-->
    
    <!---------- Whole Section for displaying Information ------------->
    <section class="u-clearfix u-section-1" id="sec-8efa">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-border-2 u-border-grey-75 u-form u-form-1">
          <form method = "post" action="results.php" class="u-clearfix u-form-spacing-12 u-form-vertical u-inner-form" source="email" name="form" style="padding: 30px;">
            <div class="u-form-group u-form-name u-form-group-1">
              <label for="name-4ae3" class="u-label" style="font-weight: bold;">Consumer's Total kWh Usage</label>
              <input type="text" value = "<?php echo $kwhusage_var ?>" id="name-4ae3" name="name" class="u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-4ae3" class="u-label">Tariff Per kWh</label>
              <input type="email" value = "₱12.3168"id="email-4ae3" name="email" class="u-input u-input-rectangle" required="">
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="text-47d3" class="u-label">Consumer</label>
              <input type="text" value = "<?php echo $username ?>"placeholder="" id="text-47d3" name="text-1" class="u-input u-input-rectangle">
            </div>
            <div class="u-form-group u-form-group-4">
              <label for="text-6bfd" class="u-label">Total Costs</label>
              <input type="text" value = "₱<?php echo number_format((float)$total, 2, ".", '') ?>" id="text-6bfd" name="text" class="u-input u-input-rectangle">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <a href="index.php" class="u-btn u-btn-submit u-button-style">Home</a>
            
            </div>
          </form>
        </div>
        <div class="u-border-3 u-border-grey-dark-1 u-line u-line-horizontal u-line-1"></div>
      </div>
    </section>
    
  
</body></html>