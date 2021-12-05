let dropdown = document.getElementById('dropdown')
let icoDropDown = document.getElementById('ico-drop-down')
let icoDropUp = document.getElementById('ico-drop-up')

document.getElementById('btn-dropdown').onclick = function () {
    dropdown.classList.toggle('hidden')
    icoDropDown.classList.toggle('hidden')
    icoDropUp.classList.toggle('hidden')
}
