let card = document.getElementById('card');
let title = document.getElementById('title');
let rect = card.getBoundingClientRect();

function transformation(event) {
    let x = event.clientX;
    let y = event.clientY;
    makeTransformation(x, y);
}

function makeTransformation(x, y) {
    let x1 = x-(rect.x+(rect.width/2));
    let y1 = y-(rect.y+(rect.height/2));
    card.style.transform = `translateZ(10px) rotateX(${x1/5}deg) rotateY(${y1/8}deg)`;
    title.style.transform = `translateZ(50px)`;
}

function stableCard() {
    card.style.transform = 'translateZ(0px) rotateX(0deg) rotateY(0deg)';
    title.style.transform = 'translateZ(0px)';
}