var btnLogin = document.getElementById('btnLogin');
var inputEmail = document.getElementById('inputEmail');
var inputPassword = document.getElementById('inputPassword');


btnLogin.addEventListener('click', function () {

    firebase.auth().signInWithEmailAndPassword(inputEmail.value, inputPassword.value).then(function (result) {
        alert("Pengguna ditemukan!");
        // console.log("Success!");
        window.location.replace('home-page.php');

    }).catch(function (error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        // ...

        alert(errorMessage);
        // console.log("Failure!")
    });

});