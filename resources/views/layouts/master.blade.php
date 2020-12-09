<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name', 'SMT') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="{{ url('slick/slick.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ url('slick/slick-theme.css') }}"/>
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
<style type="text/css">
  header .navbar
  {
    /*background-color: transparent !important ;*/
    background-color: #003580 !important;
  }
</style>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="/"><img width="113" src="{{ url('img/logo.png') }}" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Add the listing <span class="sr-only">(current)</span></a>
      </li>

      @if(Auth::check())
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img width="60" src="{{ url('img/user-btn.svg') }}"> </a>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
          <a class="dropdown-item" href="#">Account</a>
          <a class="dropdown-item" href="#">Favorites</a>
          <a class="dropdown-item" href="#">Become a Vendor</a>
          <a class="dropdown-item" href="#">Experience Guide</a>
          <a class="dropdown-item" href="#">Currency</a>
          <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
          </div>
      </li>
      @else
      <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img width="60" src="{{ url('img/user-btn.svg') }}"> </a>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"  data-toggle="modal" data-target=".sign-up">Signup</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Login</a>
          <a class="dropdown-item" href="#">Currency</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Experience Guide</a>
        </div>
      </li>
      @endif

    </ul>
  </div>
</nav>
</header>

@yield('content')

<div class="browse-category pt-0">
    <div class="home-heading">
        <h2>Top destinations</h2>
        <p class="col-sm-4 m-auto">Choose from thousands of cars in over 5,500 cities across
        the US, Canada and the UK.</p>
    </div>
    <div class="container">
        <section class="destinations slider">

        @foreach ($destinations as $destination)
            <div class="p-3">
                <div class="content">
                    <img width="100%" src="{{ url('/destination').'/'.$destination->media }}">
                    <h4> {{$destination->name}} </h4>
                </div>
            </div>
        @endforeach

        {{-- <div class="p-3">
        <div class="content">
            <img width="100%" src="img/ct-1.png">
            <h4> New York </h4>

        </div>
        </div>

        <div class="p-3">
        <div class="content">
            <img width="100%" src="img/ct-2.png">
            <h4> Los Angeles </h4>

        </div>
        </div>
        <div class="p-3">
        <div class="content">
            <img width="100%" src="img/ct-3.png">
            <h4> Chicago </h4>

        </div>
        </div>
        <div class="p-3">
        <div class="content">
            <img width="100%" src="img/ct-4.png">
            <h4> Phoenix </h4>

        </div>
        </div>
        <div class="p-3">
        <div class="content">
            <img width="100%" src="img/ct-5.png">
            <h4> Philadelphia </h4>

        </div>
        </div>
        <div class="p-3">
        <div class="content">
            <img width="100%" src="img/ct-6.png">
            <h4> San Antonio </h4>

        </div>
        </div>
        <div class="p-3">
        <div class="content">
            <img width="100%" src="img/ct-1.png">
            <h4> New York </h4>

        </div>
        </div>

        <div class="p-3">
        <div class="content">
            <img width="100%" src="img/ct-2.png">
            <h4> Los Angeles </h4>

        </div>
        </div> --}}

    </section>
    </div>
</div>

<div class="container">
    <div class="mobile-app">
    <div class="row m-0">

            <div class=" jane-conect">
            <div class="col-sm-12">
                <h2>It is a long established fact that a reader.</h2>

                <p class="dec">
                It is a long established fact that a reader will be distracted by the readable content of a page.
                </p>
                <div class="d-flex">
                    <a class="mr-2" href="#"><img width="140" src="{{ url('img/iphone-btn.png') }}"></a>
                    <a class="" href="#"><img width="140" src="{{ url('img/googleplay-btn.png') }}"></a>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="car-sharing">
    <div class="home-heading">
        <div class="col-sm-5 m-auto">
        <p class="text-primary mb-0">Skip the rental counter</p>
        <h2>Discover the world’s largest Boat & car sharing marketplace</h2>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                    <div class="content">
                        <div class="endless-content"> <span><img src="{{ url('img/endless.svg') }}" alt="Endless" /></span> </div>
                        <h5>Endless Options</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="content">
                        <div class="endless-content"> <span><img src="{{ url('img/endless.svg') }}" alt="Endless" /></span> </div>
                        <h5>Endless Options</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="content">
                        <div class="endless-content"> <span><img src="{{ url('img/endless.svg') }}" alt="Endless" /></span> </div>
                        <h5>Endless Options</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                    </div>
            </div>
        </div>
    </div>
</div>

<div class="earn-extra">
    <div class="container">
     <div class="row">
         <div class="col-sm-6">
             <img width="100%" src="{{ url('img/earn-extra.svg') }}" alt="" />
         </div>
         <div class="col-sm-5 m-auto">
             <h4>Share your boat & car, bike <br>
             earn extra cash</h4>
             <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
             <button class="btn btn-primary">Learn More</button>
         </div>
     </div>
    </div>
 </div>
 <div class="subscribe">
      <div class="container">
          <div class="row">
              <div class="col-sm-5">
                  <h4>Save Time, Save Money!</h4>
                  <p>Sign up and we'll send the best deals to you</p>
              </div>
              <div class="col-sm-7">
                   <div class="row">
                        <div class="col-sm-9">
                             <input class="form-control" placeholder="Enter your email address" type="" name="">
                        </div>
                        <div class="col-sm-3">
                            <button class="btn btn-primary btn-block">Subscribe</button>
                        </div>
                   </div>
              </div>
          </div>
      </div>
 </div>

 <div class="modal fade bd-example-modal-lg sign-in" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">

      <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img width="18px" src="{{ url('img/cross.svg') }}" /></span>
          </button>

      <div class="row">
              <div class="col-sm-5">
              <div class="section1 position-relative">
                  <div class="smt-cr">
                      <img width="70" src="{{ url('img/smt-cr.svg') }}">
                  </div>
                  <div class="position-relative p-4">
                      <h4 class="mb-5 position-relative">Welcome to SMT</h4>
                      <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                      <button class="btn-primary btn">Create an Account</button>
                  </div>
              </div>
              </div>
              <div class="col-sm-7">
                  <div class="section2 position-relative">
                  <div class="smt-blue">
                      <img width="70" src="{{ url('img/smt-blue.svg') }}">
                  </div>
                  <div class=""><h2 class="text-center font-weight-bold mb-5  position-relative">Sign in</h2></div>
                  <div class="">
                      <form method="POST" action="{{ route('login') }}">
                          @csrf
                          <div class="form-group mb-4">
                              <input placeholder="Enter your email address" class="form-control" type="" name="email" required autocomplete="email" autofocus>
                          </div>
                          <div class="form-group mb-4">
                              <input placeholder="Enter your Password" class="form-control" type="password" name="password" required autocomplete="current-password">
                          </div>
                          <button class="btn btn-primary btn-block mb-4">Sign in</button>
                          <div class="d-flex justify-content-between mb-4">
                                  <div class="text-primary">Stay Sign in</div>
                              <div class="text-primary">
                                  <a href="" data-toggle="modal" data-target=".reset-password" data-keyboard="false" data-backdrop="static" data-dismiss="modal"> Forgot Password </a>
                              </div>
                          </div>

                          <div class="text-center mb-4">
                                  <a href="" class="text-muted text-uppercase"> - or sign in with -</a>
                          </div>
                          <div class="text-center sign-socal">
                              <a href=""><img src="{{ url('img/facebook.svg') }}"></a>
                              <a href=""><img src="{{ url('img/twitter2.svg') }}"></a>
                              <a href=""><img src="{{ url('img/gmail.svg') }}"></a>
                          </div>
                      </form>
                  </div>


                  </div>
                  <p class="small text-center"> This site is protected by reCAPTCHA and the Google <a href="" class="text-primary"> Privacy Policy </a> and <a href="" class="text-primary"> Terms of Service apply.</a> </p>
              </div>
      </div>
      </div>
  </div>
 </div>
 <div class="modal fade sign-in sign-up" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
 <div class="modal-dialog modal-xl">
     <div class="modal-content">
     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true"><img width="18px" src="{{ url('img/cross.svg') }}" /></span>
         </button>

     <div class="row">
             <div class="col-sm-5">
             <div class="section1 position-relative">
                 <div class="smt-cr">
                     <img width="70" src="{{ url('img/smt-cr.svg') }}">
                 </div>
                 <div class="position-relative p-4">
                     <h4 class="mb-5 position-relative">Welcome to SMT</h4>
                     <p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
                     <button class="btn-primary btn">Sign in</button>
                 </div>
             </div>
             </div>
             <div class="col-sm-7">
                 <div class="section2 position-relative">
                 <div class="smt-blue">
                     <img width="70" src="{{ url('img/smt-blue.svg') }}">
                 </div>
                 <div class=""><h2 class="text-center font-weight-bold mb-5  position-relative">Sign Up</h2></div>
                 <div class="">
                     <form method="POST" action="{{ route('register') }}">
                          @csrf
                         <div class="form-group mb-4 row">
                             <div class="col-sm-6">  <input placeholder="Enter first name" class="form-control" type="" name="name" required autocomplete="name" autofocus></div>
                             <div class="col-sm-6">  <input placeholder="Enter last name" class="form-control" type="" name="last_name"></div>
                         </div>
                         <div class="form-group mb-4">
                             <input placeholder="Enter email address" class="form-control" type="" name="email" autocomplete="email">
                         </div>
                         <div class="form-group mb-4 position-relative">
                             <input placeholder="Enter password" class="form-control" type="password" name="password" required autocomplete="new-password">
                             <i class="fa fa-eye-slash"></i>
                         </div>
                         <div class="form-group mb-4 position-relative">
                             <input placeholder="Confirm your password" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                             <i class="fa fa-eye"></i>
                         </div>
                         <div class="form-group mb-4">
                            <select class="form-control" name="role">
                                <option value="user">User</option>
                                <option value="vendor">Vendor</option>
                            </select>
                        </div>
                         <button class="btn btn-primary btn-block mb-4">Sign Up</button>
                     </form>
                 </div>
                 </div>
                 <p class="small text-center"> This site is protected by reCAPTCHA and the Google <a href="" class="text-primary"> Privacy Policy </a> and <a href="" class="text-primary"> Terms of Service apply.</a> </p>
             </div>
     </div>
     </div>
 </div>
 </div>
 <div class="modal fade sign-in reset-password show" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog">

      <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><img width="18px" src="{{ url('img/cross.svg') }}" /></span>
          </button>

      <div class="row">

              <div class="col-sm-12">
                  <div class="section2 position-relative">
                  <div class="smt-blue">
                      <img width="70" src="{{ url('img/smt-blue.svg') }}">
                  </div>
                  <div class="smt-cr-left">
                      <img width="70" src="{{ url('img/smt-cr-left.svg') }}">
                  </div>
                  <div class="text-center">
                        <img hidden="hidden" width="60" class="mb-2" src="{{ url('img/checkmark-orange.svg') }}">
                        <h2 class="text-center font-weight-bold mb-5  position-relative">Reset Password</h2></div>
                        <div class="">
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group mb-4">
                                    <input placeholder="Enter email address" class="form-control" type="" name="email">
                                </div>
                                <button class="btn btn-primary btn-block mb-4">Reset account</button>
                                <button class="btn btn-outline-dark btn-block mb-4">Back to login</button>
                            </form>
                            <div class="text-center" style="display: none;">
                            <p>We’ve sent you an email at dummymail@gmail.com with instructions to reset your password. It may take a minute or two to arrive.</p>
                                <button class="btn btn-primary my-4 px-4">Back to login</button>
                            </div>
                        </div>
                  </div>

              </div>
      </div>
      </div>
  </div>
 </div>

<footer>
   <div class="container">
   	  <div class="row">
   	  	  <div class="col-sm-2">
   	  	  	  <h5>About</h5>
   	  	  	  <p>About get SMT</p>
   	  	  	  <p>Press</p>
   	  	  	  <p>Term of use</p>
   	  	  	  <p>Cookies policy</p>
   	  	  	  <p>Member interface</p>
   	  	  	  <p>Agreement</p>
   	  	  	  <p>Contact us</p>
   	  	  </div>
   	  	  <div class="col-sm-2">
   	  	  	  <h5>Learn More</h5>
   	  	  	  <p>How it works</p>
   	  	  	  <p>For owners</p>
   	  	  	  <p>Mobile apps</p>

   	  	  </div>
   	  	  <div class="col-sm-3">
   	  	  	  <h5>Journal</h5>
   	  	  	  <p>Company news</p>
   	  	  	  <p>Lifestyle</p>
   	  	  	  <p>Experience Guide</p>
   	  	  	  <p>Destinations</p>
   	  	  	  <p>Tips of Rental and owners></p>
   	  	  	  <p>FAQ</p>
   	  	  </div>

   	  	  <div class="col-sm-2">
   	  	  	  <h5>Social Media</h5>
   	  	  	  <p>Facebook</p>
   	  	  	  <p>Twitter</p>
   	  	  	  <p>Instagram</p>
   	  	  	  <p>RSS</p>

   	  	  </div>
   	  	  <div class="col-sm-2">
   	  	  	  <h5>Download The App</h5>
   	  	  	  <a href="" class="d-block mb-3 mt-4 pt-1"> <img width="140" src="{{ url('img/iphone-btn.png') }}"> </a>
   	  	  	  <a href="" class="d-block mb-3"> <img width="140" src="{{ url('img/googleplay-btn.png') }}"> </a>

   	  	  </div>
   	  </div>

   </div>
   <div class="copy-right">
  	 <p>Copyright © 1996–2020 Sharemytoy. All rights reserved.</p>
   </div>
</footer>

<!------------->
<!--   <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ url('slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="{{ url('slick/slick.min.js') }}"></script>
<script type="text/javascript" src="{{ url('js/my-script.js') }}"></script>
<script type="text/javascript">

    $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 6,
        slidesToScroll: 3
      });
    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1
      });
    $(".destinations").slick({
        dots: true,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1
      });


     $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true
      });

</script>

<script type="text/javascript">
    var s = document.createElement('style'),
       r = document.querySelectorAll('input[type=range]'),
       prefs = ['webkit-slider-runnable', 'moz-range'],
       styles = [],
       l = prefs.length
       n = r.length;

    document.body.appendChild(s);

    var getTrackStyleStr = function(el) {
     var str = '',
         j = el.dataset.idx,
         min = el.min || 0,
         perc = (el.max) ? ~~(100*(el.value - min)/(el.max - min)) : el.value,
         val = perc + '% 100%';

     for(var i = 0; i < l; i++) {
       str += '.js input[type=range]:nth-of-type(' + j + ')::-' + prefs[i] + '-track{background-size:' + val + '}';
     }

     return str;
    };

    var getTipStyleStr = function(el) {
     var str = '.js input[type=range]:nth-of-type(' + el.dataset.idx + ') /deep/ #thumb:after{content:"' + el.value + '%"}';

     return str;
    };

    for(var i = 0; i < n; i++) {
     styles.push('');

     r[i].addEventListener('input', function() {
       styles[this.dataset.idx] = getTrackStyleStr(this);
       if(this.classList.contains('tip')) {
         styles[this.dataset.idx] += getTipStyleStr(this);
       }

       s.textContent = styles.join('');
     }, false);
    }
 </script>
</body>

</html>
