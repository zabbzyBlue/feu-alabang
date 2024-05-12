
     
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

      