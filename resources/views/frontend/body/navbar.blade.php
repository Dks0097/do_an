@php
    $setting = App\Models\SiteSetting::find(1);
@endphp



<div class="navbar-area">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{url('/')}}" class="logo">
            
            <img src="{{ asset($setting->logo) }}" class="logo-one" alt="Logo">
            <img src="{{ asset($setting->logo) }}" class="logo-two" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light ">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{ asset($setting->logo) }}" class="logo-one" alt="Logo">
                    <img src="{{ asset($setting->logo) }}" class="logo-two" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link active">
                                Trang Chủ
                               
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="about.html" class="nav-link">
                                Về Chúng tôi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                Nhà Hàng
                            </a>
                          
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('show.gallery') }}" class="nav-link">
                                Phòng Trưng Bày
                              </a>
                         
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('blog.list') }}" class="nav-link">
                                Blog
                                <i class='bx bx-chevron-down'></i>
                            </a>
                        
                        </li>
@php 
        $room = App\models\Room::latest()->get();
@endphp
                        <li class="nav-item">
                            <a href="{{route('froom.all')}}" class="nav-link">
                                Các Loại Phòng
                                <i class='bx bx-chevron-down'></i>
                            </a>
                            <ul class="dropdown-menu">
                                @foreach($room as $item)
                             
                                <li class="nav-item">
                                    <a href="{{url('/rooms/details/'.$item->id)}}" class="nav-link">
                                        {{$item['type']['name']}} 
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('contact.us') }}" class="nav-link">
                                Liên Hệ
                            </a>
                        </li>

                        <li class="nav-item-btn">
                            <a href="{{route('froom.all')}}" class="default-btn btn-bg-one border-radius-5">ow</a>
                        </li>
                    </ul>

                    <div class="nav-btn">
                        <a href="{{route('froom.all')}}" class="default-btn btn-bg-one border-radius-5">Đặt Phòng Ngay</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>