<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
  

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
  
    <link 
      rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Bebas+Neue:wght@400&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap"
      data-tag="font"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


  </head>
  <body>
   <!-- Popups and overlays-->
   <div id="popup" class="popup">
    <p id="adminh2">Admin Login</h2>
    <hr>
    <p id="adminqa">Which are you?</h3>
    <div id="useroradmin">
      <div id="userqabtn">
        <p id="userqabtn-text">User</p>
        <i class="bi bi-person-fill" id="userqabtn-icon"></i>
      </div>
      <div id="adminqabtn">
        <p id="adminqabtn-text">Admin</p>
        <div id="adminqabtn-btncon">
          <img id="adminqabtn-icon" src="public/adminbtn-2.png">
        </div>
      </div>
    </div>
  </div>
  <div id="overlay"></div>
 
  <!--Header Bar-->
  <div class="home-container">
    <link href="./desktop-main.css" rel="stylesheet" />

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
          <div class="searcharea">
            <span class="bi bi-search" id="searchicon"style="display:flex; width: 10px;position: relative; top: 53%; transform: translateY(-50%);"></span>
            <input type="text" id="searchfield" placeholder="Search your pair..">
          </div>
          
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

  </div>
    
    <script
      defer=""
      src="https://unpkg.com/@teleporthq/teleport-custom-scripts"
    ></script>
  </body>
</html>
