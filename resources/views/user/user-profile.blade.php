@extends('layouts.master')
@section('content')

<div class="vender-profile edit_Profile">
    <form method="POST" action="{{ route('user.update') }}">
        @csrf
        <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="profile-view">
                    <div class="text-center mb-5">
                    <div class="d-inline-block position-relative">
                        <img class="border-radius" width="177px" height="177px" src="{{ url('img/default-img.png') }} " />
                        <!-- <span class="reward-ribbon"><img src="img/reward-ribbon.svg"></span> -->
                        <p class="mt-1"><a href="" class="text-dark"><u> Update Photo</u> </a></p>
                    </div>
                    </div>
                    <div class="">
                    <div class="d-flex">
                        <img src="{{ url('img/Identity.svg') }}">
                        <p class="font-weight-bold mb-0 ml-2">Identity verified</p>
                    </div>
                    <div class="d-flex my-3 justify-content-between align-items-center">
                        <div class="d-flex">
                            <img src="{{ url('img/star-outline.svg') }}">
                            <p class="font-weight-bold mb-0 ml-2">4 reviews</p>
                        </div>
                        <div class=""><a class="btn-light btn btn-sm shadow px-3 py-1 border-radius"> <img src="{{ url('img/star.svg') }}"> 4.8 </a></div>
                    </div>
                    </div>
                    <div class="mt-4">
                    <h6 class="mb-3">VERIFIED INFO</h6>
                    <div class="d-flex justify-content-between">
                        <p class="mb-0 font-weight-bold">Approved to drive</p>
                        <a class="text-primary"> <u> Verify ID </u> </a>
                    </div>
                    <div class="d-flex justify-content-between my-3">
                        <p class="mb-0 font-weight-bold">Email address</p>
                        <span><img src="{{ url('img/checkmark.svg') }}"></span>
                    </div>
                    <div class="d-flex justify-content-between mb-3 ">
                        <p class="mb-0 font-weight-bold">Phone number</p>
                        <span><img src="{{ url('img/checkmark.svg') }}"></span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 font-weight-bold">Facebook</p>
                        <span><img src="{{ url('img/checkmark.svg') }}"></span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 font-weight-bold">Twitter</p>
                        <a class="text-primary"> <u> Connect account </u> </a>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 font-weight-bold">Instagram</p>
                        <a class="text-primary"> <u> Connect account </u> </a>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 font-weight-bold">Phone number</p>
                        <a class="text-primary"> <u> Connect account </u> </a>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <p class="mb-0 font-weight-bold">RSS Feed</p>
                        <a class="text-primary"> <u> Connect account </u> </a>
                    </div>
                    </div>
                    <!-- <div class="mt-4">
                    <h6 class="mb-3">HOST STATS</h6>
                    <div class="d-flex justify-content-between">
                        <p class="mb-0 font-weight-bold">Response rate</p>
                        <span class="font-weight-bold">100%</span>
                    </div>
                    <div class="d-flex justify-content-between my-3">
                        <p class="mb-0 font-weight-bold">Response time</p>
                        <span class="font-weight-bold">2 Min</span>
                    </div>
                    </div> -->
                </div>
            </div>
            <div class="col-sm-7 ml-auto">
                <div class="d-flex justify-content-between">
                    <div class="">
                    <h4 class="h2 font-weight mb-0">Hi, I’m {{ Auth::user()->name }} {{ Auth::user()->last_name }}</h4>
                    <p class="small text-muted">26 trips • Joined {{ date('M Y',strtotime(Auth::user()->created_at)) }}</p>
                    </div>
                </div>
                <div class="mb-3">
                    <h6 class="mb-2">About</h6>
                    <textarea name="about" class="form-control" rows="6">{{ Auth::user()->about }}</textarea>
                </div>
                <div class="mb-3">
                    <h6 class="mb-2">Location</h6>
                    <textarea name="location" class="form-control" rows="2">{{ Auth::user()->location }}</textarea>
                </div>
                <div class="mb-3">
                    <h6 class="mb-2">Languages I Speak</h6>
                    <div data-tags-input-name="taggone" id="tag">
                        @if(Auth::user()->language != "")
                            @foreach (json_decode(Auth::user()->language) as $value)
                            {{ $loop->first ? '' : ', ' }}
                            <span class="nice">{{ $value }}</span>
                            @endforeach
                        @else
                            {{"Hindi"}}
                        @endif
                    </div>
                </div>
                <div class="mb-3">
                    {{-- <button class="btn-outline-primary btn px-4">Add more</button> --}}
                </div>
                <div class="mb-3">
                    <h6 class="mb-2">Work</h6>
                    <textarea name="work" class="form-control" rows="1">{{ Auth::user()->work }}</textarea>
                    <div class="mt-4 d-flex flex-row-reverse">
                    <button class="btn-outline-primary btn px-4 ml-2 border-radius">Cancel</button>
                    <button class="btn-primary btn px-4 border-radius">Save</button>
                    </div>
                </div>
                <div class="profile-revews mt-5">
                    <h6 class="text-uppercase d-flex align-items-center border-top pt-5">
                    <img class="mr-2" src="{{ url('img/star-gr.svg') }}"> Reviews (0)
                    </h6>
                    <p class="small">There are no Reviews yet</p>
                    <div>
                    <p class="d-flex align-items-center border-top py-5 mt-5 border-bottom"><a href="" class="text-dark"> <u>Reviews by you </u> </a> </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </form>
</div>

@endsection
