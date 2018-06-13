$(function(){
	var defaultOption = '<option value=""> ------- ไม่ระบุ ------ </option>';
	var loadingImage  = '<img src="outsource/images/loading4.gif" alt="loading" />';
	// Bind an event handler to the "change" JavaScript event, or trigger that event on an element.
	$('#selzoo').change(function() {
		$("#selSubzoo").html(defaultOption);
		// Perform an asynchronous HTTP (Ajax) request.
		$.ajax({
			url: "outsource/jsonAction.php",
			data: ({ nextList : 'subzoo', zoo_id: $('#selzoo').val() }),
			dataType: "json",
			beforeSend: function() {
				$("#waitsubzoo").html(loadingImage);
			},
			// success is called if the request succeeds.
			success: function(json){
				$("#waitsubzoo").html("");
				// Iterate over a jQuery object, executing a function for each matched element.
				$.each(json, function(index, value) {
					// Insert content, specified by the parameter, to the end of each element
					// in the set of matched elements.
					 $("#selSubzoo").append('<option value="' + value.subzoo_id + 
											'">' + value.subzoo_name + '</option>');
				});
			}
		});
	});
});

$(function(){
	var defaultOption = '<option value=""> ------- ไม่ระบุ ------ </option>';
	var loadingImage  = '<img src="outsource/images/loading4.gif" alt="loading" />';
	// Bind an event handler to the "change" JavaScript event, or trigger that event on an element.
	$('#seltypetools').change(function() {
		$("#selSubtypetools").html(defaultOption);
		// Perform an asynchronous HTTP (Ajax) request.
		$.ajax({
			url: "outsource/jsonAction.php",
			data: ({ nextList : 'subtypetools', typetools_id: $('#seltypetools').val() }),
			dataType: "json",
			beforeSend: function() {
				$("#waittypetools").html(loadingImage);
			},
			// success is called if the request succeeds.
			success: function(json){
				$("#waittypetools").html("");
				// Iterate over a jQuery object, executing a function for each matched element.
				$.each(json, function(index, value) {
					// Insert content, specified by the parameter, to the end of each element
					// in the set of matched elements.
					 $("#selSubtypetools").append('<option value="' + value.subtypetools_id + 
											'">' + value.subtypetools_name + '</option>');
				});
			}
		});
	});
});