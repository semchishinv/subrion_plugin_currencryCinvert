$(function(){
    var first_currency = $('#first_currency option:selected').val();
    var second_currency = $('#second_currency option:selected').val();

    intelli.post(intelli.config.url+'/currency/conversion.json', {first: first_currency, second: second_currency}, function (response) {
        var array = $.map(response.result, function(value, index) {
            return  '<br/>'+index +' '+ value;
        });
        $(".currency_result").html(array);
    });

    $('.currency_list').on('change', function() {
        var first_currency = $('#first_currency option:selected').val();
        var second_currency = $('#second_currency option:selected').val();

        intelli.post(intelli.config.url+'/currency/conversion.json', {first: first_currency, second: second_currency}, function (response) {
            var array = $.map(response.result, function(value, index) {
                return  '<br/>'+index +' '+ value;
            });
            $(".currency_result").html(array);
        });
    })
});