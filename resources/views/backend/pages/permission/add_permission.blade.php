@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3"> </div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Thêm quyền</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">

    <div class="col-lg-12">

        <div class="card">

            <div class="card-body p-4">

       <form  class="row g-3" action="{{ route('store.permission') }}" method="post" enctype="multipart/form-data">
         @csrf



    <div class="col-md-6">
        <label for="input1" class="form-label">Tên quyền </label>
        <input type="text" name="name" class="form-control"   >

    </div>

    <div class="col-md-6">
        <label for="input1" class="form-label">Nhóm quyền</label>
        <select name="guard_name" class="form-select mb-3" aria-label="Default select example">
            <option selected="">Chọn nhóm </option>
            <option value="Team">Thành viên </option>
            <option value="Book Area">Khu vực đặt</option>
            <option value="Manage Room">Quản lý phòng</option>
            <option value="Booking">Đặt trước</option>
            <option value="RoomList">Danh sách phòng</option>
            <option value="Setting">Cài đặt</option>
            <option value="Tesimonial">Đánh giá</option>
            <option value="Blog">Blog</option>
            <option value="Manage Comment">Quản lý bình luận</option>
            <option value="Booking Report">Báo cáo đặt phòng </option>
            <option value="Hotel Gallery ">Ảnh khách sạn </option>
            <option value="Contact Message ">Tin nhắn liên hệ </option>
            <option value="Role and Permission">Vai trò và quyền </option>
        </select>

    </div>



                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Lưu thay đổi </button>

                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
						</div>
					</div>
				</div>
			</div>




@endsection