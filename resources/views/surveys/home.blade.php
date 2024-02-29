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
  <form action="{{ route ('answer') }}" method="get"> 
  <div class="tab-content">

    <div id="user" class="tab-pane fade in active">
      <center><h3 class="title-opinion">Skill.link 2018</h3></center><br>

      Name
      <textarea rows='1' placeholder='Full Name' name="name" id="control"></textarea>

      Company
      <textarea rows='1' placeholder='Company Name' name="company" id="control"></textarea>

      Position In Company
      <textarea rows='1' placeholder='Job Title' name="job_title" id="control"></textarea>

      <p>Company size</p>
        <label class="input-checkbox">
          <input type="radio" name="optradio" value="Large">
          <span class="checkmark border-all-radius"></span>
          <p> Large &nbsp ( 500+ ) </p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio" value="Medium">
          <span class="checkmark border-all-radius"></span>
          <p> Medium &nbsp ( 50 - 500 )</p>
        </label>    

        <label class="input-checkbox">
          <input type="radio" name="optradio" value="Small">
          <span class="checkmark border-all-radius"></span>
          <p> Small &nbsp ( 1- 50 )</p>
        </label>

      <input type="hidden" value="{!! $email !!}" name="email" > 
      
      <div class="show_hide">


      <button data-toggle="tab" class="btn btn-register sendButton" href="#home" disabled="disabled">Next</button> <br><br></div>
    </div>

    <div id="home" class="tab-pane fade">
      @foreach ($question as $questions => $a)

          @if ($a->getModelQuestion->count() > 0)
          <h3 class="title-opinion">{!! $a->name !!}</h3>
          @foreach ($a->getModelQuestion as $b => $key)
              <p>{!! $key->title !!}
              </p>
            <input type="hidden" value="{!! $key->id !!}" name="ids{!! $key->id !!}">

              @if ($key->getModelImageSurvey->count() > 0)
                @foreach ($key->getModelImageSurvey as $c)
                  <img src="{!!asset('survey_image/'.$c->image)!!}" class="image_surveys">
                @endforeach
              @endif

              @foreach ($key->getModelMcSurvey as $c => $mc)
                <label class="input-checkbox">
                  @if ($key->id == 3)
                    <input class="test2 sasa" type="checkbox" onchange="checkboxescuk(this)" name="optradio13[]" value="{!! $mc->id !!}">
                  @else
                    <input class="test sasa" type="radio" onchange="radiocuy(this)" name="optradio{!! $questions+1 !!}{!! $b+1 !!}" value="{!! $mc->id !!}">
                  @endif
                  <span class="checkmark border-all-radius"></span>
                  <p> {!! $mc->question !!} </p>
                </label>
              @endforeach

          @endforeach
          @endif
        
      @endforeach
      <button data-toggle="tab" class="btn btn-register" href="#user">Previous</button>
      <button data-toggle="tab" class="btn btn-register sendButton2" href="#menu1" disabled="disabled">Next</button>
    </div>


    <div id="menu1" class="tab-pane fade">
      @foreach ($essay_question as $a)
        @if ($a->getModelEssayQuestion->count() > 0)
          <h3 class="title-opinion">{!! $a->name !!}</h3>
          @foreach ($a->getModelEssayQuestion as $b)
            <p> {!! $b->question !!} </p>
            <textarea rows='1' placeholder='opinion' name="opinion{!! $b->id !!}" ></textarea>
          @endforeach
        @endif
        
      @endforeach
      <button data-toggle="tab" class="btn btn-register" href="#home">Previous</button>
      <button data-toggle="tab" class="btn btn-register sendButton3" href="#menu2" disabled="disabled">Next</button>
    </div>

    <div id="menu2" class="tab-pane fade">

      <h3 class="title-opinion">Products and services</h3>
      <div class="row survey-product">
        <div class="col-md-6">
          <label class="input-checkbox">
            <input type="radio" name="product" value="CORPORATE" required>
            <span class="checkmark border-all-radius"></span>
            <p class="title-survey-product">CORPORATE PACKAGE</p>
            <p class="text-survey-product">
              This package is designed for large
              corporations with an existing
              recruitment infrastructure. 
            </p>
            <p class="text-survey-product2">
              Price: $15,000.00 (Monthly)<br>
              Item #: 100001<br>
              Type: Subscription
            </p>
          </label>
        </div>
        <div class="col-md-6">
          <label class="input-checkbox">
            <p class="title-survey-product2">PACKAGE DETAILS</p>
            <p class="text-survey-product">
                Comes with 1 to 20 logins.
                Also included 10,000 annual hires
                at a fixed admin fee of 
            </p>
            <p class="text-survey-product2">
              Price: $199.99 (Per hire)<br>
              Item #: 100001<br>
              Type: Admin fee
            </p>
          </label>
        </div>
      </div>
      <div class="row survey-product">
        <div class="col-md-6">
          <label class="input-checkbox">
            <input type="radio" name="product" value="INTERMEDIATE">
            <span class="checkmark border-all-radius"></span>
            <p class="title-survey-product">INTERMEDIATE PACKAGE</p>
            <p class="text-survey-product">
              This package is designed for
              medium sized corporations with an
              existing recruitment infrastructure.
            </p>
            <p class="text-survey-product2">
              Price: $8,000.00 (Monthly)<br>
              Item #: 100002<br>
              Type: Subscription
            </p>
          </label>
        </div>
        <div class="col-md-6">
          <label class="input-checkbox">
            <p class="title-survey-product2">PACKAGE DETAILS</p>
            <p class="text-survey-product">
              Comes with 1 to 10 logins.
              Also included 2500 annual hires at
              a fixed admin fee of
            </p>
            <p class="text-survey-product2">
              Price: $499.99 (Per hire)<br>
              Item #: 100002<br>
              Type: Admin fee
            </p>
          </label>
        </div>
      </div>
      <div class="row survey-product">
        <div class="col-md-6">
          <label class="input-checkbox">
            <input type="radio" name="product" value="BASE">
            <span class="checkmark border-all-radius"></span>
            <p class="title-survey-product">BASE PACKAGE</p>
            <p class="text-survey-product">
              This package is designed for small
              companies without an existing
              recruitment infrastructure. 
            </p>
            <p class="text-survey-product2">Price: $4,000.00 (Monthly<br>
            Item #: 100003<br>
            Type: Subscription</p>
          </label>
        </div>
        <div class="col-md-6">
          <label class="input-checkbox">
            <p class="title-survey-product2">PACKAGE DETAILS</p>
            <p class="text-survey-product">
              Comes with 1 to 3 logins.
              Also included 500 annual hires at
              a fixed admin fee of
            </p>
            <p class="text-survey-product2">
              Price: $749.99 (Per hire)<br>
              Item #: 100003<br>
              Type: Admin fee
            </p>
          </label>
        </div>
      </div>
      <div class="row survey-product">
        <div class="col-md-6">
          <label class="input-checkbox">
            <input type="radio" name="product" value="INDEPENDENT">
            <span class="checkmark border-all-radius"></span>
            <p class="title-survey-product">INDEPENDENT PACKAGE</p>
            <p class="text-survey-product">
              This package is designed for
              independent recruiters or head
              hunters looking to utilize our
              network
            </p>
            <p class="text-survey-product2">
              Price: $2,000.00 (Monthly)<br>
              Item #: 100004<br>
              Type: Subscription
            </p>
          </label>
        </div>
        <div class="col-md-6">
          <label class="input-checkbox">
            <p class="title-survey-product2">PACKAGE DETAILS</p>
            <p class="text-survey-product">
              Comes with 1 login.
              Also included 120 annual hires at
              a fixed admin fee of  
            </p>
            <p class="text-survey-product2">
              Price: $999.99 (Per hire)<br>
              Item #: 100004<br>
              Type: Admin fee
            </p>
          </label>
        </div>
      </div>
      <div class="row survey-product2">
        <div class="col-md-6">
          <label class="input-checkbox">
            <input type="radio" name="product" value="PAY PER USE">
            <span class="checkmark border-all-radius"></span>
            <p class="title-survey-product">PAY PER USE (CUSTOM)</p>
            <p class="text-survey-product">
              This package is designed for small
              companies looking to get
              customized hires tailed to their
              specific needs. 
            </p>
            <p class="text-survey-product2">
              Price: $5,000.00 (Minimum budget)<br>
              Item #: 100005<br>
              Type: Pay-per-use
            </p>
          </label>
        </div>
        <div class="col-md-6">
          <label class="input-checkbox">
            <p class="title-survey-product2">PACKAGE DETAILS</p>
            <p class="text-survey-product">
              Comes with 10 hours consultation
              with one of our recruitment
              consultants, that’s assists the
              client with their hiring needs.
            </p>
            <p class="text-survey-product2">
              Price: $699.99 (Per hire)<br>
              Item #: 100005<br>
              Type: Admin fee
            </p>
          </label>
        </div>
      </div>
      <br>
      <button data-toggle="tab" class="btn btn-register" href="#menu1">Previous</button>
      <input type="submit" class="btn btn-register sendButton4"  value="Answer" disabled="disabled" />
    </div>
  </div>
  </form>

  </div>
</div>
</div>
</section>



<script type="text/javascript">
  $(document).ready(function() {
    $('#user textarea').keyup(function() {

        var empty = false;
        $('#user textarea').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.sendButton').attr('disabled', 'disabled');
        } else {
          $('#user input[type="radio"]').click(function() {

            if ($('#user input[type="radio"]').is(':checked')) {
              $('.sendButton').attr('disabled', false);
            }
            else{
              $('.sendButton').attr('disabled', 'disabled');
            }
          });
        }
    });
});
</script>

<script type="text/javascript">
    var radio = $('.input-checkbox .test');
    var checkboxes = $('.input-checkbox .test2');
    var checkboxessadsadsad = $('.input-checkbox .sasa');
    function radiocuy(){

        var radio2 = radio.filter(':checked').length;
        return radio2;

    }

    function checkboxescuk(){

        var checkboxes2 = checkboxes.filter(':checked').length;
        return checkboxes2;

    }

      checkboxessadsadsad.change(function () {
        var apaya = radiocuy();
        var apaweh = checkboxescuk();
        if(apaya > 14 && apaweh > 0){
          $('.sendButton2').attr('disabled', false);
        }
        else{
          $('.sendButton2').attr('disabled', 'disabled');
        }
      });
      checkboxessadsadsad.change();

      
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#menu1 textarea').keyup(function() {

        var empty = false;
        $('#menu1 textarea').each(function() {
            if ($(this).val().length == 0) {
                empty = true;
            }
        });

        if (empty) {
            $('.sendButton3').attr('disabled', 'disabled');
        } else {
            $('.sendButton3').attr('disabled', false);
        }
    });
});
</script>

<script type="text/javascript">
  $(document).ready(function() {
    $('#menu2 input[type="radio"]').click(function() {

        var empty = false;
            if (!$('#menu2').find('input').is(':checked')) {
              empty = true;
            }

        if (empty === true) {
            $('.sendButton4').attr('disabled', 'disabled');
        } else {
            $('.sendButton4').attr('disabled', false);
        }
    });
});
</script>

<script>
  var textarea = null;
  window.addEventListener("load", function() {
      textarea = window.document.querySelector("textarea");
      textarea.addEventListener("keypress", function() {
          if(textarea.scrollTop != 0){
              textarea.style.height = textarea.scrollHeight + "px";
          }
      }, false);
  }, false);
</script>
</body>
</html>
