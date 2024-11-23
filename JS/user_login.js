
$(document).ready(function() {
    $('.submit').click(function(event) {
        event.preventDefault();

        const usernameValue = $('.username').val();
        const passwordValue = $('.password').val();

        $.ajax({
            url: './php/user_login.php', // URL of the server-side script
            type: 'POST', // HTTP method
            data: {
                username: usernameValue,
                password: passwordValue
            }, // Data to be sent to the server
            dataType: 'json', // Expected data type of the response
            success: function(data) {
                // Handle the response data here
                console.log(data.status);
                alert(data.message);
                if(data.status === "success"){
                    window.location.href = "../rhythmix_master/levels.php"

                }            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Handle any errors here
                console.error('Error:', textStatus, errorThrown);
                console.error('Response:', jqXHR.responseText);
                alert('Error: ' + textStatus + '\n' + jqXHR.responseText);
            }
        });
    });
});
