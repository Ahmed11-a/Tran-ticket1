<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
  <!--  All snippets are MIT license http://bootdey.com/license -->
  <title>Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>

<body>

  <!-- /.modal compose message -->
  <div class="modal show" id="modalCompose">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header modal-header-info">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-envelope"></span> Compose Message</h4>
        </div>
        <div class="modal-body">
          <form role="form" class="form-horizontal">
            <div class="form-group">
              <label class="col-sm-2" for="inputTo"><span class="glyphicon glyphicon-user"></span>Name</label>
              <div class="col-sm-10"><input type="text" class="form-control" id="name" placeholder="Enter your name"></div>
            </div>
            <div class="form-group">
              <label class="col-sm-2" for="inputTo"><span class="glyphicon glyphicon-user"></span>Email</label>
              <div class="col-sm-10"><input type="text" class="form-control" id="email" placeholder="Enter your email"></div>
            </div>
            <div class="form-group">
              <label class="col-sm-2" for="inputSubject"><span class="glyphicon glyphicon-list-alt"></span>Subject</label>
              <div class="col-sm-10"><input type="text" class="form-control" id="subject" placeholder="subject"></div>
            </div>
            <div class="form-group">
              <label class="col-sm-12" for="inputBody"><span class="glyphicon glyphicon-list"></span>Message</label>
              <div class="col-sm-12"><textarea class="form-control" id="body" rows="8"></textarea></div>
            </div>
            <div class="modal-footer">
              <button type="button" onclick="sendEmail()" class="btn btn-primary ">Send <i class="fa fa-arrow-circle-right fa-lg"></i></button>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal compose message -->
  <style type="text/css">
    @import url('http://fonts.googleapis.com/css?family=Open+Sans:200,300');

    body {
      background-color: #333;
      font-family: 'Open Sans', Arial, Helvetica, Sans-Serif;
    }

    .modal-header-info {
      color: #fff;
      padding: 9px 15px;
      border-bottom: 1px solid #eee;
      background-color: #5bc0de;
      -webkit-border-top-left-radius: 5px;
      -webkit-border-top-right-radius: 5px;
      -moz-border-radius-topleft: 5px;
      -moz-border-radius-topright: 5px;
      border-top-left-radius: 5px;
      border-top-right-radius: 5px;
    }
  </style>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script type="text/javascript">
    function sendEmail() {
      var name = $("#name");
      var email = $("#email");
      var subject = $("#subject");
      var body = $("#body");

      if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
        $.ajax({
          url: 'sendEmail.php',
          method: 'POST',
          dataType: 'json',
          data: {
            name: name.val(),
            email: email.val(),
            subject: subject.val(),
            body: body.val()
          },
          success: function(response) {
            $('#myForm')[0].reset();
            $('.sent-notification').text("Message Sent Successfully.");
          }
        });
      }
    }

    function isNotEmpty(caller) {
      if (caller.val() == "") {
        caller.css('border', '1px solid red');
        return false;
      } else
        caller.css('border', '');

      return true;
    }
  </script>

</body>

</html>