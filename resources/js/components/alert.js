window.addEventListener('alert', event => {
    console.log('alert');

    const alert = document.querySelector('.alert')
    const btnClose = document.querySelector('.alert-btn-close')

    function close () {
        alert.remove()
    }

    let delay = alert.dataset.delay * 1000 // convert to milliseconds
    if (delay > 0) {
        setTimeout(function () {
            close()
        }, delay)
    }

    btnClose.addEventListener('click', function () {
        close()
    })
})
