@extends('admin.admin_dashboard')
@section('admin') 

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        
        <div class="ms-auto">
            <div class="btn-group">
              
                
            </div>
        </div>
    </div>

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
       
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Danh sách loại phòng</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('add.room.type')}}" class="btn btn-primary ">Thêm loại phòng</a>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ảnh</th>
                            <th>Tên Phòng</th>
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allData as $key => $item)
                        @php
                            $rooms = App\Models\Room::where('roomtype_id', $item->id)->get();                            
                        @endphp

                        <tr>
                            <td>{{$key+1}}</td>
                            <td> <img src="{{ (!empty($item->room->image)) ? url('upload/roomimg/'.$item->room->image) : url('upload/no_image.jpg') }}" alt="" style="width: 50px; height:30px;"></td>
                            <td>{{$item->name}}</td>
                            <td>
                               @foreach($rooms as $roo)
                          

                            <i><a href="{{route('edit.room',$roo->id)}}" class="btn btn-warning  bx bx-edit"></a></i><i></i>
                            <i><a href="{{route('delete.room',$roo->id)}}" class="btn btn-danger  bx bx-trash " id="delete"></a></i>        
                            @endforeach     
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