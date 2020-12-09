@extends('layouts.app')

@section('content')
<div class="banner-section">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="img/banner.jpg" class="d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
         <img src="img/banner.jpg" class="d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
         <img src="img/banner.jpg" class="d-block w-100" alt="...">
       </div>

        <div class="carousel-caption">
            <div class="content  container">

             <div class="col-sm-6">
               <h1>Way better than a rental ship & car</h1>
               <h2>Book unforgettable cars from trusted hosts around the world</h2>
              <!--  <div class="d-flex btns mb-1">
                  <button class="btn btn-outline-light mr-3">Starting $200</button>
                  <button type="button" class="btn btn-warning">BUY NOW</button>

               </div>  -->
               <!-- <span class="line-vertic mt-4"></span> -->
             </div>
             <div class="w-100 vehicle-filter col-sm-12">
               <div class="row">
               <ul class="nav filter-select">
                 <li class="nav-item">
                   <a class="nav-link " href="#">
                     <img width="24" src="img/Boat.svg" />
                     <p class="mb-0">Active</p></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link active" href="#">
                     <img width="26" src="img/car.svg" />
                     <p class="mb-0">Car</p></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#">
                     <img width="36" src="img/bike.svg" />
                     <p class="mb-0">Bike</p></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link " href="#">
                     <img width="28" src="img/rvs.svg" />
                    <p class="mb-0">Rvs</p></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link " href="#">
                     <img width="24" src="img/dotted-icon.svg" />
                    <p class="mb-0">More</p></a>
                 </li>
               </ul>
             </div>
                 <div class="row">
                       <div class="vc-bg py-2">
                             <div class="d-flex ">
                                   <img class="mr-3" src="img/location.svg">

                                   <div class="w-100">
                                     <p class="mb-0 small">Destination</p>
                                     <input class="form-control bg-transparent border-0 pl-0 py-0" placeholder="City, airport, address......" type="" name="">
                                   </div>
                             </div>
                       </div>
                       <div class="vc-bg  py-2">
                             <div class="d-flex px-4 border-left border-right">
                                   <img class="mr-3" src="img/location.svg">

                                  <div class="w-100">

                                     <p class="mb-0 small">From</p>
                                     <div class="d-flex">
                                        <select class="pl-0 py-0 form-control bg-transparent border-0">
                                         <option>13-9-2020</option>
                                        </select>
                                        <select class="pl-0  py-0 form-control bg-transparent border-0">
                                          <option>10:00 AM</option>
                                        </select>
                                     </div>

                                  </div>
                             </div>
                       </div>
                       <div class="vc-bg  py-2">
                             <div class="d-flex pr-4">
                                   <img class="mr-3" src="img/location.svg">

                                   <div class="w-100">
                                     <p class="mb-0 small">Untill</p>
                                     <div class="d-flex">
                                     <select class="pl-0  py-0 form-control bg-transparent border-0">
                                     <option>13-9-2020</option>
                                     </select>
                                     <select class="pl-0  py-0 form-control bg-transparent border-0">
                                      <option>10:00 AM</option>
                                     </select>
                                     </div>

                                   </div>
                             </div>
                       </div>

                       <button class="btn btn-primary "><img width="18px" class="mr-1" src="img/search.svg"> Search</button>

                 </div>
             </div>

           </div>
         </div>
     </div>
     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon" aria-hidden="true"></span>
       <span class="sr-only">Previous</span>
     </a>
     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
       <span class="sr-only">Next</span>
     </a>
     <div class="social-midia">
       <ul class="nav flex-column">
         <li class="nav-item">
           <a class="nav-link" href="#"> <img src="img/fb.svg"> </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#"> <img src="img/twitter.svg"></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#"><img src="img/instagram.svg"> </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#"> <img src="img/feed.svg"></a>
         </li>
       </ul>
     </div>

    </div>
</div>

<div class="browse-category">
    <div class="home-heading">
        <h2>Browse by Category</h2>
        <p>Tempor incididunt labore dolore magna alique</p>
        <img src="img/line-b-img.png">
    </div>
    <div class="container">
        <section class="regular slider">
            <div class="p-3">
                <div class="content">
                <img width="100%" src="img/car.png">
                <h4> Car </h4>

                </div>
            </div>

            <div class="p-3">
                <div class="content">
                <img width="100%" src="img/boot.png">
                <h4> Boat </h4>

                </div>
            </div>
            <div class="p-3">
                <div class="content">
                <img width="100%" src="img/rvs.png">
                <h4> Rvs </h4>

                </div>
            </div>
            <div class="p-3">
                <div class="content">
                <img width="100%" src="img/bike.png">
                <h4> Bike </h4>

                </div>
            </div>
            <div class="p-3">
                <div class="content">
                <img width="100%" src="img/car2.png">
                <h4> Car </h4>

                </div>
            </div>
            <div class="p-3">
            <div class="content">
                <img width="100%" src="img/boot.png">
                <h4> Boat </h4>

            </div>
            </div>

            <div class="p-3">
            <div class="content">
                <img width="100%" src="img/car2.png">
                <h4> Boat </h4>

            </div>
            </div>


        </section>
    </div>
    <div class="container">
        <div class="might-like">
            <h4 class="">You might like</h4>
            <div class="row">
                <div class="col-sm-4">
                <div class="card border-0">
                    <div class="img-card">
                        <img class="w-100" src="img/likecar-1.png">
                    </div>
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Hyundai Elantra 2014</h5>
                        <h5 class="card-title">$21/day</h5>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">(47 trips) • All-Star Host</p>
                        <p class="card-text"><img src="img/star.svg"> 4.79 rating</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-4">
                <div class="card border-0">
                    <div class="img-card">
                        <img class="w-100" src="img/likecar-2.png">
                    </div>
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Hyundai Elantra 2014</h5>
                        <h5 class="card-title">$21/day</h5>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">(47 trips) • All-Star Host</p>
                        <p class="card-text"><img src="img/star.svg"> 4.79 rating</p>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-4">
                <div class="card border-0">
                    <div class="img-card">
                        <img class="w-100" src="img/likecar-3.png">
                    </div>
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">Hyundai Elantra 2014</h5>
                        <h5 class="card-title">$21/day</h5>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="card-text">(47 trips) • All-Star Host</p>
                        <p class="card-text"><img src="img/star.svg"> 4.79 rating</p>
                    </div>
                    </div>
                </div>
                </div>

            </div>
            <div class="mt-4">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card border-0">
                    <div class="img-card">
                        <img class="w-100" src="img/ship.png">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <h5 class="card-title">Hyundai Elantra 2014</h5>
                        <h5 class="card-title">$21/day</h5>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="card-text">(47 trips) • All-Star Host</p>
                        <p class="card-text"><img src="img/star.svg"> 4.79 rating</p>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card border-0">
                    <div class="img-card">
                        <img class="w-100" src="img/likecar-5.png">
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                        <h5 class="card-title">Hyundai Elantra 2014</h5>
                        <h5 class="card-title">$21/day</h5>
                        </div>
                        <div class="d-flex justify-content-between">
                        <p class="card-text">(47 trips) • All-Star Host</p>
                        <p class="card-text"><img src="img/star.svg"> 4.79 rating</p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="browse-category pt-0">
    <div class="home-heading">
        <h2>Top destinations</h2>
        <p class="col-sm-4 m-auto">Choose from thousands of cars in over 5,500 cities across
        the US, Canada and the UK.</p>
    </div>
    <div class="container">
        <section class="destinations slider">
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
        </div>

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
                    <a class="mr-2" href="#"><img width="140" src="img/iphone-btn.png"></a>
                    <a class="" href="#"><img width="140" src="img/googleplay-btn.png"></a>
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
                        <div class="endless-content"> <span><img src="img/endless.svg" alt="Endless" /></span> </div>
                        <h5>Endless Options</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="content">
                        <div class="endless-content"> <span><img src="img/endless.svg" alt="Endless" /></span> </div>
                        <h5>Endless Options</h5>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
                    </div>
            </div>
            <div class="col-sm-4">
                    <div class="content">
                        <div class="endless-content"> <span><img src="img/endless.svg" alt="Endless" /></span> </div>
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
               <img width="100%" src="img/earn-extra.svg" alt="" />
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
            <span aria-hidden="true"><img width="18px" src="img/cross.svg" /></span>
            </button>

        <div class="row">
                <div class="col-sm-5">
                <div class="section1 position-relative">
                    <div class="smt-cr">
                        <img width="70" src="img/smt-cr.svg">
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
                        <img width="70" src="img/smt-blue.svg">
                    </div>
                    <div class=""><h2 class="text-center font-weight-bold mb-5  position-relative">Sign in</h2></div>
                    <div class="">
                        <form>
                            <div class="form-group mb-4">
                                <input placeholder="Enter your email address" class="form-control" type="" name="">
                            </div>
                            <div class="form-group mb-4">
                                <input placeholder="Enter your Password" class="form-control" type="" name="">
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
                                <a href=""><img src="img/facebook.svg"></a>
                                <a href=""><img src="img/twitter2.svg"></a>
                                <a href=""><img src="img/gmail.svg"></a>
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
           <span aria-hidden="true"><img width="18px" src="img/cross.svg" /></span>
           </button>

       <div class="row">
               <div class="col-sm-5">
               <div class="section1 position-relative">
                   <div class="smt-cr">
                       <img width="70" src="img/smt-cr.svg">
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
                       <img width="70" src="img/smt-blue.svg">
                   </div>
                   <div class=""><h2 class="text-center font-weight-bold mb-5  position-relative">Sign Up</h2></div>
                   <div class="">
                       <form>

                           <div class="form-group mb-4 row">
                               <div class="col-sm-6">  <input placeholder="Enter first name" class="form-control" type="" name=""></div>
                               <div class="col-sm-6">  <input placeholder="Enter last name" class="form-control" type="" name=""></div>
                           </div>
                           <div class="form-group mb-4">
                               <input placeholder="Enter email address" class="form-control" type="" name="">
                           </div>
                           <div class="form-group mb-4 position-relative">
                               <input placeholder="Enter password" class="form-control" type="" name="">
                               <i class="fa fa-eye-slash"></i>
                           </div>
                           <div class="form-group mb-4 position-relative">
                               <input placeholder="Confirm your password" class="form-control" type="" name="">
                               <i class="fa fa-eye"></i>
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
            <span aria-hidden="true"><img width="18px" src="img/cross.svg" /></span>
            </button>

        <div class="row">

                <div class="col-sm-12">
                    <div class="section2 position-relative">
                    <div class="smt-blue">
                        <img width="70" src="img/smt-blue.svg">
                    </div>
                    <div class="smt-cr-left">
                        <img width="70" src="img/smt-cr-left.svg">
                    </div>
                    <div class="text-center">
                        <img hidden="hidden" width="60" class="mb-2" src="img/checkmark-orange.svg">
                        <h2 class="text-center font-weight-bold mb-5  position-relative">Reset Password</h2></div>
                    <div class="">
                        <form>


                            <div class="form-group mb-4">
                                <input placeholder="Enter email address" class="form-control" type="" name="">
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

@endsection
