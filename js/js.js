	$.validator.setDefaults({
		submitHandler: function() {
			alert("submitted!");
		}
	});

	$().ready(function() {
		console.log("hello");
		// validate signup form on keyup and submit
		$("#edit_menu").validate({
			rules: {
				name: "required",
				price: {
					required : true,
					digits : true
				},
				details: "required"
			},
			messages: {
				name: "Please enter a name",
				price: { required : "Please enter a price",
				digits : "The price have to be a number"
				},
				details: "Please enter a username"
			}
		});
	});