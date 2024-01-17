@extends('admin.admin_dashboard')
@section('admin') 

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Thành Viên</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Tất cả Thành viên </li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
               
                <a href="{{route('add.team')}}" class="btn btn-primary">Thêm thành viên mới</a>
                
            </div>
        </div>
    </div>
    
    <h6 class="mb-0 text-uppercase">Tất cả thành viên </h6>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh</th>
                            <th>Tên</th>
                            <th>Chức vụ</th>
                            <th>Facebook</th>
                            <th>Instagram</th>
                            <th>Twitter</th>
                            <th>Linkedin</th>
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($team as $key => $item)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><img src="{{asset($item->image)}}" alt="" style="width:70px; height:40px;" /></td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->position}}</td>
                            <td>{{$item->facebook}}</td>
                            <td>{{$item->instagram}}</td>
                            <td>{{$item->twitter}}</td>
                            <td>{{$item->linkedin}}</td>
                            <td>
                            <i><a href="{{route('edit.team',$item->id)}}" class="btn btn-warning radius-30 bx bx-edit"></a></i>
                            <i><a href="{{route('delete.team',$item->id)}}" class="btn btn-danger radius-30 bx bx-trash " id="delete"></a></i>        
                            </td>
                            
                        </tr>

                        @endforeach
                        
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</div>

@endsection