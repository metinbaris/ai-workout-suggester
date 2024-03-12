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

    <ion-button id="form-one-btn" type="button" expand="full">Next</ion-button>
</ion-form>