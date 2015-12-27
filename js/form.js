/*$(document).ready(function() {
	var c = 0;

	// start validation
	$('#register-form').validate( {
		// check if all inputs are in order
        rules: {
            firstname: {
                minlength: 1,
                maxlength: 15,
                lettersonly: true,
                required: true
            },
            lastname: {
                minlength: 1,
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
    });

    $('#firstname').change(function() {
        if($('#firstname').val() != '')
        	update_progressbar('#progress-bar', 20, 0);
        else
            update_progressbar('#progress-bar', 20, 1);
    });

    $('#lastname').change(function() {
        if($('#lastname').val() != '')
            update_progressbar('#progress-bar', 20, 0);
        else
            update_progressbar('#progress-bar', 20, 1);
    });

    $('#email').change(function() {
        if($('#email').val() != '')
            update_progressbar('#progress-bar', 20, 0);
        else
            update_progressbar('#progress-bar', 20, 1);
    });

    $('#email2').change(function() {
        if($('#email2').val() != '')
            update_progressbar('#progress-bar', 20, 0);
        else
            update_progressbar('#progress-bar', 20, 1);
    });
});

// if choice == 0; increase progress bar
// if choice == 1; decrease progress bar
function update_progressbar(id, num, choice)
{
    var progress = $(id)[0].style.width;
    progress = parseInt(progress.replace('%', ''), 10);

    if(choice == 0)
        $(id).css('width', (progress += num) + '%');
    else if(choice == 1)
        $(id).css('width', (progress -= num) + '%');
}*/

$(document).ready(function() {
	// load next part of the form
    $('.next').click(function() {
    	// add a fade in animation and hide the form no longer in use
    	$(this).closest('fieldset').next().fadeIn('slow');
    	$(this).closest('fieldset').css({'display': 'none'});
    	
    	// update the progress bar
    	if($('#progress-billing').hasClass('hidden') && $('#progress-emergency').hasClass('hidden'))
    		$('#progress-billing').removeClass('hidden');
    	else if(!$('#progress-billing').hasClass('hidden') && $('#progress-emergency').hasClass('hidden'))
    		$('#progress-emergency').removeClass('hidden');
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