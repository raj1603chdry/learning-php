var pollServer = function() {
  $.get('../c23/chat.php', function(result) {
    if(!result.sucess) {
      console.log("Error pooling server for new messages!");
      return;
    }

    $.each(result.messages, function(idx) {
      var chatBubble;

      if(this.sent_by == 'self') {
        chatBubble = $('<div class="row bubble-sent pull-right">' + this.message + '</div><div class="clearfix"></div>');
      } else {
        chatBubble = $('<div class="row bubble-recv">' + this.message + '</div><div class="clearfix"></div>');
      }
      $('#chatPanel').append(chatBubble);
    });
    setTimeOut(pollServer, 5000);
  });
}

$(document).on('ready', function() {
  pollServer();

  $('button').click(function() {
    $(this).toggleClass('active');
  });
});

$('#sendMessageBtn').on('click', function(event) {
  event.preventDeafult();

  var message = $('#chatMessage').val();

  $.post('../c23/chat.php', {
    'message': message
  }, function(result) {
    $('#sendMessageBtn').toogleClass('active');

    if(!result.success) {
      alert("There was an error sending your message");
    } else {
      console.log("Message sent!");
      $('#chatMessage').val('Send a message here ....');
    }
  });
});
