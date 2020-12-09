@extends('layouts.master')

@section('content')
<div class="banner-section">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="{{ url('img/banner1.jpg') }}" class="d-block w-100" alt="...">
       </div>


        <div class="carousel-caption">
            <div class="content  container">

             <div class="col-sm-12">
               <h1>Way better than a rental ship & car</h1>
               <h2>Book unforgettable cars from trusted hosts around the world</h2>
             </div>
             <div class="w-100 vehicle-filter col-sm-12">
               <div class="row">
               <ul class="nav filter-select">
                 <li class="nav-item">
                   <a class="nav-link " href="#">
                     <img width="24" src="{{ url('img/Boat.svg') }}" />
                     <p class="mb-0">Active</p></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link active" href="#">
                     <img width="26" src="{{ url('img/car.svg') }}" />
                     <p class="mb-0">Car</p></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link" href="#">
                     <img width="36" src="{{ url('img/bike.svg') }}" />
                     <p class="mb-0">Bike</p></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link " href="#">
                     <img width="28" src="{{ url('img/rvs.svg') }}" />
                    <p class="mb-0">Rvs</p></a>
                 </li>
                 <li class="nav-item">
                   <a class="nav-link " href="#">
                     <img width="24" src="{{ url('img/dotted-icon.svg') }}" />
                    <p class="mb-0">More</p></a>
                 </li>
               </ul>
             </div>
                 <div class="row">
                       <div class="vc-bg py-2">
                             <div class="d-flex ">
                                   <img class="mr-3" src="{{ url('img/location.svg') }}">

                                   <div class="w-100">
                                     <p class="mb-0 small">Destination</p>
                                     <input class="form-control bg-transparent border-0 pl-0 py-0" placeholder="City, airport, address......" type="" name="">
                                   </div>
                             </div>
                       </div>
                       <div class="vc-bg  py-2">
                             <div class="d-flex px-4 border-left border-right">
                                   <img class="mr-3" src="{{ url('img/location.svg') }}">

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
                                   <img class="mr-3" src="{{ url('img/location.svg') }}">

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

                       <button class="btn btn-primary "><img width="18px" class="mr-1" src="{{ url('img/search.svg') }}"> Search</button>

                 </div>
             </div>

           </div>
         </div>
     </div>


     <div class="social-midia">
       <ul class="nav flex-column">
         <li class="nav-item">
           <a class="nav-link" href="#"> <img src="{{ url('img/fb.svg') }}"> </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#"> <img src="{{ url('img/twitter.svg') }}"></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#"><img src="{{ url('img/instagram.svg') }}"> </a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#"> <img src="{{ url('img/feed.svg') }}"></a>
         </li>
       </ul>
     </div>

    </div>

   </div>

   <div class="browse-category">

     <div class="container">
         <div class="might-like">
             <h4 class="border-0">Top Rated Car</h4>
             <div class="row">
                 @foreach ($items as $item)
                 <div class="col-sm-4 mb-4">
                    <div class="card border-0">
                      <div class="img-card">
                      <a href="#"><img class="w-100" src="{{ url('img/likecar-3.png') }}"></a>
                      </div>
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title">{{ $item->name }}</h5>
                          <h5 class="card-title">$21/day</h5>
                        </div>
                        <div class="d-flex justify-content-between">
                          <p class="card-text">(47 trips) • {{ $item->tag }}</p>
                          <p class="card-text"><img src="{{ url('item').'/'.$item->media }}"> 4.79 rating</p>
                        </div>
                      </div>
                    </div>
                  </div>
                 @endforeach
                 {{-- <div class="col-sm-4 mb-4">
                   <div class="card border-0">
                     <div class="img-card">
                         <img class="w-100" src="{{ url('img/likecar-1.png') }}">
                     </div>
                     <div class="card-body">
                       <div class="d-flex justify-content-between">
                         <h5 class="card-title">Hyundai Elantra 2014</h5>
                         <h5 class="card-title">$21/day</h5>
                       </div>
                       <div class="d-flex justify-content-between">
                         <p class="card-text">(47 trips) • All-Star Host</p>
                         <p class="card-text"><img src="{{ url('img/star.svg') }}"> 4.79 rating</p>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-4 mb-4">
                   <div class="card border-0">
                     <div class="img-card">
                         <img class="w-100" src="{{ url('img/likecar-2.png') }}">
                     </div>
                     <div class="card-body">
                       <div class="d-flex justify-content-between">
                         <h5 class="card-title">Hyundai Elantra 2014</h5>
                         <h5 class="card-title">$21/day</h5>
                       </div>
                       <div class="d-flex justify-content-between">
                         <p class="card-text">(47 trips) • All-Star Host</p>
                         <p class="card-text"><img src="{{ url('img/star.svg') }}"> 4.79 rating</p>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-4 mb-4">
                   <div class="card border-0">
                     <div class="img-card">
                         <img class="w-100" src="{{ url('img/likecar-3.png') }}">
                     </div>
                     <div class="card-body">
                       <div class="d-flex justify-content-between">
                         <h5 class="card-title">Hyundai Elantra 2014</h5>
                         <h5 class="card-title">$21/day</h5>
                       </div>
                       <div class="d-flex justify-content-between">
                         <p class="card-text">(47 trips) • All-Star Host</p>
                         <p class="card-text"><img src="{{ url('img/star.svg') }}"> 4.79 rating</p>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-4 mb-4">
                   <div class="card border-0">
                     <div class="img-card">
                         <img class="w-100" src="{{ url('img/likecar-1.png') }}">
                     </div>
                     <div class="card-body">
                       <div class="d-flex justify-content-between">
                         <h5 class="card-title">Hyundai Elantra 2014</h5>
                         <h5 class="card-title">$21/day</h5>
                       </div>
                       <div class="d-flex justify-content-between">
                         <p class="card-text">(47 trips) • All-Star Host</p>
                         <p class="card-text"><img src="{{ url('img/star.svg') }}"> 4.79 rating</p>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-4 mb-4">
                   <div class="card border-0">
                     <div class="img-card">
                         <img class="w-100" src="{{ url('img/likecar-2.png') }}">
                     </div>
                     <div class="card-body">
                       <div class="d-flex justify-content-between">
                         <h5 class="card-title">Hyundai Elantra 2014</h5>
                         <h5 class="card-title">$21/day</h5>
                       </div>
                       <div class="d-flex justify-content-between">
                         <p class="card-text">(47 trips) • All-Star Host</p>
                         <p class="card-text"><img src="{{ url('img/star.svg') }}"> 4.79 rating</p>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-4 mb-4">
                   <div class="card border-0">
                     <div class="img-card">
                         <img class="w-100" src="{{ url('img/likecar-3.png') }}">
                     </div>
                     <div class="card-body">
                       <div class="d-flex justify-content-between">
                         <h5 class="card-title">Hyundai Elantra 2014</h5>
                         <h5 class="card-title">$21/day</h5>
                       </div>
                       <div class="d-flex justify-content-between">
                         <p class="card-text">(47 trips) • All-Star Host</p>
                         <p class="card-text"><img src="{{ url('img/star.svg') }}"> 4.79 rating</p>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-4 mb-4">
                   <div class="card border-0">
                     <div class="img-card">
                         <img class="w-100" src="{{ url('img/likecar-1.png') }}">
                     </div>
                     <div class="card-body">
                       <div class="d-flex justify-content-between">
                         <h5 class="card-title">Hyundai Elantra 2014</h5>
                         <h5 class="card-title">$21/day</h5>
                       </div>
                       <div class="d-flex justify-content-between">
                         <p class="card-text">(47 trips) • All-Star Host</p>
                         <p class="card-text"><img src="{{ url('img/star.svg') }}"> 4.79 rating</p>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-4 mb-4">
                   <div class="card border-0">
                     <div class="img-card">
                         <img class="w-100" src="{{ url('img/likecar-2.png') }}">
                     </div>
                     <div class="card-body">
                       <div class="d-flex justify-content-between">
                         <h5 class="card-title">Hyundai Elantra 2014</h5>
                         <h5 class="card-title">$21/day</h5>
                       </div>
                       <div class="d-flex justify-content-between">
                         <p class="card-text">(47 trips) • All-Star Host</p>
                         <p class="card-text"><img src="{{ url('img/star.svg') }}"> 4.79 rating</p>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-sm-4 mb-4">
                   <div class="card border-0">
                     <div class="img-card">
                         <img class="w-100" src="{{ url('img/likecar-3.png') }}">
                     </div>
                     <div class="card-body">
                       <div class="d-flex justify-content-between">
                         <h5 class="card-title">Hyundai Elantra 2014</h5>
                         <h5 class="card-title">$21/day</h5>
                       </div>
                       <div class="d-flex justify-content-between">
                         <p class="card-text">(47 trips) • All-Star Host</p>
                         <p class="card-text"><img src="{{ url('img/star.svg') }}"> 4.79 rating</p>
                       </div>
                     </div>
                   </div>
                 </div> --}}

             </div>

         </div>
     </div>
   </div>

   <div class="col-sm-12 esta-car-blog">
       <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <img width="100%" src="{{ url('img/car-bg.jpg') }}">
              </div>
              <div class="content">
                 <h2>It is a long established fact that a reader will be
                 distracted by the readable content of a page.</h2>
                 <p>
                   For those who care about driving, few experiences in life can match the joy of cruising your favorite roads in a well-loved classic car. Vintage machines have lived full lives and that history comes with character and quirks worthy of celebration.
                 </p>
                 <p>
                   If you’re looking for a special experience that brings back memories and puts a smile on your face, book a classic car rental alternative nearby on Turo.
                 </p>
              </div>
          </div>
       </div>
   </div>

   <div class="car-sharing mb-5">
       <div class="home-heading mb-4">
         <div class="col-sm-5 m-auto">
          <p class="text-primary mb-0">Skip the rental counter</p>
          <h2>Discover the world’s largest Boat & car sharing marketplace</h2>
         </div>
       </div>

       <div class="container">
          <div class="row">
           <div class="col-sm-4">
              <div class="content text-left p-0 border-0">
               <h5>Endless Options</h5>
               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
              </div>
             </div>
           <div class="col-sm-4">
              <div class="content text-left p-0 border-0">
               <h5>Endless Options</h5>
               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
              </div>
             </div>
           <div class="col-sm-4">
              <div class="content text-left p-0 border-0">
               <h5>Endless Options</h5>
               <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard </p>
              </div>
             </div>
          </div>
          <div class="mt-5 text-center">
              <button class="theme-btn">Browse Cars</button>
          </div>
       </div>
   </div>
@endsection
