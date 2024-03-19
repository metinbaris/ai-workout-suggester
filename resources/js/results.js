class Results {
    constructor() {
        this.startNewBtn = document.getElementById('start-new-form-btn')
        this.refreshBtn = document.getElementById('refresh-suggestion-btn')
        this.refreshForm = document.getElementById('refresh-suggestion-form')
        this.addEventListeners()
    }

    addEventListeners() {
        this.startNewBtn.addEventListener('click', () => this.startAgain())
        this.refreshBtn.addEventListener('click', () => this.refreshSuggestion())
    }

    startAgain() {
        window.location.href = '/'
    }

    refreshSuggestion() {
        this.refreshBtn.disabled = true
        this.refreshBtn.innerHTML = '<ion-spinner name="dots"></ion-spinner>'
        this.refreshForm.submit()
    }
}

new Results()