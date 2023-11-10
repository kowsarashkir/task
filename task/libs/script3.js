$('#btnRun1').click(function() {

    $.ajax({
        url: "libs/php/weather.php",
        type: 'POST',
        dataType: 'json',
        data: {
            country: $('#selCountry1').val(),
            lang: $('#selLanguage1').val()
        },
        success: function(result) {

            console.log(JSON.stringify(result));

            if (result.status.name == "ok") {

                $('#txtdate').html(result['data'][0]['date']);
                $('#txtweather').html(result['data'][0]['weather']);
            }
            
        
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(errorThrown);

        }
        
    }); 

});