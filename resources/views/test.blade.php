<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="{!! asset('landing_page/css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
</head>
<body>

<section class="questions">
<div class="container">
  <div class="col-md-6 col-md-offset-3 opinion">
  <h2 style="color: #7cb7f9;">Opinion</h2>
  <div class="tab-content">

    <div id="home" class="tab-pane fade in active">
      @foreach ($question as $a)

          @if ($a->getModelQuestion->count() > 0)
          <h3 class="title-opinion">{!! $a->name !!}</h3>
          @foreach ($a->getModelQuestion as $b => $key)
              <p>{!! $key->title !!}
              </p>

              @foreach ($key->getModelMcSurvey as $c)
                <label class="input-checkbox">
                  <input type="radio" name="optradio{!! $b+1 !!}">
                  <span class="checkmark border-all-radius"></span>
                  <p> {!! $c->question !!} </p>
                </label>
              @endforeach

          @endforeach
          @endif
        
      @endforeach
      <a data-toggle="tab" class="btn btn-register" href="#menu1">Next</a>
    </div>


    <div id="menu1" class="tab-pane fade">
      @foreach ($essay_question as $a)
        @if ($a->getModelEssayQuestion->count() > 0)
          <h3 class="title-opinion">{!! $a->name !!}</h3>
          @foreach ($a->getModelEssayQuestion as $b)
            <p> {!! $b->question !!} </p>

            <textarea rows='1' placeholder='opinion'></textarea>
          @endforeach
        @endif
        
      @endforeach
      <a data-toggle="tab" class="btn btn-register" href="#home">Previous</a>
      <a data-toggle="tab" class="btn btn-register" href="#menu2">Next</a>
    </div>
  </div>

    
  <!--<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3 class="title-opinion">Company specific questions.</h3>
      <p>How many people would you estimate are
      currently employed at your company?
      </p>
      
        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 10,000+</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 5,000- 10,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 1,000-5,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 50-1,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Less than 50</p>
        </label>
      
      <h3>Company specific questions.</h3>
      <p>How many people would you estimate are
      currently employed at your company?
      </p>
      
        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 10,000+</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 5,000- 10,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 1,000-5,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 50-1,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Less than 50</p>
        </label>

      <h3>Company specific questions.</h3>
      <p>How many people would you estimate are
      currently employed at your company?
      </p>
      
        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 10,000+</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 5,000- 10,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 1,000-5,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 50-1,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Less than 50</p>
        </label>

      <h3>Company specific questions.</h3>
      <p>How many people would you estimate are
      currently employed at your company?
      </p>
      
        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 10,000+</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 5,000- 10,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 1,000-5,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 50-1,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Less than 50</p>
        </label>

      <h3>Company specific questions.</h3>
      <p>How many people would you estimate are
      currently employed at your company?
      </p>
      
        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 10,000+</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 5,000- 10,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 1,000-5,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> 50-1,000</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Less than 50</p>
        </label>

      <a data-toggle="tab" class="btn btn-register" href="#menu1">Next</a>
    </div>

    <div id="menu1" class="tab-pane fade">
      <h3>Recruitment requirements</h3>
      <p>What important criteria must HR software
        possess to be beneficial in your opinion?</p>
      <textarea rows='1' placeholder='opinion'></textarea>
      <a data-toggle="tab" class="btn btn-register" href="#home">Previous</a>
      <a data-toggle="tab" class="btn btn-register" href="#menu2">Next</a>
    </div>

    <div id="menu2" class="tab-pane fade">
      <h3>Mobile requirements</h3>
      <p>How important is it in your
      opinion, to have the
      capability to stay
      connected to your work
      through your mobile
      device?</p>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Very Important</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Important</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Somewhat Important</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Not at all important</p>
        </label>

      <a data-toggle="tab" class="btn btn-register" href="#menu1">Previous</a>
      <a data-toggle="tab" class="btn btn-register" href="#menu3">Next</a>
    </div>

    <div id="menu3" class="tab-pane fade">
      <h3>Product Features</h3>
      <p>How important is it as a recruiter to be aware of a
      candidate’s current work status (availability) during your
      hiring process?</p>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Very Important</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Important</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Somewhat Important</p>
        </label>

        <label class="input-checkbox">
          <input type="radio" name="optradio">
          <span class="checkmark border-all-radius"></span>
          <p> Not at all important</p>
        </label>
        
      <a data-toggle="tab" class="btn btn-register" href="#menu2">Previous</a>
      <a data-toggle="tab" class="btn btn-register" href="#menu3">Send</a>
    </div>-->

  </div>
</div>
</div>
</section>

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
