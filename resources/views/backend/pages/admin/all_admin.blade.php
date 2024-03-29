@extends('admin.admin_dashboard')
@section('admin') 

<div class="page-content"> 
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tất cả người dùng quản trị</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{ route('add.admin') }}" class="btn btn-primary px-5">Thêm người dùng quản trị</a>  
            </div>


        </div>
    </div>
    <!--end breadcrumb-->



    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh </th>
                            <th>Tên </th> 
                            <th>Email </th>
                            <th>Số điện thoại </th>
                            <th>Vai trò </th> 
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($alladmin as $key=> $item ) 
        <tr>
            <td>{{ $key+1 }}</td>
            <td> <img src="{{ (!empty($item->photo)) ? url('upload/admin_images/'.$item->photo) : url('upload/no_image.jpg') }}" alt="" style="width: 70px; height:40px;"> </td>  
            <td>{{ $item->name }}</td> 
            <td>{{ $item->email }}</td> 
            <td>{{ $item->phone }}</td> 
            <td>
            @if ($item->roles)
                @foreach ($item->roles as $role)
                    <span class="badge badge-pill bg-danger">{{ $role->name }}</span>
                @endforeach
                @else
                <span>no roles assigned</span>
            @endif
   
            </td>  
            <td>
<a href="{{ route('edit.admin',$item->id) }}" class="btn btn-warning px-3 radius-30"> Điều chỉnh</a>
<a href="{{ route('delete.admin',$item->id) }}" class="btn btn-danger px-3 radius-30" id="delete"> Xóa</a>

            </td>
        </tr>
                        @endforeach 

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <hr/>

</div>




@endsection