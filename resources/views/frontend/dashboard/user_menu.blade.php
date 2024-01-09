@php

$id = Auth::user()->id;
$profileData = App\Models\User::find($id);
    
@endphp



<div class="service-side-bar">                    
    <div class="services-bar-widget">
        <h3 class="title">Menu thanh bên</h3>
        <div class="side-bar-categories">
            <img src="{{(!empty($profileData->photo))  ? url('upload/user_images/'.$profileData->photo) : url('upload/no_image.jpg')  }}" 
            class="rounded mx-auto d-block" alt="Image" style="width:100px; height:100px;">
            <br>
            <center>
            <p>Xin chào <b>{{ $profileData->name}}</b>,  vui lòng chọn một trong các lựa chọn bên dưới</p>
            
             </center>
      
       
            <ul> 
                
                <li>
                    <a href="{{route('dashboard')}}"> Bảng điều khiển</a>
                </li>
                <li>
                    <a href="{{route('user.profile')}}">Xem hồ sơ</a>
                </li>
                <li>
                    <a href="{{route('user.change.password')}}">Thay đổi mật khẩu</a>
                </li>
                <li>
                    <a href="{{ route('user.booking') }}">Chi tiết đặt phòng</a>
                </li>
                <li>
                    <a href="{{route('user.logout')}}">Đăng xuất</a>
                </li>
            </ul>
        </div>
    </div>

   
</div>