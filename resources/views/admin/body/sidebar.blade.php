<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text"><a href="{{route('admin.dashboard')}}"> H.O.K Admin</a></h4>
        </div>
        <div class="toggle-icon ms-auto"><a href="{{route('admin.dashboard')}}"><i class='bx bx-arrow-back'></a></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin.dashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Bảng Điều Khiển</div>
            </a>
        </li>
        <li class="menu-label">Thiết Lập Trang Chủ</li>
      
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="lni lni-users"></i>
                </div>
                <div class="menu-title"> Thành Viên </div>
            </a>
            <ul>
                <li> <a href="{{route('all.team')}}"><i class='bx bx-radio-circle'></i>Tất cả Thành viên</a>
                </li>
                <li> <a href="{{route('add.team')}}"><i class='bx bx-radio-circle'></i>Thêm Thành viên</a>
                </li>
                
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-book-add"></i>
                </div>
                <div class="menu-title">Book Area - Home </div>
            </a>
            <ul>
                <li> <a href="{{route('book.area')}}"><i class='bx bx-radio-circle'></i>Update Book Area</a>
                </li>
                
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class=" bx bx-buildings"></i>
                </div>
                <div class="menu-title">Quản lý loại phòng</div>
            </a>
            <ul>
                <li> <a href="{{route('room.type.list')}}"><i class='bx bx-radio-circle'></i>Danh sách loại phòng</a>
                </li>
                
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Đánh giá của Khách hàng</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.testimonial') }}"><i class='bx bx-radio-circle'></i>Tất Cả Đánh giá</a>
                </li>

                <li> <a href="{{ route('add.testimonial') }}"><i class='bx bx-radio-circle'></i>Thêm Đánh Giá</a>
               
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Ảnh Khách sạn </div>
            </a>
            <ul>
                <li> <a href="{{ route('all.gallery') }}"><i class='bx bx-radio-circle'></i>Tất cả ảnh  </a>
                </li> 

            </ul>
        </li>


        <li class="menu-label">Quản lý các đặt phòng</li>
        
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Đặt Phòng </div>
            </a>
            <ul>
                <li> <a href="{{ route('booking.list') }}"><i class='bx bx-radio-circle'></i>Danh sách đặt phòng </a>
                </li>
                <li> <a href="{{ route('add.room.list') }}"><i class='bx bx-radio-circle'></i>Thêm chỗ đặt </a>
                </li>
                
            </ul>
        </li>
        
        

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Quản lý danh sách phòng</div>
            </a>
            <ul>
                <li> <a href="{{ route('view.room.list') }}"><i class='bx bx-radio-circle'></i>Danh sách phòng</a>
                
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Báo cáo đặt phòng </div>
            </a>
            <ul>
                <li> <a href="{{ route('booking.report') }}"><i class='bx bx-radio-circle'></i>Báo cáo đặt phòng </a>
                </li> 

            </ul>
        </li>

       
        <li class="menu-label">Blog và bình luận</li>

      
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Blog</div>
            </a>
            <ul>
                <li> <a href="{{ route('blog.category') }}"><i class='bx bx-radio-circle'></i>Loại Blog </a>
                </li>

                <li> <a href="{{ route('all.blog.post') }}"><i class='bx bx-radio-circle'></i>Tất cả bài đăng trên blog</a>
                </li>


            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Quản lý bình luận</div>
            </a>
            <ul>
                <li> <a href="{{ route('all.comment') }}"><i class='bx bx-radio-circle'></i>Tất cả bình luận </a>
                </li>




            </ul>
        </li>
        <li class="menu-label">Nhà hàng và món ăn</li>

      
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Nhà hàng</div>
            </a>
            <ul>
                <li> <a href="{{ route('res.category') }}"><i class='bx bx-radio-circle'></i>Nhà hàng Category </a>
                </li>

                <li> <a href="{{ route('all.res.product') }}"><i class='bx bx-radio-circle'></i>Món ăn</a>
                </li>


            </ul>
        </li>
        <li class="menu-label">Thiết lập Mail </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
            <div class="menu-title"> Cài Đặt Email </div>
            </a>
        <ul>
            <li> <a href="{{ route('smtp.setting') }}"><i class='bx bx-radio-circle'></i> Cài đặt SMTP </a>
            </li>
            <li> <a href="{{ route('site.setting') }}"><i class='bx bx-radio-circle'></i>Cài đặt Site</a>
            </li>
        </ul>
        </li>
    
        <li class="menu-label">Khác</li>
        <li class="menu-label">Vai trò & Quyền </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Vai trò & Quyền </div>
            </a>
            <ul>
                <li> <a href="{{ route('all.permission') }}"><i class='bx bx-radio-circle'></i>Tất cả quyền </a>
                </li> 
                <li> <a href="{{ route('all.roles') }}"><i class='bx bx-radio-circle'></i>Tất cả vai trò </a>
                </li> 
                <li> <a href="{{ route('add.roles.permission') }}"><i class='bx bx-radio-circle'></i>Vai trò trong quyền </a>
                </li>
                <li> <a href="{{ route('all.roles.permission') }}"><i class='bx bx-radio-circle'></i>Tất cả vai trò trong sự cho phép </a>
                </li>
              
        
        

            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Quản lý người dùng quản trị </div>
            </a>
            <ul>
                <li> <a href="{{ route('all.admin') }}"><i class='bx bx-radio-circle'></i>Tất cả quản trị viên </a>
                </li> 
                <li> <a href="{{ route('add.admin') }}"><i class='bx bx-radio-circle'></i>Thêm quản trị viên </a>
                </li> 



            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
                </div>
                <div class="menu-title">Tin nhắn liên hệ </div>
            </a>
            <ul>
                <li> <a href="{{ route('contact.message') }}"><i class='bx bx-radio-circle'></i>Tin nhắn liên hệ </a>
                </li> 

            </ul>
        </li>


        
        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Hỗ trợt</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>