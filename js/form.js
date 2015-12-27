$(document).ready(function() {
	// load next part of the form
    $('.next').click(function() {
    	// validate the form
    	var form = $('#register-form');
    	form.validate( {
	        rules: {
	            firstname: {
	            	required: true,
	                lettersonly: true
	            },
	            lastname: {
	            	required: true,
	                lettersonly: true
	            },
	            email: {
	            	email: true,
	            	required: true
	            },
	            password: {
	            	required: true
	            },
	            password2: {
	            	required: true,
	            	equalTo: '#password'
	            },
	            address: {
	            	required: true
	            },
	            city: {
	            	required: true,
	            	lettersonly: true
	            },
	            province: {
	            	required: true,
	            	lettersonly: true
	            },
	            postal_code: {
	            	required: true,
	            },
	            e_firstname: {
	            	required: true,
	                lettersonly: true
	            },
	            e_lastname: {
	            	required: true,
	                lettersonly: true
	            },
	            e_email: {
	            	email: true,
	            	required: true
	            },
	            e_phone: {
	            	required: true,
	            	phoneUS: true
	            },
	            e_relationship: {
	            	required: true,
	            	lettersonly: true
	            }
	        },
	        messages: {
	        	password2: 'Password doesn\'t match.'
	        },
	        highlight: function(element) {
	            $(element).closest('.form-group').addClass('has-error');
	 
	        },
	        unhighlight: function(element) {
	            $(element).closest('.form-group').removeClass('has-error');
	        },
	        errorElement: 'span',
	        errorClass: 'help-block',
	        submitHandler: function(form) {
	        	if(form.valid())
	        		console.log('works');
	        }
	    });

    	// if the form is validated, then proceed to the next part of the form
	    if(form.valid()) {
	    	// add a fade in animation and hide the form no longer in use
	    	$(this).closest('fieldset').next().fadeIn('slow');
	    	$(this).closest('fieldset').css({'display': 'none'});
	    	
	    	// update the progress bar
	    	if($('#progress-billing').hasClass('hidden') && $('#progress-emergency').hasClass('hidden'))
	    		$('#progress-billing').removeClass('hidden');
	    	else if(!$('#progress-billing').hasClass('hidden') && $('#progress-emergency').hasClass('hidden'))
	    		$('#progress-emergency').removeClass('hidden');
	    }
    });

    // load previous part of the form
    $('.previous').click(function() {
    	// add a fade in animation and hide the form no longer in use
    	$(this).closest('fieldset').prev().fadeIn('slow');
    	$(this).closest('fieldset').css({'display': 'none'});

    	// update the progress bar
    	if(!$('#progress-billing').hasClass('hidden') && !$('#progress-emergency').hasClass('hidden'))
    		$('#progress-emergency').addClass('hidden');
    	else if(!$('#progress-billing').hasClass('hidden') && $('#progress-emergency').hasClass('hidden'))
    		$('#progress-billing').addClass('hidden');
    });
});