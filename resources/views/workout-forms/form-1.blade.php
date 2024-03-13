<ion-form id="form-one" class="workout-form">
    <!-- Age Input -->
    <ion-item>
        <ion-label position="floating">Age*</ion-label>
        <ion-input id="age" name="age" type="number" placeholder="Enter your age" required></ion-input>
    </ion-item>

    <!-- Gender Input -->
    <ion-item>
        <ion-label>Gender*</ion-label>
        <ion-select id="gender" name="gender" interface="popover" placeholder="Select One" required>
            <ion-select-option value="female">Female</ion-select-option>
            <ion-select-option value="male">Male</ion-select-option>
            <ion-select-option value="non-binary">Non-Binary</ion-select-option>
        </ion-select>
    </ion-item>

    <ion-list>
        <ion-radio-group>
            <ion-list-header>
                <ion-label>Fitness goal?</ion-label>
            </ion-list-header>

            <ion-item>
                <ion-label>General fitness</ion-label>
                <ion-radio id="workout-goal-0" name="goal" slot="start" value="General fitness improvement"></ion-radio>
            </ion-item>

            <ion-item>
                <ion-label>Weight Loss</ion-label>
                <ion-radio id="workout-goal-1" name="goal" slot="start" value="Weight loss"></ion-radio>
            </ion-item>

            <ion-item>
                <ion-label>Muscle Gain</ion-label>
                <ion-radio id="workout-goal-2" name="goal" slot="start" value="Muscle gain"></ion-radio>
            </ion-item>

            <ion-item>
                <ion-label>Endurance Improvement</ion-label>
                <ion-radio id="workout-goal-3" name="goal" slot="start" value="Endurance improvement"></ion-radio>
            </ion-item>

        </ion-radio-group>
    </ion-list>

    <ion-button id="form-one-btn" type="button" expand="full">Next</ion-button>
</ion-form>