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
	image: 'image/gg-1.jpg',
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
	title: '',
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
	title: 'Mobile',
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
];

const categories = [...new Set(product.map((item)=>
	{return item}))]

const filterItems = (a)=>{
	const flterCategories = categories.filter(item);
	function item(value){
		if(value.id==a){
			return(
				value.id
				)
		}
	}
	displayItem(flterCategories)
}


const displayItem = (items) => {
	document.getElementById('root').innerHTML = items.map((item)=>
	{
		var {image, title, price} = item;
		return(
			`<div class='box'>
			<h3>${title}</h3>
			<div class='img-box'>
			<img class='images' src=${image}></img>
			</div>
			<div class='bottom'>
			<h2>$ ${price}.00</h2>
			<button>Add to cart</button>
			</div>
			</div>`)
	}).join('');
}
displayItem(categories);