const product = [
    {
        id:0,
        image: 'image/uni.jpg',
        title: 'Uni nigiri',
        price: 120,
    },
        {
            id:1, 
            image: 'image/salmon.jpg',
            title: 'Mixed nigiri',
            price: 155,   
            
        },

    
    {
        id:2,
        image: 'image/mixed.jpg',
        title: 'Mixed nigiri',
        price: 120, 
    },
    {
        id:3,
        image: 'image/tuna.jpg',
        title: 'Tuna nigiri',
        price: 120,
    },
    {
        id:4,
        image: 'image/tamago.jpg',
        title: 'Tamago nigiri',
        price: 120,
    },
    {
        id:5,
        image: 'image/gulkan.jpg',
        title: 'Salmon gulkan',
        price: 120,
    },
    {
        id:6,
        image: 'image/aburi.jpg',
        title: 'Aburi salmon',
        price: 120,
    },
    {
        id:7,
        image: 'image/suke.jpg',
        title: 'Salmon suke',
        price: 120,
    },
    {
        id:8,
        image: 'image/kani.jpg',
        title: 'Kani nigiri',
        price: 120,
    },    {
        id:9,
        image: 'image/aburi2.jpg',
        title: 'Aburi tuna',
        price: 140,
    },
    {
        id:10,
        image: 'image/tuna.jpg',
        title: 'Tuna suke',
        price: 140,
    },    {
        id:11,
        image: 'image/Ebi.jpg',
        title: 'Ebi nigiri',
        price: 120,
    }
   
   
]

const categories =[...new Set(product.map((item)=>{return item}))]
let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>{
    var {image, title, price} = item;
    return(
        `<div class='box'>
        <div class='img-box'>
            <img class='images' src=${image}></img>
            </div>
            <div class='bottom'> 
            <p>${title}</p>
            <h2>$ ${price}.00</h2>` + 
            "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
            `</div>
            </div>`


        
)
}).join('')

var cart = [];

function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}

function displaycart(a){
    let j = 0, total=0;
    document.getElementById("count").innerHTML= cart.length;
    if(cart.length == 0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "₱ "+0+".00";
    }
    else{
        document.getElementById('cartItem').innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "$ "+total+".00";
            return(
                `<div class='cart-item'>
                <div clas='row-img'>
                <img class='rowimg' src=${image}>
                </div>
                <p style = 'font-size: 12px;'>${title}</p>
                <h2 style = 'font-size: 15px;'>₱ ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++)+")'></i></div>"

            );
        }).join('');
    }
}