@extends('frontend.main_master')
@section('main')

@php

$id = Auth::user()->id;
$profileData = App\Models\User::find($id);
    
@endphp
 <!-- Inner Banner -->
 <div class="inner-banner inner-bg6">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>Bảng điều khiển</li>
            </ul>
            <h3>Welcome {{$profileData->name}} </h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Service Details Area -->
<div class="service-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
             <div class="col-lg-3">
                <!-- Sidebar user menu -->
                @include('frontend.dashboard.user_menu')
                  <!-- End Sidebar user menu -->
            </div>


            <div class="col-lg-9">
                <div class="service-article">
                        

                        <div class="service-article-title">
                            <h2> Bảng điều khiển </h2>
                        </div>

                    <div class="service-article-content">
                        <div class="row">

                            <div class="col-md-4">
                                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Tổng số đặt phòng</div>
                                    <div   div class="card-body">
                                        <h1 class="card-title" style="font-size: 45px;">Tổng {{ count($booking) }}</h1>

                                    </div>
                                </div>                   
                            </div>

                            <div class="col-md-4">
                                <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Đang chờ đặt phòng</div>
                                                <div class="card-body">
                                                    <h1 class="card-title" style="font-size: 45px;">Đang chờ xử lý {{ count($pending) }}</h1>

                                                </div>
                                </div>                   
                            </div>


                            <div class="col-md-4">
                                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Hoàn thành đặt phòng</div>
                                    <div class="card-body">
                                        <h1 class="card-title" style="font-size: 45px;">Hoàn thành {{ count($Complete) }}</h1>
                                    </div>
                                </div>                   
                            </div>

                        
                        </div>                  
                    </div>

                        
                </div>
            </div>  
        </div>
    </div>
</div>
<!-- Service Details Area End -->

@endsection