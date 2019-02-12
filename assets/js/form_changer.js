$(document).ready(function () {
    $("#attend").click(function () {
        if ($(this).is(':checked')) {
            $('#section1').css('display', 'block');
            if ($('#car').is(':checked')) {
                $('#brand_car').attr('required', 'required');
                $('#model_car').attr('required', 'required');
            } else {
                $('#brand_car').removeAttr('required');
                $('#model_car').removeAttr('required');
            }
        }
    });
    $("#notattend").click(function () {
        if ($(this).is(':checked')) {
            $('#section1').css('display', 'none');
            $('#brand_car').removeAttr('required');
            $('#model_car').removeAttr('required');
        }
    });
    $("#car").click(function () {
        if ($(this).is(':checked')) {
            $('#section3').css('display', 'none');
            $('#section2').css('display', 'block');
            $('#brand_car').attr('required', 'required');
            $('#model_car').attr('required', 'required');
        }
    });
    $("#photographer").click(function () {
        if ($(this).is(':checked')) {
            $('#section2').css('display', 'none');
            $('#section3').css('display', 'block');
            $('#brand_car').removeAttr('required');
            $('#model_car').removeAttr('required');
        }
    });
    $("#visit").click(function () {
        if ($(this).is(':checked')) {
            $('#section2').css('display', 'none');
            $('#section3').css('display', 'none');
            $('#brand_car').removeAttr('required');
            $('#model_car').removeAttr('required');
        }
    });
});
