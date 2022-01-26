let modal = document.getElementById('modal')

document.getElementById('btn-open-modal').onclick = function () {
  modal.classList.remove('hidden')
}

document.getElementById('btn-cancel').onclick = function () {
  modal.classList.add('hidden')
}

document
  .getElementById('modal-background')
  .addEventListener('click', function (event) {
    modal.classList.add('hidden')
  })