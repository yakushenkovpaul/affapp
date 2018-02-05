$(document).ready(function()
{
    $("#avatarmenu").msDropDown();

    $("#avatarmenu").on('change' , function () {
        console.log($(this).val());
    });


    $(document).ready(function() {

        $(document).on('click', '.graph_submit', function (e) {

            var id = $(this).attr('id');

            $.ajax({
                type: 'post',
                url: location.origin + "/user/dashboardGraph",
                dataType: 'json',
                data: { "period": $(this).attr('id'), "_token": $('meta[name="csrf_token"]').attr('content') },
                beforeSend: function() {
                    $('.page-loader').show();
                },
                complete: function() {
                    $('.page-loader').hide();
                },
            }).done(function (data) {
                $(".dynamic_graph").html(data.html);
                $(".graph_submit").removeClass('active');
                $("#" + id).addClass('active');
            }).fail(function () {
                console.log('Graph could not be loaded.');
            });

        });

        //аякс листинг заказов в дашборде пользователя
        $(document).on('click', '#page_user_dashboard .pagination a', function (e) {
            if ($(this).attr('href').indexOf("?page_user_order=") >= 0)
            {
                var element = $('.dynamic_orders_user');
            }

            if ($(this).attr('href').indexOf("?page=") >= 0)
            {
                var element = $('.dynamic_orders_all');
            }

            $.ajax({
                type: 'post',
                url: $(this).attr('href'),
                dataType: 'json',
                data: { "_token": $('meta[name="csrf_token"]').attr('content') },
                beforeSend: function() {
                    $('.page-loader').show();
                },
                complete: function() {
                    $('.page-loader').hide();
                },
            }).done(function (data) {
                element.html(data.html);
            }).fail(function () {
                console.log('List could not be loaded.');
            });
            return false;
        });
    });

    console.log('backend_ver8');
});