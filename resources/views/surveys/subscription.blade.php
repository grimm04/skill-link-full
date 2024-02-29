<!DOCTYPE html>
<html lang="en">
<head>
  <title>Surveys Market</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="{!! asset('landing_page/css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('landing_page/image/20171206_211142.png') !!}" rel="shortcut icon">
</head>
<body>

<section class="questions">
<div class="container">
  <div class="col-md-6 col-md-offset-3 opinion">
  <center><h2 style="color: #7cb7f9;">CLIENT SURVEY</h2></center>
  <form method="post">
      {!! csrf_field() !!} 
      <center>
        <p><h2 class="title-opinion">THANK YOU FOR YOUR INPUT</h2></p><br>
        <p><h3 class="">For your time, we would like to offer your company a free 30 day trial subscription. Also you will receive 5 free hires. </h3></p><br>
        <p><h3>Please click on the link below to fill out trial subscription.</p></h3><br><br>
        <button type="button" class="btn btn-register" data-id="{!! $email1 !!}" onclick="email(this)">Subscription</button> <br><br>

      </center>
  </form>

  </div>
</div>
</div>
</section>

<script type="text/javascript">
function email(i) {

  email = $(i).data('id');
  $.ajax({
      type: 'POST',
      url: "{{ route('subscribe_survey') }}",
      data: {
          '_token': $('input[name=_token]').val(),
          'email': email
      },
      success: function(data) { 
        window.location.href = "{{ route('landing') }}";
      },
  });
} 
</script>
</body>
</html>
