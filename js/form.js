$(document).ready(function() {
	// start validation
	$('#register-form').validate({
		// check if all inputs are in order
        rules: {
            firstname: {
                minlength: 2,
                maxlength: 15,
                lettersonly: true,
                required: true
            },
            lastname: {
                minlength: 2,
                maxlength: 15,
                lettersonly: true,
                required: true
            },
            email: {
            	email: true,
            	required: true
            },
            email2: {
            	email: true,
            	required: true,
            	equalTo: '#email'
            }
        },
        messages: {
        	email2: 'Email doesn\'t match.'
        },
        highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'span',
        errorClass: 'help-block',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length)
                error.insertAfter(element.parent());
            else
                error.insertAfter(element);
        }
    });

	/*// increase progress bar completion percentage
	var progress = $('#progress-bar')[0].style.width;
	progress = parseInt(progress.replace('%', ''), 10);
	$('#progress-bar').css('width', (progress += 20) + '%');*/
});