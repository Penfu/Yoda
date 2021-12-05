let mobileMenu = document.getElementById('mobile-menu')
let mobileHamburgerIcon = document.getElementById('hamburger-mobile-menu')
let mobileCrossIcon = document.getElementById('cross-mobile-menu')

document.getElementById('btn-mobile-menu').onclick = function () {
    mobileHamburgerIcon.classList.toggle('hidden')
    mobileCrossIcon.classList.toggle('hidden')
    mobileMenu.classList.toggle('hidden')
}
