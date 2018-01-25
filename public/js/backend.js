$(document).ready(function()
{
    $("#avatarmenu").msDropDown();

    $("#avatarmenu").on('change' , function () {
        console.log($(this).val());
    });

    console.log('backend_ver3');
});