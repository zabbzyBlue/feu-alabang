
     
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

     const adminbtn = document.getElementById('adminbtn-id');
     adminbtn.addEventListener('click', function() {
       window.location.href = 'adminlogin.html';
     });


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
     


     
     // Sample product data with release dates
