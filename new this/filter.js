const btns=[
	{
		id: 1,
		name: 'Nike'
	},
	{
		id: 2,
		name: 'Adidas'
	},
	{
		id: 3,
		name: 'Converse'
	},
	{
		id: 4,
		name: 'New Balance'
	},
	
	
	
	]
	
	const filters = [...new Set(btns.map((btn)=>
		{return btn}))]
	
	document.getElementById('btns').innerHTML=filters.map((btn)=>{
		var {name, id} = btn;
		return(
			"<button class='fil-p' onclick='filterItems("+(id)+`)'>${name}</button>`
			)
	}).join('');
	
	const product = [
	{
		id: 1,
		image: 'image/court-purple.jpg',
		image2: 'image/vomero.jpg',
		title: 'Air Jordan 4 Green',
		price: 120,
		category: 'Nike'
	},
	{
		id: 4,
		image: 'image/newbalance.jpg',
		title: 'NB 9060',
		price: 60,
		category: 'New Balance'
	},
	{
		id: 3,
		image: 'image/samba-white.jpg',
		title: 'Chuck Taylor All Star Satin',
		price: 230,
		category: 'Converse'
	},
	
	{
		id: 2,
		image: 'image/samba-white.jpg',
		title: 'Chuck Taylor All Star Satin',
		price: 230,
		category: 'Converse'
	},
	
	
	
	];
	
	
	
	// Keep track of active filters
	let activeFilter = null;
	
	const filterItems = (id) => {
		if (activeFilter === id) {
			// If the same filter is clicked again, clear the active filter
			activeFilter = null;
		} else {
			// Set the active filter to the clicked filter
			activeFilter = id;
			// Reset current page to 1 when a filter is applied
			currentPage = 1;
		}
	  
		// Filter the items based on the active filter
		const filteredItems = activeFilter ? product.filter(item => item.id === activeFilter) : product;
	  
		// Recalculate total pages based on the filtered items
		totalPages = Math.ceil(filteredItems.length / itemsPerPage);
	  
		// Limit the number of items displayed to itemsPerPage
		const itemsToShow = filteredItems.slice(0, itemsPerPage);
	  
		// Display the filtered items
		displayItem(itemsToShow);
	  
		// Render pagination buttons with updated total pages
		renderPaginationButtons();
	};
	// Function to display items
	const displayItem = (items) => {
	  document.getElementById('root').innerHTML = items.map((item) => {
		const { image, title, price, category } = item;
		return `
		  <div class='box'>
			<div class='img-box'>
			  <img class='images' src=${image}></img>
			</div>
			
			<div class='bottom'>
			<p class="shoecategory"> ${category} </p>
			<p class="shoetitle"> ${title} </p>
			<p class="shoeprice">₱ ${price}.00</p>
			</div>
		  </div>`;
	  }).join('');
	};
	
	// Render filter buttons
	document.getElementById('btns').innerHTML = btns.map(({ id, name }) => {
	  return `<button class='fil-p' onclick='filterItems(${id})'>${name}</button>`;
	}).join('');
	
	// Initially display all items
	displayItem(product);

	const itemsPerPage = 12; // Number of items to display per page

let currentPage = 1; // Current page number
let totalPages = Math.ceil(product.length / itemsPerPage); // Total number of pages

// Function to display items for the current page
const displayItemsForPage = (page) => {
    const startIndex = (page - 1) * itemsPerPage;
    const endIndex = startIndex + itemsPerPage;
    const itemsToShow = product.slice(startIndex, endIndex);
    displayItem(itemsToShow);
};

// Function to render pagination buttons
const renderPaginationButtons = () => {
    const paginationContainer = document.getElementById('pagination');
    let buttonsHTML = '';

    // Calculate the range of page numbers to display
    let startPage = Math.max(1, currentPage - 1);
    let endPage = Math.min(totalPages, startPage + 3);

    // Adjust startPage and endPage if less than 4 pages are available
    if (endPage - startPage < 3) {
        startPage = Math.max(1, endPage - 3);
    }

    // Add left arrow button
    buttonsHTML += `<button class="btnpagination" onclick="changePage(${currentPage - 1})" ${currentPage === 1 ? 'disabled' : ''}>&lt&lt;</button>`;

    // Add page number buttons
    for (let i = startPage; i <= endPage; i++) {
        buttonsHTML += `<button class="btnpagination" onclick="changePage(${i})" ${i === currentPage ? 'class="active"' : ''}>${i}</button>`;
    }

    // Add right arrow button
    buttonsHTML += `<button class="btnpagination" onclick="changePage(${currentPage + 1})" ${currentPage === totalPages ? 'disabled' : ''}>&gt&gt;</button>`;

    paginationContainer.innerHTML = buttonsHTML;
};

// Function to change the current page and update the displayed items
const changePage = (page) => {
    currentPage = page;
    displayItemsForPage(currentPage);
    renderPaginationButtons();
};

// Initially display items for the first page
displayItemsForPage(currentPage);
renderPaginationButtons();