class WorkoutForm {
    constructor() {
        this.nextButton = document.getElementById('form-one-btn');
        this.backButton = document.getElementById('form-back-btn');

        this.addEventListeners();
    }

    addEventListeners() {
        this.nextButton.addEventListener('click', () => this.showSecondForm());
        this.backButton.addEventListener('click', () => this.toggleForm());
    }

    toggleForm() {
        const formOne = document.getElementById('form-one');
        const formTwo = document.getElementById('form-two');

        formOne?.toggleAttribute('hidden');
        formTwo?.toggleAttribute('hidden');
    }

    validateFirstForm() {
        const ageInput = document.getElementById('age');
        const age = parseInt(ageInput.value);

        if (isNaN(age) || age < 18 || age > 90) {
            alert('Invalid age. Please enter a number between 18 and 90.');
            return false;
        }

        const gender = document.getElementById('gender').value;
        if (!gender) {
            alert('Please select your gender.');
            return false;
        }

        return true;
    }

    showSecondForm() {
        const isFirstFormValid = this.validateFirstForm();

        if (isFirstFormValid) {
            this.toggleForm();
        }
    }
}

new WorkoutForm();
