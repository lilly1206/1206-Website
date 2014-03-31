function showThanks()  {
  $('.fullwidth.green .contact #message').fadeIn();
}


$(document).ready(function() {
    $('#contactForm').on('submit', function(e) {
        e.preventDefault(); // <-- important
        $(this).ajaxSubmit({
            target: '#output',
            success: showThanks
        });
    });
});
