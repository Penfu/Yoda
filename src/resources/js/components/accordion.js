const accordionButtons  = document.querySelectorAll('.accordion-btn')
const accordionIcons    = document.querySelectorAll('.accordion-icon')
const accordionContents = document.querySelectorAll('.accordion-content')

accordionButtons.forEach(function (element, index) {
    element.addEventListener('click', function () {
        // Close other accordion contents and toggle the current one
        for (let i = 0; i < accordionContents.length; i++) {
            if (i == index) {
                accordionContents[i].classList.toggle('hidden')
                accordionIcons[i].classList.toggle('rotate-180')
            } else {
                accordionContents[i].classList.add('hidden')
                accordionIcons[i].classList.remove('rotate-180')
            }
        }
    })
})
