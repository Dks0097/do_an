@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<div class="page-content">
	
				<div class="container">
					<div class="main-body">
						<div class="row">

                            <div class="card">
                                <div class="card-body">
                                    <ul class="nav nav-tabs nav-primary" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon"><i class="bx bx-home font-18 me-1"></i>
                                                    </div>
                                                    <div class="tab-title">Quản lý phòng </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" data-bs-toggle="tab" href="#primaryprofile" role="tab" aria-selected="false" tabindex="-1">
                                                <div class="d-flex align-items-center">
                                                    <div class="tab-icon"><i class="bx bx-user-pin font-18 me-1"></i>
                                                    </div>
                                                    <div class="tab-title">số phòng</div>
                                                </div>
                                            </a>
                                        </li>
                            
                                    </ul>
                                    <div class="tab-content py-3">
                                        <div class="tab-pane fade active show" id="primaryhome" role="tabpanel">
                            
                                            <div class="col-xl-12 mx-auto">
                            
                                                <div class="card">
                                                    <div class="card-body p-4">
                                                        <h5 class="mb-4">Cập nhật phòng</h5>
                                <form class="row g-3 " action="{{route('update.room', $editData->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md-4">
                                        <label for="input1" class="form-label">Tên phòng</label>
                                        <input type="text" name="roomtype_id" class="form-control" id="input1" value="{{$editData['type']['name']}}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="input2" class="form-label">Tổng số người lớn</label>
                                        <input type="text" name="total_adult" class="form-control" id="input2" value="{{$editData->total_adult}}">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="input2" class="form-label">Tổng số trẻ em</label>
                                        <input type="text" name="total_child" class="form-control" id="input2" value="{{$editData->total_child}}">
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label for="input3" class="form-label">Hình ảnh chính</label>
                                        <input type="file"  name="image" class="form-control" id="image"><br>
                                        <img id="showImage" src="{{ (!empty($editData->image)) ? url('upload/roomimg/'.$editData->image) : url('upload/no_image.jpg') }}" alt="Admin" class=" bg-primary" width="70" height="60">
                
                                    </div>




                                    <div class="col-md-6">
                                        <label for="input4" class="form-label">Hình ảnh thư viện</label>
                                        <input type="file"  name="multi_img[]" class="form-control" multiple id="multiImg" accept="image/jpeg, image/jpg, image/gif, image/png">

                                        @foreach ($multiimgs as $item)
                                        
                                        <img src="{{ (!empty($item->multi_img)) ? url('upload/roomimg/multi_img/'.$item->multi_img) : url('upload/no_image.jpg') }}" alt="Admin" class=" bg-primary" width="60">
                                        
                                        <a href="{{route('multi.image.delete', $item->id)}}" ><i class="lni lni-close"></i></a>

                                        @endforeach
                                        
                                           
                                        </div>
                                    

                                    <div class="col-md-3">
                                        <label for="input1" class="form-label">Giá phòng</label>
                                        <input type="text" name="price" class="form-control" id="input1" value="{{$editData->price}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="input2" class="form-label">kích thước </label>
                                        <input type="text" name="size" class="form-control" id="input2" value="{{$editData->size}}">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="input2" class="form-label">Giảm giá (%)</label>
                                        <input type="text" name="discount" class="form-control" id="input2" value="{{$editData->discount}}">
                                    </div> 
                                    <div class="col-md-3">
                                        <label for="input2" class="form-label">Công suất phòng</label>
                                        <input type="text" name="room_capacity" class="form-control" id="input2" value="{{$editData->room_capacity}}">
                                    </div>

                                    <div class="col-md-6">
                                       
                                        
                                        <div class="col-md-12">
                                            <label for="input7" class="form-label">View phòng</label>
                                            <select name="view" id="input7" class="form-select">
                                                <option selected="">chọn...</option>
                                                <option value="hướng biển" {{$editData->view == 'hướng biển'?'selected':''}}>hướng biển</option>
                                                <option value="hướng đồi" {{$editData->view == 'hướng đồi'?'selected':''}}>hướng đồi</option>
                                            
                                            </select>
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-6">
                                       
                                       
                                        <div class="col-md-12">
                                            <label for="input7" class="form-label">Kiểu giường</label>
                                            <select name="bed_style" id="input7" class="form-select">
                                                <option selected="">Chọn...</option>
                                                <option value="giường nữ hoàng" {{$editData->bed_style == 'giường nữ hoàng'?'selected':''}}>giường nữ hoàng</option>
                                                <option value="giường đôi" {{$editData->bed_style == 'giường đôi'?'selected':''}}>giường đôi</option>
                                                <option value="giường vua" {{$editData->bed_style == 'giường vua'?'selected':''}}>giường vua</option>
                                            </select>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <label for="input11" class="form-label">miêu tả ngắn</label>
                                        <textarea name="short_desc" class="form-control" id="input11" placeholder="Address ..." rows="3">{{ $editData->short_desc }}</textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="input11" class="form-label"> miêu tả</label>
                                        <textarea name="description" class="form-control" id="myeditorinstance"> {!! $editData->description !!} </textarea>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12 mb-3">
                                           @forelse ($basic_facility as $item)
                                           <div class="basic_facility_section_remove" id="basic_facility_section_remove">
                                              <div class="row add_item">
                                                 <div class="col-md-8">
                                                    <label for="facility_name" class="form-label"> Tiện nghi phòng </label>
                                                    <select name="facility_name[]" id="facility_name" class="form-control">
                                                          <option value="">Chọn tiện nghi</option>
                                                          <option value="Complimentary Breakfast" {{$item->facility_name == 'Complimentary Breakfast'?'selected':''}}>Complimentary Breakfast</option>
                                         <option value="Tivi LED 32/42 inch"  {{$item->facility_name == 'Tivi LED 32/42 inch'?'selected':''}}> Tivi LED 32/42 inch</option>
                                       
                                        <option value="Thiết bị báo khói"  {{$item->facility_name == 'Thiết bị báo khói'?'selected':''}}>Thiết bị báo khói</option>
                                       
                                        <option value="quầy bar nhỏ" {{$item->facility_name == 'Complimentary Breakfast'?'selected':''}}> quầy bar nhỏ</option>
                                       
                                        <option value="Bàn làm việc"  {{$item->facility_name == 'Bàn làm việc'?'selected':''}}>Bàn làm việc</option>
                                       
                                        <option value="Miễn phí Wi-Fi" {{$item->facility_name == 'Miễn phí Wi-Fi'?'selected':''}}>Miễn phí Wi-Fi</option>
                                       
                                        <option value="Hộp an toàn" {{$item->facility_name == 'Hộp an toàn'?'selected':''}} >Hộp an toàn</option>
                                       
                                        <option value="Tắm mưa" {{$item->facility_name == 'Tắm mưa'?'selected':''}} >Tắm mưa</option>
                                       
                                        <option value="dép đi trong nhà" {{$item->facility_name == 'dép đi trong nhà'?'selected':''}} >dép đi trong nhà</option>
                                       
                                        <option value="máy sấy tóc" {{$item->facility_name == 'máy sấy tóc'?'selected':''}} >máy sấy tóc</option>
                                       
                                        <option value="Dịch vụ đánh thức"  {{$item->facility_name == 'Dịch vụ đánh thức'?'selected':''}}>Dịch vụ đánh thức</option>
                                       
                                        <option value="Giặt & Giặt khô" {{$item->facility_name == 'Giặt & Giặt khô'?'selected':''}} >Giặt & Giặt khô</option>
                                        
                                        <option value="Khóa cửa điện tử"  {{$item->facility_name == 'Khóa cửa điện tử'?'selected':''}}>Khóa cửa điện tử</option> 
                                                    </select>
                                                 </div>
                                                 <div class="col-md-4">
                                                    <div class="form-group" style="padding-top: 30px;">
                                                          <a class="btn btn-success btn-sm addeventmore"><i class="lni lni-circle-plus"></i></a>
                                                          <span class="btn btn-danger btn-sm removeeventmore"><i class="lni lni-circle-minus"></i></span>
                                                    </div>
                                                 </div>
                                              </div>
                                           </div>
                                       
                                           @empty
                                       
                                                <div class="basic_facility_section_remove" id="basic_facility_section_remove">
                                                    <div class="row add_item">
                                                        <div class="col-md-6">
                                                            <label for="basic_facility_name" class="form-label">Room Facilities </label>
                                                            <select name="facility_name[]" id="basic_facility_name" class="form-control">
                                        <option value="">Select Facility</option>
                                        <option value="Complimentary Breakfast">Complimentary Breakfast</option>
                                        <option value="Tivi LED 32/42 inch" > Tivi LED 32/42 inch</option>
                                        <option value="Thiết bị báo khói" >Thiết bị báo khói</option>
                                        <option value="quầy bar nhỏ"> quầy bar nhỏ</option>
                                        <option value="Bàn làm việc" >Bàn làm việc</option>
                                        <option value="Miễn phí Wi-Fi">Miễn phí Wi-Fi</option>
                                        <option value="Hộp an toàn" >Hộp an toàn</option>
                                        <option value="Tắm mưa" >Tắm mưa</option>
                                        <option value="dép đi trong nhà" >dép đi trong nhà</option>
                                        <option value="máy sấy tóc" >máy sấy tóc</option>
                                        <option value="Dịch vụ đánh thức" >Dịch vụ đánh thức</option>
                                        <option value="Giặt & Giặt khô" >Giặt & Giặt khô</option>
                                        <option value="Khóa cửa điện tử" >Khóa cửa điện tử</option> 
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group" style="padding-top: 30px;">
                                                                <span class="btn btn-success btn-sm addeventmore"><i class="lni lni-circle-plus"></i></span>
                                                                <span class="btn btn-danger btn-sm removeeventmore"><i class="lni lni-circle-minus"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                       
                                           @endforelse
                                       
                                       
                                       
                                                            </div> 
                                                         </div>
                                                         <br>
                                       
                                       













                                
                                    
                                    <div class="col-md-12">
                                        <div class="d-md-flex d-grid align-items-center gap-3">
                                            <button type="submit" class="btn btn-primary px-4">Save Changes</button>
                                           
                                        </div>
                                    </div>
                                </form>
                                                    </div>
                                                </div>
                            
                                            </div>
                            
                            
                            
                            
                            
                                        </div>
                                         {{-- // End primaryhome --}}
                            
                        
                            
                            
        
                    <div class="tab-pane fade" id="primaryprofile" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <a class="card-title btn btn-primary float-right" onclick="addRoomNo()" id="addRoomNo">
                                    <i class="lni lni-plus">Add New</i>
                                </a>

                            <div class="roomnoHide" id="roomnoHide">
                                <form action="{{route('store.room.number', $editData->id)}}" method="POST">
                                    @csrf

                                    <input type="hidden" name="room_type_id" value="{{$editData->roomtype_id}}">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="input2" class="form-label">Room No</label>
                                            <input type="text" name="room_no" class="form-control" id="input2">
                                        </div>

                                        <div class="col-md-4">
                                            <div class="col-md-12">
                                                <label for="input7" class="form-label">Status</label>
                                                <select name="status" id="input7" class="form-select">
                                                    <option selected="">Select Status...</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Inactive">Inactive</option>
                                                
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" class="btn btn-success" style="margin-top: 28px;" >Save</button>
                                        </div>

                                    </div>
                                </form>

                            </div>

                            <table class="table mb-0 table-striped" id="roomview">
                                <thead>
                                    <tr>
                                        <th scope="col">Room Number</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allroomNo as $item)
                                    <tr>
                                        
                    
                                        <td>{{$item->room_no}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>
                                            <a href="{{ route('edit.roomno',$item->id) }}" class="btn btn-warning px-3 radius-30"> Edit</a>
                                             <a href=" {{ route('delete.roomno',$item->id) }}" class="btn btn-danger px-3 radius-30" id="delete"> Delete</a>  
                    
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
         
                            </div>
                        </div>
                    </div>
                            
                            {{-- // End primaryprofile --}}



						</div>
					</div>
				</div>
			</div>    

            <script type="text/javascript">
                $(document).ready(function(){
                    $('#image').change(function(e){
                        var reader = new FileReader();
                        reader.onload = function(e){
                            $('#showImage').attr('src',e.target.result);
                        }
                        reader.readAsDataURL(e.target.files['0']);
                    });
                });
                </script>   
                <script>
                    $(document).ready(function(){
                     $('#multiImg').on('change', function(){ //on file input change
                        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
                        {
                            var data = $(this)[0].files; //this file data
                             
                            $.each(data, function(index, file){ //loop though each file
                                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                                    var fRead = new FileReader(); //new filereader
                                    fRead.onload = (function(file){ //trigger function on successful read
                                    return function(e) {
                                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                                    .height(80); //create image element 
                                        $('#preview_img').append(img); //append image to output element
                                    };
                                    })(file);
                                    fRead.readAsDataURL(file); //URL representing the file's data.
                                }
                            });
                             
                        }else{
                            alert("Your browser doesn't support File API!"); //if File API is absent
                        }
                     });
                    });
                 </script>   

                 
<!--========== Start of add Basic Plan Facilities ==============-->
<div style="visibility: hidden">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
       <div class="basic_facility_section_remove" id="basic_facility_section_remove">
          <div class="container mt-2">
             <div class="row">
                <div class="form-group col-md-6">
                   <label for="basic_facility_name">Room Facilities</label>
                   <select name="facility_name[]" id="basic_facility_name" class="form-control">
                         <option value="">Select Facility</option>
  <option value="Complimentary Breakfast">Complimentary Breakfast</option>
  <option value="Tivi LED 32/42 inch" > Tivi LED 32/42 inch</option>
  <option value="Thiết bị báo khói" >Thiết bị báo khói</option>
  <option value="quầy bar nhỏ"> quầy bar nhỏ</option>
  <option value="Bàn làm việc" >Bàn làm việc</option>
  <option value="Miễn phí Wi-Fi">Miễn phí Wi-Fi</option>
  <option value="Hộp an toàn" >Hộp an toàn</option>
  <option value="Tắm mưa" >Tắm mưa</option>
  <option value="dép đi trong nhà" >dép đi trong nhà</option>
  <option value="máy sấy tóc" >máy sấy tóc</option>
  <option value="Dịch vụ đánh thức" >Dịch vụ đánh thức</option>
  <option value="Giặt & Giặt khô" >Giặt & Giặt khô</option>
  <option value="Khóa cửa điện tử" >Khóa cửa điện tử</option> 
                   </select>
                </div>
                <div class="form-group col-md-6" style="padding-top: 20px">
                    <a class="btn btn-success btn-sm addeventmore"><i class="lni lni-circle-plus"></i></a>
                    <span class="btn btn-danger btn-sm removeeventmore"><i class="lni lni-circle-minus"></i></span>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 
 <script type="text/javascript">
    $(document).ready(function(){
       var counter = 0;
       $(document).on("click",".addeventmore",function(){
             var whole_extra_item_add = $("#whole_extra_item_add").html();
             $(this).closest(".add_item").append(whole_extra_item_add);
             counter++;
       });
       $(document).on("click",".removeeventmore",function(event){
             $(this).closest("#basic_facility_section_remove").remove();
             counter -= 1
       });
    });
 </script>
 <!--========== End of Basic Plan Facilities ==============-->
 
 <!--========== Start room number add ==============-->
 <script>
    $('#roomnoHide').hide();
    $('#roomview').show();

    function addRoomNo(){
        $('#roomnoHide').show();
        $('#roomview').hide();
        $('#addRoomNo').hide();
    }
 </script>



 <!--========== End room number add ==============-->
 
@endsection