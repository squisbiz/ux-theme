$(document).ready(function(){

    $('.toggle').on('click', function(e) {
      $('body').toggleClass("mobile");
      e.preventDefault();
    });
    
    $('.close-webinar').on('click', function(e) {
      $('body').toggleClass("hide-webinar");
      e.preventDefault();
    });

    function evaluate(){
    var item = $(this);
    var relatedItem = $("#" + item.attr("data-related-item")).parent();

    if(item.is(":checked")){
        relatedItem.fadeIn();
    }else{
        relatedItem.fadeOut();
    }
}

$('input[type="checkbox"]').click(evaluate).each(evaluate);

// $('.previouspost a , .nexpost a').html(function (i, html) {
//     return html.replace(/(\w+\s\w+)/, '<span>$1</span><br/>')
// });

})

$('#contactrequest input').on('focus', function(){
    $(this).removeClass('field-error');
});

function validateEmail(addr) {
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if( !emailReg.test( addr ) ) {
        return false;
    } else {
        return true;
    }
}

/*
function validatePhone(inputphone)  {
    var phoneno = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
    if(phoneno.test(inputphone)) {
        return true;
    } else {
        return false;
    }
}
*/

function requestSubmit(){
    var error = "Please enter the required fields:<br>",
        send = true;

    
    if ( $('#email').val() == '' || !validateEmail($('#email').val()) ){
				error += '<div class="error-tags">Valid Email Address</div>';
				$('#email').addClass("field-error").val('');;
				send = false;
		}
    if ( $('#company').val() == '' ){
        error += '<div class="error-tags">Company Name</div>';
        $('#company').addClass("field-error");
        send = false;
    }
    if ( $('#jobtitle').val() == '' ){
        error += '<div class="error-tags">Job Title</div>';
        $('#jobtitle').addClass("field-error");
        send = false;
    }
    if(send){
        $('#contactrequest').submit();
    }
    else{
        $('p.error').html(error);
        return false;
    }
}

$(".send-button").after("add your smiley here");
