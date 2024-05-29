<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <meta charset="utf-8" />
    <style data-tag="reset-style-sheet">
        html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"],[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
        html {
            font-family: Inter;
            font-size: 16px;
        }
    </style>
    <link 
      rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"/>
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <!--Header Bar-->
    <div class="home-container">
        <link href="./desktop-main.css" rel="stylesheet" />
        <link href="./headerbar.css" rel="stylesheet" />
        <header data-role="Header" class="home-header">
            <!-- Left Section -->
            <div class="home-container1">
                <button id="logobtn" class="home-button button">
                    <img alt="image" src="public/homebtn-1.png" class="home-image1">
                    <img alt="image" src="public/homebtn-2.png" class="home-image2">
                </button>
            </div>
            <!-- Right Section-->
            <div class="home-container2">
                <form method="get" action="shop.html" class="searcharea">
                    <span class="bi bi-search" id="searchicon" style="display:flex; width: 10px;position: relative; top: 53%; transform: translateY(-50%);"></span>
                    <input type="text" id="searchfield" name="search" placeholder="Search your pair..">
                </form>  
                <button id="buybtn-id" class="buybtn button">
                    <span class="buybtn-text">
                        <span>BUY</span>
                        <br />
                    </span>
                </button>
                <button id="sellbtn-id" class="sellbtn button">
                    <span class="sellbtn-text">
                        <span>SELL</span>
                        <br />
                    </span>
                </button>
                <button id="adminbtn-id" class="adminbtn button">
                    <img alt="image" src="public/adminbtn.png" class="home-image3">
                </button>
            </div>
        </header>
        <script type = "text/javascript" src="headerbar.js"></script>
    </div>

    <link rel="stylesheet" href="./shoesdetails.css" />
    <div class="container" style="margin-top: 150px;">
        <div class="row">
            <div class="col-md-6">
                <div class="slider">
                    <div class="list" id="list-holders">
                        <div class="item" id="img1">
                            <img src="" alt="">
                        </div>
                        <div class="item" id="img2">
                            <img src="" alt="">
                        </div>
                        <div class="item" id="img3">
                            <img src="" alt="">
                        </div>
                    </div>
                    <div class="buttons">
                        <button id="prev"><</button>
                        <button id="next">></button>
                    </div>
                    <ul class="dots">
                        <li class="active"></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6" id="second-div">
              <form id="buy_form" method="post" action="payment.php">
                <p id="p-shoename" class="shoesdetails-text"></p>
                <p id="p-selectsize" class="shoesdetails-text1">Select Size</p>
                <select id="sizebutton" class="shoesdetails-select" name="shoe_size">
                    <option value="Option 1"></option>
                    <option value="Option 2"></option>
                    <option value="Option 3"></option>
                </select>
                <input type="hidden" name="shoe_name" id="shoe_name_input">
                <input type="hidden" name="brand_name" id="brand_name_input">
                <input type="hidden" name="shoe_price" id="shoe_price_input">
                <input type="hidden" name="image_url1" id="image_url1_input">
                <input type="hidden" name="shoe_id" value="<?php echo $shoesid; ?>">
                <button type="submit" id="buyshoes_btn" class="shoesdetails-button buyshoesbtn">Buy</button>
            </form>
            </div>
        </div>
    </div>

    <?php
        $servername = "localhost";
        $username = "snkrplnt_dbuser";
        $password = "snkrplnt_dbpass";
        $dbname = "snkrplnt_capstonedb";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $shoesid = isset($_GET['shoesid']) ? $_GET['shoesid'] : 1;

        $sql = "SELECT shoes_name, brand_name, shoes_price, image_url1, image_url2, image_url3 FROM shoestb WHERE shoes_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $shoesid);
        $stmt->execute();
        $stmt->bind_result($shoes_name, $brand_name, $shoes_price, $image_url1, $image_url2, $image_url3);
        $stmt->fetch();
        $stmt->close();
        $conn->close();

        echo "<script>
            const shoesData = {
                shoes_name: '" . addslashes($shoes_name) . "',
                brand_name: '" . addslashes($brand_name) . "',
                shoes_price: '" . addslashes($shoes_price) . "',
                image_url1: '" . addslashes($image_url1) . "',
                image_url2: '" . addslashes($image_url2) . "',
                image_url3: '" . addslashes($image_url3) . "'
            };
        </script>";

        
    ?>

    

    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function() {
            const pShoename = document.getElementById("p-shoename");
            const sizeButton = document.getElementById("sizebutton");
            const img1 = document.querySelector("#img1 img");
            const img2 = document.querySelector("#img2 img");
            const img3 = document.querySelector("#img3 img");
            const brandNameInput = document.getElementById("brand_name_input");
            const shoeNameInput = document.getElementById("shoe_name_input");
            const shoePriceInput = document.getElementById("shoe_price_input");
            const imgUrl1Input = document.getElementById("image_url1_input");
        

            // Update HTML elements with the data
            pShoename.textContent = shoesData.shoes_name;
            sizeButton.options[0].textContent = shoesData.shoes_price;
            img1.src = shoesData.image_url1;
            img2.src = shoesData.image_url2;
            img3.src = shoesData.image_url3;

            // Update hidden inputs with the data
            shoeNameInput.value = shoesData.shoes_name;
            shoePriceInput.value = shoesData.shoes_price;
            brandNameInput.value = shoesData.brand_name;
            imgUrl1Input.value = shoesData.image_url1;
        });
    </script>
</body>
</html>
