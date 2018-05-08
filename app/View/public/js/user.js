$(".user-login").bind("click", function() {
    $.ajax({ 
        type: 'POST',
        url: '/userlogin', 
        data: {
            "name" : $(".login-name").val(),
            "password" : $(".login-password").val()
        },
        success:function(data) {
            alert(data.msg);
            if(data.status == 10) {
                window.location.href = '/';
            } else {
                location.reload() 
            }
        }
    });
});