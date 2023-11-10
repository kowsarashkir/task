	$('#btnRun1').click(function() {

		$.ajax({
			url: "libs/php/latitudelongitude.php",
			type: 'POST',
			dataType: 'json',
			data: {
				country: $('#selCountry1').val(),
				lang: $('#selLanguage1').val()
			},
			success: function(result) {

				console.log(JSON.stringify(result));

				if (result.status.name == "ok") {

					$('#txtLat').html(result['data'][0]['lat']);
                    $('#txtLong').html(result['data'][0]['lng']);
				}
				
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
				console.log(errorThrown);

			}
			
		}); 
	
	});