$(document).ready(function()
{
    var loginForm = $("#loginForm");

    loginForm.submit(function(e){
        e.preventDefault();

        var formData = loginForm.serialize();

        $.ajax({
            url: "login",
            type:'POST',
            data:formData,
            beforeSend: function() {
                $('.page-loader').show();
            },
            success:function(data){
                window.location.href = data.path;
            },
            error: function (data) {
                $('.page-loader').hide();
                showErrors(data);
            }
        });
    });


    var registerForm = $("#signupForm");

    registerForm.submit(function(e){
        e.preventDefault();

        var formData = registerForm.serialize();

        $.ajax({
            url: "register",
            type:'POST',
            data:formData,
            beforeSend: function() {
                $('.page-loader').show();
            },
            success:function(data){
                window.location.href = data.path;
            },
            error: function (data) {
                $('.page-loader').hide();
                showErrors(data);
             }
        });
    });

    $(function()
    {
        $( "#club" ).autocomplete({
            source: "register/autocompleteClubs",
            minLength: 3,
            select: function(event, ui) {
                $('#club').val(ui.item.value);
                $('#club_id').val(ui.item.id);
            }
        });
    });


});


function showErrors(response)
{
    var gotErrors = false;
    var errorPostion = "right middle";

    if(response.responseJSON.errors)
    {
        $.each(response.responseJSON.errors, function (key, item) {
            $gotErrors = true;
            $("#" + key).notify(item, {position: errorPostion});
        });
    }

    return gotErrors;
}

function showError(key, value) {
    var errorPostion = "top center";
    $("#" + key).notify(value, {position: errorPostion});
    console.log(value);
}

console.log('frontend.js_ver26');