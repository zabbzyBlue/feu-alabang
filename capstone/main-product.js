let products = [];

function connectToDB() {
  fetch('connectdb_main.php') // Make sure this path is correct
      .then(response => {
          if (!response.ok) {
              throw new Error('Network response was not ok');
          }
          return response.json();
      })
      .then(data => {
          products = data.map(item => ({
              shoesid: item.shoes_id,
              brandid: Number(item.brand_id),
              image: item.image,
              brandname: item.brand_name,
              productname: item.shoes_name,
              productprice: item.shoes_price,
              releaseDate: item.date_listed,
              brandcategory: item.brand_name // Assuming you want to use brand_name as brandcategory
          }));

          products.sort((a, b) => new Date(b.releaseDate) - new Date(a.releaseDate));

          updateGallery(); // Call the updateGallery function after fetching and sorting the data
      })
      .catch(error => {
          console.error('Error connecting to database:', error);
      });
}

/*products*/
let scrollContainer1 = document.querySelector(".gallery1");
let backBtn1 = document.getElementById("backBtn1");
let nextBtn1 = document.getElementById("nextBtn1");
let backBtn3 = document.getElementById("backBtn3");
let nextBtn3 = document.getElementById("nextBtn3");

scrollContainer1.addEventListener("wheel", (evt) => {
  evt.preventDefault();
  scrollContainer1.scrollLeft += evt.deltaY;
  scrollContainer1.style.scrollBehavior = "auto";
});

nextBtn1.addEventListener("click", () => {
  scrollContainer1.style.scrollBehavior = "smooth";
  scrollContainer1.scrollLeft += 900;
});

backBtn1.addEventListener("click", () => {
  scrollContainer1.style.scrollBehavior = "smooth";
  scrollContainer1.scrollLeft -= 900;
});

nextBtn3.addEventListener("click", () => {
  if (window.innerWidth <= 860) {
    scrollContainer1.style.scrollBehavior = "smooth";
    scrollContainer1.scrollLeft += 850; // Adjust scroll value for smaller screens
  } else {
    scrollContainer1.style.scrollBehavior = "smooth";
    scrollContainer1.scrollLeft += 900;
  }
});

backBtn3.addEventListener("click", () => {
  if (window.innerWidth <= 860) {
    scrollContainer1.style.scrollBehavior = "smooth";
    scrollContainer1.scrollLeft -= 850; // Adjust scroll value for smaller screens
  } else {
    scrollContainer1.style.scrollBehavior = "smooth";
    scrollContainer1.scrollLeft -= 900;
  }
});

function updateGallery() {
  let gallery = document.querySelector(".gallery1");
  gallery.innerHTML = ''; // Clear previous content

  // Calculate the number of divs needed
  const numOfDivs = Math.ceil(products.length / 3);

  // Loop through the number of divs
  for (let i = 0; i < numOfDivs; i++) {
    // Create a new div for every three products
    let div = document.createElement("div");
    div.classList.add("product-group"); // Add a class for styling if needed

    // Loop through three products or less if remaining products are less than three
    for (let j = i * 3; j < (i + 1) * 3 && j < products.length; j++) {
      let product = products[j];
      let productHtml = `
        <span class="product" data-shoesid="${product.shoesid}">
          <img src="${product.image}">
          <p id="p-brandname" class="productinfos brandname">${product.brandname}</p>
          <p id="p-productname"class="productinfos productname">${product.productname}</p>
          <p id="p-productprice"class="productinfos productprice">&#8369;${product.productprice}</p>
        </span>`;
      div.innerHTML += productHtml;
    }
    gallery.appendChild(div);
  }

  // Add event listener to each product
  gallery.querySelectorAll('.product').forEach(product => {
    product.addEventListener('click', () => {
      const shoesId = product.dataset.shoesid;
      window.location.href = `shoesdetails.html?shoesid=${shoesId}`;
    });
  });
}

// Call the function to fetch data and update the gallery initially
connectToDB();
