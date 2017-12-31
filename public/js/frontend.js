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


    var searchForm = $("#searchForm");

    searchForm.submit(function(e){
        e.preventDefault();

        var formData = searchForm.serialize();

        $.ajax({
            url: searchForm.attr('action'),
            type:'POST',
            data:formData,
            beforeSend: function() {
                $('.page-loader').show();
            },
            complete: function() {
                $('.page-loader').hide();
            },
            success:function(data){
                console.log(data);
                $('.dymanic').html(data.html);

                if(data.next_page_url == null)
                {
                    $("#paginate").hide();
                    $(".upPaginate").hide();
                }
                else
                {
                    $("#paginate").show();
                    $(".upPaginate").show();
                }
            },
            error: function (data) {
                showErrors(data, 'bottom center');
            }
        });
    });


    var contactForm = $("#contactForm");

    contactForm.submit(function(e){
        e.preventDefault();

        var formData = contactForm.serialize();

        $.ajax({
            url: "contact",
            type:'POST',
            data:formData,
            beforeSend: function() {
                $('.page-loader').show();
            },
            success:function(data){
                $.notify("Thank you. Your message was sent", "info");
                $('.page-loader').hide();
                contactForm.trigger('reset');
            },
            error: function (data) {
                $('.page-loader').hide();
                showErrors(data, 'top middle');
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

    $(function()
    {
        $( "#category" ).autocomplete({
            source: "merchants/autocompleteCategories",
            minLength: 1,
            select: function(event, ui) {
                $('#category').val(ui.item.value);
                $('#category_id').val(ui.item.id);
            }
        }).autocomplete( "widget" ).addClass( "z-index-600" );
    });

    $("#category").keyup(function() {

        if (!$(this).val()) {
            $('#category_id').val(0);
        }

    });


    $(document).ready(function() {
        var _page = 1;
        $(document).on('click', '#paginate', function (e) {
            _page++;
            getListing(_page);
            e.preventDefault();
        });
    });

    $(".show-more").on('click' , function () {
        $(this).prev().toggleClass( 'promo-text', '' );
        return false;
    });

});


function fav(id, url) {

    $.ajax({
        url: 'actions/' + url,
        type:'POST',
        data: { id : id, "_token": $('meta[name="csrf_token"]').attr('content') },
        success:function(data){
            if(data['result'] == true)
            {
                $('#' + url + '-' + id).removeClass('fa-heart-o');
                $('#' + url + '-' + id).addClass('fa-heart');
                $.notify("Thank you. " + data['name'] + " was added to favorites", "info");
            }
            else
            {
                $('#' + url + '-' + id).removeClass('fa-heart');
                $('#' + url + '-' + id).addClass('fa-heart-o');
                $.notify(data['name'] + " was removed from favorites", "info");
            }
        }
    });
}



function getListing(page) {
    $.ajax({
        url: '?page=' + page,
        dataType: 'json',
        beforeSend: function() {
            $('.page-loader').show();
        },
        complete: function() {
            $('.page-loader').hide();
        },
    }).done(function (data) {

        $('.dymanic').append(data.html);

        if(data.next_page_url == null)
        {
            $("#paginate").hide();
            $(".upPaginate").hide();
        }
        else
        {
            $("#paginate").show();
            $(".upPaginate").show();
        }

    }).fail(function () {
        console.log('List could not be loaded.');
    });
}


function showErrors(response, target)
{
    var gotErrors = false;

    if(target)
    {
        var errorPostion = target;
    }
    else
    {
        var errorPostion = "right middle";
    }

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



console.log('frontend.js_ver72');