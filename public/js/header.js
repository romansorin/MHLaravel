let menuToggleBtn = document.querySelector('#menu-toggle');
let openSearchBtn = document.querySelector('.open-search');
let nav = document.querySelector('.nav-wrapper');
let menu = document.getElementById('menu');
let search = document.getElementById('search-wrapper');
let closeSearchBtn = document.querySelector('.close-search');

let nav_array = Array.from(document.querySelectorAll(".nav-link"));
let delays = ['first', 'second', 'third', 'fourth', 'fifth'];

function assignNavLinkDelays() {
    for (let i = 0; i < nav_array.length; i++)
        nav_array[i].classList.add('animated', 'fadeInRight', delays[i]);
}

function replaceInToOut(element) {
    element.classList.remove('fadeIn');
    element.classList.add('fadeOut');
}

function replaceOutToIn(element) {
    element.classList.remove('fadeOut');
    element.classList.add('fadeIn');
}

function addAnimation(element, anim) {
    element.classList.add('animated', anim);
}

function navToggle() {
    nav.classList.toggle('is-open');
}

function menuButtonToggle() {
    menuToggleBtn.classList.toggle('is-active');
}

function menuToggle() {
    menu.classList.toggle('active');
}

function menuIsOpen() {
    return menuToggleBtn.classList.contains('is-active');
}

function elementContainsAnimated(element) {
    return element.classList.contains('animated');
}

menuToggleBtn.addEventListener('click', () => {
    if (menuIsOpen()) {
        if (elementContainsAnimated(menu)) {
            replaceInToOut(menu);
            menuButtonToggle();
            setTimeout(() => {
                navToggle();
                menuToggle();
            }, 500);
        }
    } else {
        if (elementContainsAnimated(menu)) {
            replaceOutToIn(menu);
        } else {
            addAnimation(menu, 'fadeIn');
        }
        assignNavLinkDelays();
        menuButtonToggle();
        navToggle();
        menuToggle();
    }

});
// Open the search wrapper
openSearchBtn.addEventListener('click', () => {
    if (!nav.classList.contains('is-active')) /* I have zero idea why this solves the issue of the menu not opening after the search wrapper is open, but it does. Don't touch or question it. */
        navToggle();
    if (elementContainsAnimated(search))
        replaceOutToIn(search);
    else
        addAnimation(search, 'fadeIn');
    search.style.display = 'block';

});
// Close the search wrapper
closeSearchBtn.addEventListener('click', () => {
    replaceInToOut(search);
    setTimeout(() => {
        search.style.display = 'none';
    }, 500);
    navToggle();
});
