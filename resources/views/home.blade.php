<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Workout Suggester</title>
    <link href="https://cdn.jsdelivr.net/npm/@ionic/core@latest/css/ionic.bundle.css" rel="stylesheet">
</head>
<body>

    <ion-app>
        <ion-content>
            <!-- Input for Age -->
            <ion-item>
                <ion-label position="floating">Age</ion-label>
                <ion-input type="number" placeholder="Enter your age"></ion-input>
            </ion-item>

            <!-- Select for Gender -->
            <ion-item>
                <ion-label>Gender</ion-label>
                <ion-select placeholder="Select One">
                    <ion-select-option value="female">Female</ion-select-option>
                    <ion-select-option value="male">Male</ion-select-option>
                    <ion-select-option value="non-binary">Non-Binary</ion-select-option>
                    <ion-select-option value="prefer-not-to-say">Prefer not to say</ion-select-option>
                </ion-select>
            </ion-item>

            <!-- Radio Buttons for Weekly Exercise Amount -->
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
        </ion-content>
    </ion-app>

    <script src="https://cdn.jsdelivr.net/npm/@ionic/core@latest/dist/ionic/ionic.js"></script>
</body>
</html>
