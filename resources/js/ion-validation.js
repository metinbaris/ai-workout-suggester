export default class IonValidation {
    async alert(msg) {
        const alert = document.createElement('ion-alert')
        alert.header = 'Oops!'
        //alert.subHeader = 'A Sub Header Is Optional';
        alert.message = msg
        alert.buttons = ['Ok']

        document.body.appendChild(alert);
        await alert.present();
    }
}