function login() {
    debugger;
    var username = document.getElementById('login-username').value;
    var password = document.getElementById('login-password').value;
    if (username !== '' || password !== '' ) {
        $.ajax({
            url: "/golgonphp/user/login",
            data: {
                "login-username": username,
                "login-password": password,
                "login": "login",
            },
            dataType: "json",
            type: "post",
            success: function(result) {
                if(result === 'success') {
                    $("#login").hide();
                    alert("Login successfully!");
                    $("#login-false").hide();
                    $("#login-true").show();
                }
                else if (result === 'error'){
                    alert("Wrong username or password!");
                    window.location.href="/golgonphp/user/loginerror";
                }
            }
        });
    } else {
        alert("Please input username and password!");
    }
}
function logout() {
    $.ajax({
        url: "/golgonphp/user/logout",
        type: "post",
        success: function() {
            alert("Logout successfully!");
            $("#login-false").show();
            $("#login-true").hide();
        }
    });
}