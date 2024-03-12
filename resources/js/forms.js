const nextButton = document.getElementById('form-one-btn')
const backButton = document.getElementById('form-back-btn')

nextButton.addEventListener('click', toggleForm)
backButton.addEventListener('click', toggleForm)

function toggleForm(event) {
    const formOne = document.getElementById('form-one')
    const formTwo = document.getElementById('form-two')

    formOne?.toggleAttribute('hidden')
    formTwo?.toggleAttribute('hidden')
}
