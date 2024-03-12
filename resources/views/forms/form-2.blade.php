<ion-form id="form-two" hidden>
    <!-- Height Input -->
    <ion-item>
        <ion-label position="floating" required>Height (cm)</ion-label>
        <ion-input type="number" placeholder="Enter your height"></ion-input>
    </ion-item>

    <!-- Weight Input -->
    <ion-item>
        <ion-label position="floating" required>Weight (kg)</ion-label>
        <ion-input type="number" placeholder="Enter your weight"></ion-input>
    </ion-item>

    <!-- Weekly Exercise Amount -->
    <ion-list>
        <ion-radio-group>
            <ion-list-header>
                <ion-label>Weekly Exercise Amount</ion-label>
            </ion-list-header>

            <ion-item>
                <ion-label>None</ion-label>
                <ion-radio slot="start" value="none"></ion-radio>
            </ion-item>

            <ion-item>
                <ion-label>1-2 days</ion-label>
                <ion-radio slot="start" value="1-2"></ion-radio>
            </ion-item>

            <ion-item>
                <ion-label>3-4 days</ion-label>
                <ion-radio slot="start" value="3-4"></ion-radio>
            </ion-item>

            <ion-item>
                <ion-label>5+ days</ion-label>
                <ion-radio slot="start" value="5+"></ion-radio>
            </ion-item>
        </ion-radio-group>
    </ion-list>

    <ion-button id="form-two-btn" type="button" expand="full">Submit</ion-button>
</ion-form>