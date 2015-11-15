$(document).ready(function(){
$(function() {

  // Get the form.
  var form = $('#ajax-contact');

  // Get the messages div.
  var formMessages = $('#form-messages');

  // Set up an event listener for the contact form.
  $(form).submit(function(e) {
    // Stop the browser from submitting the form.
    e.preventDefault();

    // Serialize the form data.
    var formData = $(form).serialize();

    // Submit the form using AJAX.
    $.ajax({
      type: $(form).attr('method'),
      url: $(form).attr('action'),
      data: formData
    })
    .done(function(response) {
      // Make sure that the formMessages div has the 'success' class.
      $(formMessages).removeClass('error');
      $(formMessages).addClass('success');
      $('.contact-cont').fadeOut();
      $('.conf-cont').delay(500).fadeIn();

      // Set the message text.
      $(formMessages).text(response);

      // Clear the form.
      $('#nom').val('');
      $('#poblacio').val('');
      $('#email').val('');
      $('#tel').val('');
      $('#comentari').val('');
      $('#czech').val('');
    })
    .fail(function(data) {
      // Make sure that the formMessages div has the 'error' class.
      $(formMessages).removeClass('success');
      $(formMessages).addClass('error');

      // Set the message text.
      if (data.responseText !== '') {
        $(formMessages).text(data.responseText);
      } else {
        $(formMessages).text('Oops! An error occured and your message could not be sent.');
      }
    });

  });

});


/*$('#email-form').on('submit', function(event){
	event.preventDefault();
	var form = $(this);
  $.ajax($('form').attr('action'),{
    type: $('form').attr('method'),
    data: form.serialize()
  })
  .done(function(response) {
    $('.news-cont').fadeOut();
    $('.conf-news').delay(500).fadeIn();

    //Clear form
    $('#email').val('');
  });

});
*/
$(function() {

  // Get the form.
  var form = $('#email-form');

  // Get the messages div.
  var formMessages = $('#form-messages');

  // Set up an event listener for the contact form.
  $(form).submit(function(e) {
    // Stop the browser from submitting the form.
    e.preventDefault();

    // Serialize the form data.
    var formData = $(form).serialize();

    // Submit the form using AJAX.
    $.ajax({
      type: $(form).attr('method'),
      url: $(form).attr('action'),
      data: formData
    })
    .done(function(response) {
      // Make sure that the formMessages div has the 'success' class.
      $(formMessages).removeClass('error');
      $(formMessages).addClass('success');
    $('.news-cont').fadeOut();
    $('.conf-news').delay(500).fadeIn();

      // Set the message text.
      $(formMessages).text(response);

      // Clear the form.

      $('#email').val('');

    })
    .fail(function(data) {
      // Make sure that the formMessages div has the 'error' class.
      $(formMessages).removeClass('success');
      $(formMessages).addClass('error');

      // Set the message text.
      if (data.responseText !== '') {
        $(formMessages).text(data.responseText);
      } else {
        $(formMessages).text('Oops! An error occured and your message could not be sent.');
      }
    });

  });

});


});