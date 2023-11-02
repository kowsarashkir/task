	$('#btnRun2').click(function() {

		$.ajax({
			url: "libs/php/Timezones.php",
			type: 'POST',
			dataType: 'json',
			data: {
				latitude: $('#lati2').val(),
				longitude: $('#longi2').val()
			},
			success: function(result) {

				console.log(JSON.stringify(result));

				if (result.status.name == "ok") {

				
                   console.log(result.data);
					//$('#divResult2').html(result.data);
					let myDiv=document.getElementById('divResult2');
					myDiv.innerHTML=result.data.geonames.timezoneId;

				}
			
			},
			error: function(jqXHR, textStatus, errorThrown) {
				// your error code
			}
		}); 
	
	});