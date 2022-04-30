$(document).ready(function () {

    $('#login').on('hover', function () {
        // $('.login-drop-down').html('<input type="text" class="email" placeholder="Email"><input type="text" class="password" placeholder="Password"><button class="login-button">Log in</button>')
        $('.login-drop-down').addClass("login-drop-down-down").removeClass("login-drop-down-up")

        $('.login-button').on('click', function () {
            $.post("XHR/login.php", { user: $('.email').val(), pass: $('.password').val() }, function (response) {
                if (response.status) {
                    console.log(response.msg)
                    window.location.href = "home.php";
                } else {
                    console.log(response.msg)
                }
            });
        });
    });


}); // end document ready
