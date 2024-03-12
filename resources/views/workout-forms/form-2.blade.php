<ion-form id="form-two" class="workout-form" hidden>
    <!-- Height Input -->
    <ion-item>
        <ion-label position="floating" required>Height (cm)*</ion-label>
        <ion-input id="height" name="height" type="number" placeholder="Enter your height"></ion-input>
    </ion-item>

    <!-- Weight Input -->
    <ion-item>
        <ion-label position="floating" required>Weight (kg)*</ion-label>
        <ion-input id="weight" name="weight" type="number" placeholder="Enter your weight"></ion-input>
    </ion-item>

    <!-- Current Weekly Exercise Frequency -->
    <ion-list>
        <ion-radio-group>
            <ion-list-header>
                <ion-label>Current Weekly Exercise Frequency*</ion-label>
            </ion-list-header>

            <ion-item>
                <ion-label>None</ion-label>
                <ion-radio id="workout-amount-0" name="workout-amount" slot="start" value="none"></ion-radio>
            </ion-item>

            <ion-item>
                <ion-label>1-2 days</ion-label>
                <ion-radio id="workout-amount-1" name="workout-amount" slot="start" value="1-2"></ion-radio>
            </ion-item>

            <ion-item>
                <ion-label>3-4 days</ion-label>
                <ion-radio id="workout-amount-2" name="workout-amount" slot="start" value="3-4"></ion-radio>
            </ion-item>

            <ion-item>
                <ion-label>5+ days</ion-label>
                <ion-radio id="workout-amount-3" name="workout-amount" slot="start" value="5+"></ion-radio>
            </ion-item>
        </ion-radio-group>
    </ion-list>
    
    <ion-row>
        <ion-col size="6">
            <ion-button id="form-back-btn" type="button" expand="full" color="light">Back</ion-button>
        </ion-col>
        <ion-col size="6">
            <ion-button id="submit-btn" type="button" expand="full">Submit</ion-button>
        </ion-col>
    </ion-row>
</ion-form>