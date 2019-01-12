$(function (){
	$('.select-show-search').select2({
		minimumResultsForSearch: ''
    });
    $('.select-show-search2').select2({
		minimumResultsForSearch: ''
    });
    $('.select-show-search3').select2({
		minimumResultsForSearch: ''
    });

    $('#dob').daterangepicker();
});

function selectState(val)
{
	if(val != '')
	{
		$.ajax({
			url     : base_url+'getStates.php',
            method  : 'POST',
            data    : {country:val},
            success: function(response)
            {
            	var result 	= response.startsWith('ERROR');
            	var etype  	= response.split("@#")[0];
            	var msg    	= response.split("@#")[1];

            	if(result != true)
            	{
            		var arr = $.parseJSON(response);

            		$.each( arr, function( i, val )
		        	{
		        		var id = i+1+'statename';
	        			$('#state').append('<option id="'+id+'" name="'+id+'" value="'+val+'">'+val+'</option>');
		        	});
            	}
            	else
            	{
            		$.alert({
                        title: response.split("@#")[0]+'!',
                        content: response.split("@#")[1],
                        type: 'red',
                        animation: 'scale',
                        draggable: true,
                    });
            	}
            }
		});
	}
	else
	{
		$.alert({
            title: 'ERROR!',
            content: 'Country field can not be empty',
            type: 'red',
            animation: 'scale',
            draggable: true,
        });
	}
}

function selectCity(val)
{
	if(val != '')
	{
		var country = $('#country').val();
		$.ajax({
			url     : base_url+'getCities.php',
            method  : 'POST',
            data    : {country:country,state:val},
            success: function(response)
            {
            	var result 	= response.startsWith('ERROR');
            	var etype  	= response.split("@#")[0];
            	var msg    	= response.split("@#")[1];

            	if(result != true)
            	{
            		var arr = $.parseJSON(response);

            		$.each( arr, function( i, val )
		        	{
		        		var id = i+1+'cityname';
	        			$('#city').append('<option id="'+id+'" name="'+id+'" value="'+val+'">'+val+'</option>');
		        	});
            	}
            	else
            	{
            		$.alert({
                        title: response.split("@#")[0]+'!',
                        content: response.split("@#")[1],
                        type: 'red',
                        animation: 'scale',
                        draggable: true,
                    });
            	}
            }
		});
	}
	else
	{
		$.alert({
            title: 'ERROR!',
            content: 'State field can not be empty',
            type: 'red',
            animation: 'scale',
            draggable: true,
        });
	}
}

/*function phNoValidation(inputtxt)
{
	var phoneno = /^\d{10}$/;
	if((inputtxt.value.match(phoneno))
	{
		return true;
	}
	else
	{
		alert("Not a valid Phone Number");
		return false;
	}
}*/

function validateMe()
{

}