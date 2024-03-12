<ion-content>
    <ion-grid>
        <ion-row>
            <ion-col size-md="6" offset-md="3">
                <ion-form>
                    <ion-item>
                        <ion-label position="floating" required>Age</ion-label>
                        <ion-input type="number" placeholder="Enter your age"></ion-input>
                    </ion-item>

                    <ion-item>
                        <ion-label>Gender</ion-label>
                        <ion-select interface="popover" placeholder="Select One" required>
                            <ion-select-option value="female">Female</ion-select-option>
                            <ion-select-option value="male">Male</ion-select-option>
                            <ion-select-option value="non-binary">Non-Binary</ion-select-option>
                        </ion-select>
                    </ion-item>

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

                    <ion-button type="submit" expand="full">Submit</ion-button>
                </ion-form>
            </ion-col>
        </ion-row>
    </ion-grid>
</ion-content>