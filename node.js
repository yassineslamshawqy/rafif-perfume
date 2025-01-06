let up = document.getElementById('up');
let nav = document.getElementById('nav');
let cart_div = document.getElementById('cart');
let cart_a = document.getElementById('va');
window.onscroll = function(){
    if(window.scrollY > 250){
        nav.style.position = "fixed";
        up.style.display = 'block'
    }
    else{
        nav.style.position = "relative";
        up.style.display = 'none';
    }
}
up.addEventListener("click" , () =>{
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

document.getElementById('k').addEventListener('click' ,() => {
    document.getElementById('cart').style.display = 'block';
})
document.getElementById('close').addEventListener('click' ,() => {
    document.getElementById('cart').style.display = 'none';
})
let cart = document.getElementById('cart');
let addCartButton = document.getElementById('a');
let addCartButton1 = document.getElementById('b');
let addCartButton2 = document.getElementById('c');
let addCartButton3 = document.getElementById('d');
let addCartButton4 = document.getElementById('e');
let addCartButton5 = document.getElementById('f');
const quantityElement = document.getElementById('va');
addCartButton.addEventListener("click",() => {
    const currentQuantity = parseInt(quantityElement.innerText, 10);
    quantityElement.innerText = currentQuantity + 1;
    confirm('the product has added to the cart');
    let new_card = document.createElement('div');
    new_card.classList.add('c-cart');
    new_card.innerHTML = `
    <div class="c-cart-img inline">
        <img src='./img/bakarat roj.png'>
    </div>
    <div class="c-text inline">
        <h3 class='inline'>bakarat roj</h3>
        <h3 class = 'price'>0,00$</h3>
        <a href='./products/bakarat roj.php' class = 'order-c inline'>order</a>
    </div>
    `
    cart.appendChild(new_card);
});
addCartButton1.addEventListener("click",() => {
    const currentQuantity = parseInt(quantityElement.innerText, 10);
    quantityElement.innerText = currentQuantity + 1;
    confirm('the product has added to the cart');
    let new_card = document.createElement('div');
    new_card.classList.add('c-cart');
    new_card.innerHTML = `
    <div class="c-cart-img inline">
        <img src='./img/sauvage.png'>
    </div>
    <div class="c-text inline">
        <h3 class='inline'>savauge</h3>
        <h3 class = 'price'>0,00$</h3>
        <a href='./products/savauge.php' class = 'order-c inline'>order</a>
    </div>
    `
    cart.appendChild(new_card);
});
addCartButton2.addEventListener("click",() => {
    const currentQuantity = parseInt(quantityElement.innerText, 10);
    quantityElement.innerText = currentQuantity + 1;
    confirm('the product has added to the cart');
    let new_card = document.createElement('div');
    new_card.classList.add('c-cart');
    new_card.innerHTML = `
    <div class="c-cart-img inline">
        <img src='./img/angels share.png'>
    </div>
    <div class="c-text inline">
        <h3 class='inline'>angel share</h3>
        <h3 class = 'price'>0,00$</h3>
        <a href='products/angel share.php' class = 'order-c inline'>order</a>
    </div>
    `
    cart.appendChild(new_card);
});
addCartButton3.addEventListener("click",() => {
    const currentQuantity = parseInt(quantityElement.innerText, 10);
    quantityElement.innerText = currentQuantity + 1;
    confirm('the product has added to the cart');
    let new_card = document.createElement('div');
    new_card.classList.add('c-cart');
    new_card.innerHTML = `
    <div class="c-cart-img inline">
        <img src='./img/zara.png'>
    </div>
    <div class="c-text inline">
        <h3 class='inline'>zara</h3>
        <h3 class = 'price'>0,00$</h3>
        <a href='products/zara.php' class = 'order-c inline'>order</a>
    </div>
    `
    cart.appendChild(new_card);
});
addCartButton4.addEventListener("click",() => {
    const currentQuantity = parseInt(quantityElement.innerText, 10);
    quantityElement.innerText = currentQuantity + 1;
    confirm('the product has added to the cart');
    let new_card = document.createElement('div');
    new_card.classList.add('c-cart');
    new_card.innerHTML = `
    <div class="c-cart-img inline">
        <img src='./img/hugo.png'>
    </div>
    <div class="c-text inline">
        <h3 class='inline'>hugo extreme</h3>
        <h3 class = 'price'>0,00$</h3>
        <a href='products/zara.php' class = 'order-c inline'>order</a>
    </div>
    `
    cart.appendChild(new_card);
});
addCartButton5.addEventListener("click",() => {
    const currentQuantity = parseInt(quantityElement.innerText, 10);
    quantityElement.innerText = currentQuantity + 1;
    confirm('the product has added to the cart');
    let new_card = document.createElement('div');
    new_card.classList.add('c-cart');
    new_card.innerHTML = `
    <div class="c-cart-img inline">
        <img src='./img/guess.png'>
    </div>
    <div class="c-text inline">
        <h3 class='inline'>guess</h3>
        <h3 class = 'price'>0,00$</h3>
        <a href='products/guess.php' class = 'order-c inline'>order</a>
    </div>
    `
    cart.appendChild(new_card);
});