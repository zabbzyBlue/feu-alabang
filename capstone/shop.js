let product = [];
const itemsPerPage = 12;
let currentPage = 1;
let totalPages = 1;
let searchQuery = '';

// Function to set search query if exists
function setSearchQuery() {
    searchQuery = new URLSearchParams(window.location.search).get('search');
    const searchfield = document.getElementById('searchfield');
    const h2SearchResults = document.getElementById('h2-searchresults');
    const h3SearchLabel = document.getElementById('h3-searchlabel');
    const shoptitle = document.getElementById('shoptitle');

    if (!searchQuery) {
        h2SearchResults.innerText = 'Product List';
        h3SearchLabel.style.display = 'none';
        shoptitle.style.height = '130px';
    } else {
        searchfield.value = searchQuery;
        h2SearchResults.innerText = 'Search results';
        h3SearchLabel.innerText = searchQuery;
        shoptitle.style.height = '180px';

        // Filter items based on search query
        filterItemsByName(searchQuery);
    }
}

// Function to filter items by name
function filterItemsByName(query) {
    console.log('Filtering items by name:', query);
    const filteredItems = product.filter(item => item.shoesname.toLowerCase().includes(query.toLowerCase()));
    console.log('Filtered Items:', filteredItems);

    displayItem(filteredItems);
    totalPages = Math.ceil(filteredItems.length / itemsPerPage);
    renderPaginationButtons();
}

// Array of buttons
const btns = [
    { brandid: 1, name: 'Nike' },
    { brandid: 2, name: 'Adidas' },
    { brandid: 3, name: 'Converse' },
    { brandid: 4, name: 'New Balance' }
];

// Render filter buttons
const renderFilterButtons = () => {
    const btnsContainer = document.getElementById('btns');
    btnsContainer.innerHTML = btns.map(({ brandid, name }) => {
        return `<button class='fil-p' onclick='filterItems(${brandid})'>${name}</button>`;
    }).join('');
};

// Keep track of active filters
let activeFilter = null;

// Function to filter items based on the active filter and search query
const filterItems = (brandid) => {
    if (activeFilter === brandid) {
        activeFilter = null;
    } else {
        activeFilter = brandid;
        currentPage = 1;
    }

    const filteredItems = product.filter(item => 
        (activeFilter ? item.brandid === activeFilter : true) && 
        (searchQuery ? item.shoesname.toLowerCase().includes(searchQuery.toLowerCase()) : true)
    );
    
    totalPages = Math.ceil(filteredItems.length / itemsPerPage);
    const itemsToShow = filteredItems.slice(0, itemsPerPage);
    displayItem(itemsToShow);
    renderPaginationButtons();
};

// Function to display items
const displayItem = (items) => {
    document.getElementById('root').innerHTML = items.map((item) => {
        const { shoesid, image, shoesname, price, category } = item;
        return `
            <div class='box' onclick='redirectToDetails(${shoesid})'>
                <div class='img-box'>
                    <img class='images' src=${image} alt='${shoesname}'></img>
                </div>
                <div class='bottom'>
                    <p class="shoecategory">${category}</p>
                    <p class="shoetitle">${shoesname}</p>
                    <p class="shoeprice">&#8369;${price}</p>
                </div>
            </div>`;
    }).join('');
};

const redirectToDetails = (shoesid) => {
    window.location.href = `shoesdetails.html?shoesid=${shoesid}`;
};

// Function to connect to the database and retrieve product data
function connectToDB() {
    fetch('connectdb_shop.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            product = data.map(item => ({
                shoesid: item.shoesid,
                brandid: Number(item.brandid),
                image: item.image,
                shoesname: item.shoesname,
                price: item.price,
                category: item.category,
                shoesdate: item.shoesdate
            }));

            product.sort((a, b) => new Date(b.shoesdate) - new Date(a.shoesdate));
            renderFilterButtons();
            displayItemsForPage(currentPage);
            calculateTotalPages();
            renderPaginationButtons();

            // Call the function to set search query after products are loaded
            setSearchQuery();
        })
        .catch(error => {
            console.error('Error connecting to database:', error);
        });
}

// Call the function to connect to the database
connectToDB();

// Function to calculate total pages based on the filtered items
const calculateTotalPages = () => {
    totalPages = Math.ceil(product.length / itemsPerPage);
};

// Function to display items for the current page
const displayItemsForPage = (page) => {
    const startIndex = (page - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const itemsToShow = product.slice(startIndex, endIndex);
    displayItem(itemsToShow);
};

// Function to render pagination buttons with updated total pages
const renderPaginationButtons = () => {
    const paginationContainer = document.getElementById('pagination');
    let buttonsHTML = '';

    let startPage = Math.max(1, currentPage - 1);
    let endPage = Math.min(totalPages, startPage + 3);

    if (endPage - startPage < 3) {
        startPage = Math.max(1, endPage - 3);
    }

    buttonsHTML += `<button class="btnpagination" onclick="changePage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}>&lt&lt;</button>`;

    for (let i = startPage; i <= endPage; i++) {
        buttonsHTML += `<button class="btnpagination" onclick="changePage(${i})" ${i === currentPage ? 'class="active"' : ''}>${i}</button>`;
    }

    buttonsHTML += `<button class="btnpagination" onclick="changePage(${currentPage + 1})" ${currentPage === totalPages ? 'disabled' : ''}>&gt&gt;</button>`;

    paginationContainer.innerHTML = buttonsHTML;
};

const changePage = (page) => {
    currentPage = page;
    displayItemsForPage(currentPage);
    renderPaginationButtons();
};

calculateTotalPages();
renderPaginationButtons();
displayItemsForPage(currentPage);
