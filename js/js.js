
$().ready(function() {
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

$().ready(function() {
	// validate signup form on keyup and submit
	$("#add_details").validate({
		rules: {
			number: {
				required: true,
				rangelength: [10, 10],
				digits: true
			},
			cc: {
				required: true,
				creditcard: true
			},
			address: "required",
			postal_code: {
				required: true,
				rangelength: [4, 4],
				digits:true
			},
			city: "required"
		},
		messages: {
			number: {
				required: "Please fill a phone number",
				rangelength: "Please fill a phone number with a good format: 10 digits",
				digits: "A phone number can only contains digits"
			},
			cc: {
				required: "Please fill Credit Card Information",
				creditcard: "Please fill in a credit card number"
			},
			address: "Please give an address",
			postal_code: {
				required: "Please fill a postal code",
				rangelength: "Please fill a postal code with a good format: 4 digits",
				digits: "A postal code can only contains digits"
			},
			city: "Please give a city"
		}
	});
});

$().ready(function() {
	// validate signup form on keyup and submit
	$("#phone_number").validate({
		rules: {
			number: {
				required: true,
				rangelength: [10, 10],
				digits: true
			}
		},
		messages: {
			number: {
				required: "Please fill a phone number",
				rangelength: "Please fill a phone number with a good format: 10 digits",
				digits: "A phone number can only contains digits"
			}
		}
	});
});