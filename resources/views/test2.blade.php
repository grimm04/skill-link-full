<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="{!! asset('landing_page/css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background-color: #233D5A; color: #FFCC10; font-size: 20px;">
          <p class="modal-title">Modal Heading</p>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <br><br>
          <center style="font-size: 20px;">
          <p>
            <img src="{!! asset('landing_page/image/20171206_211142.png') !!}" style="max-width: 100px">
          </p>
          <br>
          <p>
            <b>Thank You for Registering</b>
          </p>
          <p>
            A confirmation email is on its way
          </p>
          <br>
          <p>
            <a class="btn btn-popup" href="{{ route('register') }}">Register Now</a>
          </p>
          </center>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<div class="container">
  <h2>Basic Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal --> 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background-color: #233D5A; color: #FFCC10; font-size: 20px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <p class="modal-title">Skill Link</p>
        </div>
        <div class="modal-body">
          <br><br>
          <center style="font-size: 20px;">
          <p>
            <img src="{!! asset('landing_page/image/20171206_211142.png') !!}" style="max-width: 100px">
          </p>
          <br>
          <p>
            <b>Thank You for Registering</b>
          </p>
          <p>
            A confirmation email is on its way
          </p>
          <br>
          <p>
            <a class="btn btn-popup" data-dismiss="modal">Continue</a>
          </p>
          </center>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
