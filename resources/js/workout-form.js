class WorkoutForm {
    constructor() {
        this.nextButton = document.getElementById('form-one-btn')
        this.backButton = document.getElementById('form-back-btn')
        this.submitButton = document.getElementById('submit-btn')
        this.form = document.getElementById('workout-form')
        if (this.nextButton instanceof Element) {
            this.addEventListeners()
        }
    }

    addEventListeners() {
        this.nextButton.addEventListener('click', () => this.showSecondForm())
        this.backButton.addEventListener('click', () => this.toggleForm())
        this.submitButton.addEventListener('click', () => this.submitForm())
    }

    toggleForm() {
        const formOne = document.getElementById('form-one')
        const formTwo = document.getElementById('form-two')

        formOne?.toggleAttribute('hidden')
        formTwo?.toggleAttribute('hidden')
    }

    validateFirstForm() {
        const ageInput = document.getElementById('age')
        const age = parseInt(ageInput.value)

        if (isNaN(age) || age < 18 || age > 90) {
            alert('Invalid age. Please enter a number between 18 and 90.')
            return false
        }

        const gender = document.getElementById('gender').value
        if (!gender) {
            alert('Please select your gender.')
            return false
        }

        return true
    }

    validateSecondForm() {
        const heightInput = document.getElementById('height')
        const height = parseInt(heightInput.value)

        if (isNaN(height)) {
            alert('Please enter height.')
            return false
        }

        const weightInput = document.getElementById('weight')
        const weight = parseInt(weightInput.value)

        if (isNaN(weight)) {
            alert('Please enter weight.')
            return false
        }

        const amountChecked = document.querySelector('[name="workout-amount"][aria-checked="true"]');
        if (amountChecked instanceof Element === false) {
            alert('Please select current weekly exercise frequency.')
            return false
        }

        return true
    }

    showSecondForm() {
        const isFirstFormValid = this.validateFirstForm()

        if (isFirstFormValid) {
            this.toggleForm()
        }
    }

    submitForm() {
        if (this.validateSecondForm()) {
            this.submitButton.disabled = true
            this.form.submit()
        }
    }
}

new WorkoutForm()