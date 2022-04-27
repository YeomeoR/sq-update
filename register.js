$(document).ready(function () {

    $('#register-user-button').on('click', function (e) {
        e.preventDefault()
        var fore = $('#forename').val();
        var sur = $('#surname').val();
        var email = $('#email').val();
        var pass = $('#password').val();
        var phone = $('#phone-number').val();
        var company = $('#company').val();
        var companySect = $('#company-sector').val();
        var govtSect = $('#govt-sector').val();

        var data = {
            fore: fore,
            sur: sur,
            email: email,
            pass: pass,
            phone: phone,
            company: company,
            companySect: companySect,
            govtSect: govtSect
        };

        $.post("XHR/registerUser.php", data, function (response) {
            if (response.status) {
                console.log(response.msg)
                // window.location.href = "login.php";
            } else {
                console.log(response.msg)
            }
        });

    });

});