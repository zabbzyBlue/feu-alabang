
     
     /*header*/
      const homeButton = document.getElementById('logobtn');


      homeButton.addEventListener('click', function() {
  
        window.location.href = 'index.html';
      });

      const buyButton = document.getElementById('buybtn-id');

      buyButton.addEventListener('click', function() {
  
        window.location.href = 'shop.html';
      });

      const sellButton = document.getElementById('sellbtn-id');

 
      sellButton.addEventListener('click', function() {
        window.location.href = 'selloffer.html';
      });

      const adminButton = document.getElementById('adminbtn-id');

      function changePlaceholder() {
        var inputElement = document.getElementById("searchfield");
    
        // Check window width
        if (window.innerWidth <= 370) { // Adjust 768 to your desired width
            inputElement.placeholder = "Search pair..";
        } else {
            inputElement.placeholder = "Search your pair..";
        }
      }
      
      // Call the function initially to set the placeholder value based on the initial window size
      changePlaceholder();
      
      // Add event listener for window resize event
      window.addEventListener("resize", changePlaceholder);
      


      /*popups and overlays*/
      const overlay = document.getElementById('overlay');
      const popup = document.getElementById('popup');
      const userqabtn = document.getElementById('userqabtn');


      function togglePopup() {
        overlay.style.display = overlay.style.display === 'block' ? 'none' : 'block';
        popup.style.display = popup.style.display === 'block' ? 'none' : 'block';
      }


      function closePopup() {
        overlay.style.display = overlay.style.display === 'block' ? 'none' : 'block';
        popup.style.display = popup.style.display === 'block' ? 'none' : 'block';
      }
      
      // Add click event listener to overlay
      overlay.addEventListener('click', closePopup);
  
      userqabtn.addEventListener('click', closePopup);
      document.getElementById('adminbtn-id').addEventListener('click', togglePopup);

      const adminqabtn = document.getElementById('adminqabtn');
      adminqabtn.addEventListener('click', function() {
        window.location.href = 'adminlogin.html';
      });


      