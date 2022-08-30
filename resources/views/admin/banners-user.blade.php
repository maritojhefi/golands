@extends('master')
@section('content')
    @push('header')
    @endpush

  
        <div class="col-10">
            <div class="card">
                <h5 class="card-header">Banners</h5>
                <div class="card-body p-0 ">
                    <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators4" data-slide-to="1" class=""></li>
                            <li data-target="#carouselExampleIndicators4" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block" style="width:100%" src="{{asset('images/f1.jpg')}}" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <a href="{{ route('admin.download.banner',1)}}" class="btn btn-primary btn-rounded"><h5 class="  text-white">Download Banner</h5></a>
                                    <a href="#" class="btn btn-warning btn-rounded"><h5 class="  text-white">Copy link</h5></a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" style="width:100%" src="{{asset('images/f2.jpeg')}}" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <a href="{{ route('admin.download.banner',2)}}"  class="btn btn-primary btn-rounded"><h5 class="  text-white">Download Banner</h5></a>
                                    <a href="#" class="btn btn-warning btn-rounded"><h5 class="  text-white">Copy link</h5></a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block" style="width:100%" src="{{asset('images/f3.jpg')}}" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <a href="{{ route('admin.download.banner',3)}}"  class="btn btn-primary btn-rounded"><h5 class="  text-white">Download Banner</h5></a>
                                    <a href="#" class="btn btn-warning btn-rounded"><h5 class="  text-white">Copy link</h5></a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators4" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators4" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
   
@endsection
