@extends('layouts.master')

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
            @foreach ($categories as $category)
                <div class="p-3">
                    <a href="{{ route('category',$category->id) }}">
                        <div class="content">
                            <img width="100%" src="{{ url('category').'/'.$category->media }}">
                            <h4> {{$category->name}} </h4>
                        </div>
                    </a>
                </div>
            @endforeach
            {{-- <div class="p-3">
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
            </div> --}}


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
@endsection
