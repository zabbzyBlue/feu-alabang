
     
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

      /*products*/
      let scrollContainer1 = document.querySelector(".gallery1");
      let scrollContainer2 = document.querySelector(".gallery2");
      let backBtn1 = document.getElementById("backBtn1");
      let nextBtn1= document.getElementById("nextBtn1");
      let backBtn2 = document.getElementById("backBtn2");
      let nextBtn2= document.getElementById("nextBtn2");
      let backBtn3 = document.getElementById("backBtn3");
      let nextBtn3= document.getElementById("nextBtn3");
      let backBtn4 = document.getElementById("backBtn4");
      let nextBtn4= document.getElementById("nextBtn4");

      scrollContainer1.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer1.scrollLeft += evt.deltaY;
        scrollContainer1.style.scrollBehavior = "auto";
      });

      scrollContainer2.addEventListener("wheel", (evt) => {
        evt.preventDefault();
        scrollContainer2.scrollLeft += evt.deltaY;
        scrollContainer2.style.scrollBehavior = "auto";
      });

      nextBtn1.addEventListener("click", ()=>{
        scrollContainer1.style.scrollBehavior = "smooth";
        scrollContainer1.scrollLeft += 900;
      });

      backBtn1.addEventListener("click", ()=>{
        scrollContainer1.style.scrollBehavior = "smooth";
        scrollContainer1.scrollLeft -= 900;
      });

      nextBtn2.addEventListener("click", ()=>{
        scrollContainer2.style.scrollBehavior = "smooth";
        scrollContainer2.scrollLeft += 900;
      });

      backBtn2.addEventListener("click", ()=>{
        scrollContainer2.style.scrollBehavior = "smooth";
        scrollContainer2.scrollLeft -= 900;
      });

      nextBtn3.addEventListener("click", ()=>{
        if (window.innerWidth <= 860) {
          scrollContainer1.style.scrollBehavior = "smooth";
          scrollContainer1.scrollLeft += 850; // Adjust scroll value for smaller screens
        } else {
          scrollContainer1.style.scrollBehavior = "smooth";
          scrollContainer1.scrollLeft += 900;
        }
      });

      backBtn3.addEventListener("click", ()=>{
        if (window.innerWidth <= 860) {
          scrollContainer1.style.scrollBehavior = "smooth";
          scrollContainer1.scrollLeft -= 850; // Adjust scroll value for smaller screens
        } else {
          scrollContainer1.style.scrollBehavior = "smooth";
          scrollContainer1.scrollLeft -= 900;
        }
      });

      nextBtn4.addEventListener("click", ()=>{
        if (window.innerWidth <= 860) {
          scrollContainer2.style.scrollBehavior = "smooth";
          scrollContainer2.scrollLeft += 850; // Adjust scroll value for smaller screens
        } else {
          scrollContainer2.style.scrollBehavior = "smooth";
          scrollContainer2.scrollLeft += 900;
        }
      });

      backBtn4.addEventListener("click", ()=>{
        if (window.innerWidth <= 860) {
          scrollContainer2.style.scrollBehavior = "smooth";
          scrollContainer2.scrollLeft -= 850; // Adjust scroll value for smaller screens
        } else {
          scrollContainer2.style.scrollBehavior = "smooth";
          scrollContainer2.scrollLeft -= 900;
        }
      });

      