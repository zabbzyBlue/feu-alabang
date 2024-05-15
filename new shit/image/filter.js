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
	title: 'Air Jordan 4 Green',
	price: 120,
	category: 'Nike'
},
{
	id: 4,
	image: 'image/hh-2.jpg',
	title: 'NB 9060',
	price: 60,
	category: 'New Balance'
},
{
	id: 3,
	image: 'image/ee-3.jpg',
	title: 'Chuck Taylor All Star Satin',
	price: 230,
	category: 'Converse'
},
{
	id: 1,
	image: 'image/gg-2.jpg',
	title: 'Air Force 1 - 50th Anniversary',
	price: 300,
	category: 'Nike'
},
{
	id: 4,
	image: 'image/hh-3.jpg',
	title: 'NB T500',
	price: 65,
	category: 'New Balance'
},
{
	id: 3,
	image: 'image/ee-2.jpg',
	title: 'what',
	price: 200,
	category: 'cameras'
},
{
	id: 4,
	image: 'image/dd-2.jpg',
	title: 'Laptop',
	price: 100,
	category: 'Laptop'
},
{
	id: 1,
	image: 'image/gg-3.jpg',
	title: 'Mobile (Nike)',
	price: 350,
},
{
	id: 3,
	image: 'image/ee-1.jpg',
	title: 'DSLR Camera',
	price: 130,
	category: 'cameras'
},
{
	id: 2,
	image: 'image/hh-1.jpg',
	title: 'Air Pods',
	price: 85,
	category: 'airpods'
},

{
	id: 4,
	image: 'image/dd-2.jpg',
	title: 'Laptop',
	price: 100,
	category: 'Laptop'
},
{
	id: 1,
	image: 'image/gg-3.jpg',
	title: 'Mobile (Nike)',
	price: 350,
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
  }

  // Filter the items based on the active filter
  const filteredItems = activeFilter ? product.filter(item => item.id === activeFilter) : product;

  // Display the filtered items
  displayItem(filteredItems);
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
		<p> ${category} </p>
		<p> ${title} </p>
        <p>₱ ${price}.00</p>
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