<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skill Link</title>

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Bootstrap core CSS -->
    <link href="{!! asset('landing_page/image/20171206_211142.png') !!}" rel="shortcut icon">
    <link href="landing_page/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="" rel="stylesheet" type="text/css">
    <link href="{!! asset('landing_page/css/owl.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('landing_page/vendor/bootstrap/css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href="{!! asset('landing_page/vendor/font-awesome/css/font-awesome.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{!! asset('landing_page/vendor/magnific-popup/magnific-popup.css') !!}" media="all" rel="stylesheet" type="text/css" />

    <!-- Custom styles for this template -->
    <link href="{!! asset('landing_page/css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
    {{Html::style('css/sweetalert.min.css')}}  
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">SKILL.LINK</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#why">Why Skill.Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#faq">FAQ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row img-title">
          <div class="col-lg-6">
            <img src="{!! asset('landing_page/image/20171206_211142.png') !!}" alt="Los Angeles" class="img-banner">
          </div>
          <div class="col-md-1 border-yellow">
          </div>
          <div class="col-lg-5 ">
            <p class="text-title"><b>CONSTRUCTION LIVES HERE</b></p>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="features">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <p class="why-skill sr-icons">Features </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center"> <div id="feature-item" class="owl-carousel owl-theme">
                <div class="item">
                  <div class="feature-inner">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="{!! asset('landing_page/image/PROFILE.png') !!}" alt="Los Angeles" class="slicing">                      
                      </div>
                      <div class="col-md-6 text-slicing">
                        <h3><b>Profile</b></h3>
                        <p>Create a modern profile showcasing your skills, informing recruiters on work status and availability. With our Signature verification stamp, employers will feel secure knowing you have gone through the verification process for hiring.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="feature-inner">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="{!! asset('landing_page/image/NETWORK.png') !!}" alt="Los Angeles" class="slicing">                      
                      </div>
                      <div class="col-md-6 text-slicing">
                        <h3><b>Network</b></h3>
                        <p>
                          - Get unrestricted access to all members of Skill-Link.
                          <br>- Connect with any one on the network including recruiters.
                          <br>- No introductions needed
                          <br>- Skill-link provides connection suggestions based on your interests.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="feature-inner">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="{!! asset('landing_page/image/JOBS.png') !!}" alt="Los Angeles" class="slicing">                      
                      </div>
                      <div class="col-md-6 text-slicing">
                        <h3><b>Jobs</b></h3>
                        <p>
                          - All the information you need to decide if a job is right for you. Right on the job advertisement
                          <br>
                          - Details of the job, pay, schedule, benefits are all included within the job Ad.
                          <br>
                          - Apply for jobs directly through Skill-link.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="feature-inner">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="{!! asset('landing_page/image/MESSAGE.png') !!}" alt="Los Angeles" class="slicing">                      
                      </div>
                      <div class="col-md-6 text-slicing">
                        <h3><b>Messaging</b></h3>
                        <p>
                          - Unlimited messaging to any one on our network. FREE of charge.
                          <br>
                          - We keep you in the loop by sending you notifications directly to your smartphone so you never miss an opportunity.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="feature-inner">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="{!! asset('landing_page/image/video call.png') !!}" alt="Los Angeles" class="slicing">                      
                      </div>
                      <div class="col-md-6 text-slicing">
                        <h3><b>Video interview</b></h3>
                        <p>
                          - With our video interviewing system, we can connect you with opportunities anytime and anywhere. We bring you the opportunities, so you don't have to look for them.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="feature-inner">
                    <div class="row">
                      <div class="col-md-6">
                        <img src="{!! asset('landing_page/image/NOTIFICAITIOON.png') !!}" alt="Los Angeles" class="slicing">                      
                      </div>
                      <div class="col-md-6 text-slicing">
                        <h3><b>Unique content</b></h3>
                        <p>
                          - With our system you don't have to worry about seeing information on your news feed that doesn't interest you. Each member can tailor their news feed to fit their specific interests.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-why" id="why">
      <div class="container">
        <div class="row"> 
          <div class="col-md-4">
            <p class="why-skill sr-icons">Why Skill.Link </p>
            <img src="{!! asset('landing_page/image/IPHONE2.png') !!}" class="sr-icons img-who">
          </div>
          <div class="col-md-8"><br>
            <p class="why-content sr-icons">Skill.Link is a Revolutionary Platform that bridges the Gap between employers seeking a verified workforce and the qualified/ verified trades people seeking employment. Skill.Link has streamlined the communication between employers and job seekers, making the hiring process effortless and efficient.
            <br><br>
            -         Receive real-time job notifications
            <br><br>
            -         Extensive Community of verified Trades Workers never seen before
            <br><br>
            -         Hiring information received during registration, eliminating hire on packages by users
            <br><br>
            -         Free for candidates seeking employment
            <br><br>
            What are you waiting for? Join the fastest growing community of construction professionals.

            <br><br>
            <center><a class="btn btn-register sr-button" href="{{ route('register') }}">Register Now</a></center>
            </p>

          </div>

        </div>
      </div>
    </section>

    <section id="faq">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <p class="why-skill sr-icons">FAQ </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-8 mx-auto">
              <div class="panel-group sr-button" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-faq">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <div class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        1. What is Skill-Link?
                      </a>
                    </div>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                      - Skill-Link is a three-tiered system, comprised of a construction social network, a database and a recruitment application provided to employers.
                      <br><br>
                      - Skill-Link is designed to provide employees with direct opportunities from employers seeking verified and qualified trades people.
                    </div>
                  </div>
                </div>

                <div class="panel panel-faq">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        2. How do I benefit as an Employee if I join?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                      - Employees are given unrestricted access to our network of trades people and employers. We allow users to contact recruiters directly.  
                      <br><br>
                      - Job posters are posted directly to user’s news feed when its applicable to them. They won't see job posters that aren't relevant to them.
                      <br><br>
                      - Receive notifications directly to your mobile device when potential job opportunities are sent to you.
                      <br><br>
                      - On boarding for new jobs are handled directly on our system so it eliminates the need to go in to the employer’s office to fill out needless paper work, when its completed directly on our system.
                      <br><br>
                      - We allow our users to find better paying jobs, without the hassle of looking for them. We bring the opportunities right to your mobile device.
                    </div>
                  </div>
                </div>

                <div class="panel panel-faq">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        3. Is there an app for Skill-Link?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                      - Currently Skill-Link is available both on desktop and on mobile devices in the form of a web responsive site allowing us to give the feel of an app on your mobile browser.
                    </div>
                  </div>
                </div>

                <div class="panel panel-faq">
                  <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        4. What if I don't want to provide my sensitive information? 
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                      - All sensitive information isn't stored on our system. We will ask for common information needed for employment i.e. Name, address, marital status, emergency contacts and so on.
                      <br><br>
                      - All sensitive information like S.I.N and driver licenses will be request upon hire. You will be directed to the digital hire on package pre-filled with user’s information outside the user’s driver license and SIN number. Those will be input into the digital hire on package by the user.
                    </div>
                  </div>
                </div>

                <div class="panel panel-faq">
                  <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        5. Are you a job board? Like Indeed?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                      - No we aren't a job board, as our job advertisements are available to all but specifically to the required trades per job.
                      <br><br>
                      - We are a platform specifically designed for the construction industry.
                      <br><br>
                      - Our job posters provide users with all the necessary information to make a decision regarding an opportunity on the spot. Eliminating back and forth conversations with recruiters on details about the job.
                      <br><br>
                      - Once you sign up for Skill-Link you will never need to update, reload or send your resume out again. We do all the leg work and send out your information to potential employers. That's if your work status is set to actively looking. Otherwise we wont sent out your resume to employers.
                      <br><br>
                      - Our Job posters ensure skills, experiences, and locations are specifically matched, rather than users having to job search or employers having to scan through 100's of resumes.
                      <br><br>
                      - Once a user applies to a job, they could be hired within minutes depending on the response time of the recruiter.
                      <br><br>
                      - Our platform allows users to be offered and to apply instantly to employment opportunities.
                      <br><br>
                      - Once both parties have accepted the terms of employment, the users will be sent through our onboarding system to mobilize them to their new job.
                    </div>
                  </div>
                </div>

                <div class="panel panel-faq">
                  <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        6. Is Skill-Link a recruitment agency?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">
                      - In our current form we aren't a recruitment agency, but by 2019 “Skill-Ployment” will be available to employees looking for alternative means of employment.
                      <br><br>
                      - We cut out the need for recruitment agencies currently by allowing employers to advertise directly to the required trades people, instead of posting their jobs on job boards.
                    </div>
                  </div>
                </div>

                <div class="panel panel-faq">
                  <div class="panel-heading" role="tab" id="headingSeven">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        7. Is Skill-Link similar to LinkedIn?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                    <div class="panel-body">
                      - Although we share similarities, Skill-Link is designed solely for the construction industry.
                      <br><br>
                      - We provide all the familiarities of LinkedIn but none of the downsides.
                      <br><br>
                      - The major difference between us and LinkedIn is that we utilize a database and a verification process to guarantee accuracy of hiring's.
                      <br><br>
                      - Skill-Link is specifically designed to match the trades with the right employers at the right time.
                    </div>
                  </div>
                </div>

                <div class="panel panel-faq">
                  <div class="panel-heading" role="tab" id="headingEight">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        8. Will my current employer be able to see my work status?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                    <div class="panel-body">
                      - Once a user is employed by a company through Skill-Link, their work status will be suspended for viewing by the current employer.
                      <br><br>
                      - Allowing users to maintain privacy in case of disagreements.
                    </div>
                  </div>
                </div>

                <div class="panel panel-faq">
                  <div class="panel-heading" role="tab" id="headingNine">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                          9. Do I as an employee have to pay to use Skill-Link?
                      </a>
                    </h4>
                  </div>
                  <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                    <div class="panel-body">
                      - The cornerstone to our brand is that we will never take money out of the hard-working trades people seeking employment opportunities.
                      <br><br>
                      - The service is free to employees, employers on the other hand will pay a discounted price to recruit man power through our system.
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <section class="email">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto sr-button">
          {!! Form::open(array('route' => 'subscribe')) !!}
            <center>
              <p class="email-title">Or, You can always subscribe now</p>
              <br>
              <input type="text" class="text-email" name="email" id="email" type="email" placeholder="Email"> <br> <br> 
              <input type="submit" value="Subscribe Now" class="btn btn-register" >
            </center>
           {!! Form::close() !!}
          </div>
        </div>
      </div>
    </section>

      <div class="modal fade" id="landing">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header" style="background-color: #233D5A; color: #FFCC10; font-size: 20px;">
          <p class="modal-title">Skill Link</p>
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
            <b>Thank you for subscribing </b>
          </p>
          <p>
            Please Check Your Email
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

    <footer class="footer">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <img src="{!! asset('landing_page/image/Skill-Link GLOSSY BLACK BGD.png') !!}" class="sr-icons img-footer">
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-3 sr-icons">
            <center>
            <br>
            Location
            <br><br>
            Edmonton, Alberta, Canada
            </center>
          </div>
          <div class="col-md-3 sr-icons">
            <br>
            <center>
            Connect With Us
            <table>
              <tr>
                <td><a href="https://www.instagram.com/skill.link" target="_blank"><img src="{!! asset('landing_page/image/LANDING PAGE-35.png') !!}" width="50px"></a> </td>
                <td><a href="https://www.facebook.com/Skill.link.inc/" target="_blank"><img src="{!! asset('landing_page/image/LANDING PAGE-36.png') !!}" width="50px"></a> </td>
                <td><a href="https://twitter.com/skill_link_inc" target="_blank"><img src="{!! asset('landing_page/image/LANDING PAGE-37.png') !!}" width="50px"></a> </td>
              </tr>
            </table>
            </center>
          </div>
        </div>

      
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{!! asset('landing_page/vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('landing_page/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

    <!-- Plugin JavaScript -->
    <script src="{!! asset('landing_page/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>
    <script src="{!! asset('landing_page/vendor/scrollreveal/scrollreveal.min.js') !!}"></script>
    <script src="{!! asset('landing_page/vendor/magnific-popup/jquery.magnific-popup.min.js') !!}"></script>

    <!-- Custom scripts for this template -->
    <script src="{!! asset('landing_page/js/creative.min.js') !!}"></script>
    <script src="{!! asset('landing_page/js/owl.js') !!}"></script>
     @if(!empty(Session::get('modal_popup_landing')) && Session::get('modal_popup_landing') == 5)
      <script>
      $(function() {
          $('#landing').modal('show');
      });
      </script>
    @endif
    <script>
      $('#feature-item').owlCarousel({
          loop:true,
          margin:10,
          autoplay:true,
        autoplayTimeout:40000,
          nav:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }
          },
          navText: ['<span aria-label="' + 'prev' + '"><i class="fa fa-angle-left"></span>',
          '<span aria-label="' + 'next' + '"><i class="fa fa-angle-right"></span>']
      });
    </script>

  </body>

</html>
