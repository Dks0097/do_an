@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content"> 
	<!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">

        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">All Blog Category</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
             <div class="btn-group"> 

                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Nhà hàng Category</button>
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
                            <th>Sl</th>
                            <th>Name</th>
                            <th>Description</th> 
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($category as $key=> $item ) 
                        <tr>
                            <td>{{ $key+1 }}</td> 
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td> 
                            <td><img src="{{ asset($item->image) }}" alt="" style="width:70px; height:40px;" ></td>
                            <td>
                                <button type="button" class="btn btn-warning px-3 radius-30" data-bs-toggle="modal" data-bs-target="#category" id="{{ $item->id }}" onclick="categoryEdit(this.id)" >Edit</button>
                                <a href="{{ route('delete.res.category',$item->id) }}" class="btn btn-danger px-3 radius-30" id="delete"> Delete</a>
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Restaurant Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 

        <form action="{{ route('store.res.category') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="" class="form-label">Nhà hàng Category Name</label>
                <input type="text" name="category_name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">Description</label>
                <input type="text" name="description" class="form-control">
            </div> 
            <div class="form-group mb-3">
                <label for="" class="form-label">Ảnh</label>
                <input type="file" name="post_image" id="image" class="form-control">
            </div> 
           
            <div class="col-md-6">
                <label for="input1" class="form-label"> </label>
                <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="80">
            </div>

            </div>
            <div class="modal-footer">

    <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>

        </div>
    </div>
</div>

 <!-- Edit Modal -->
 <div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Blog Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body"> 

                <form action="{{ route('update.res.category') }}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="cat_id" id="cat_id" >

            <div class="form-group mb-3">
                <label for="" class="form-label">Blog Category Name</label>
                <input type="text" name="name" class="form-control" id="cat" >
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">Description</label>
                <input type="text" name="description" class="form-control" id="des" >
            </div>
            <div class="form-group mb-3">
                <label for="" class="form-label">Ảnh</label>
                <input type="file" name="image" id="img" class="form-control" >
            </div> 
           
            <div class="col-md-6">
                <label for="input1" class="form-label"> </label>
                <img id="showImg" src="{{ url('upload/no_image.jpg') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="80">
            </div>


            </div>
            <div class="modal-footer">

    <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>

        </div>
    </div>
</div>

<script>
    function categoryEdit(id){
        $.ajax({
            type: 'GET',
            url: '/edit/res/category/'+id,
            dataType: 'json',
            success:function(data){
                console.log(data)
                $('#cat').val(data.name);
                $('#des').val(data.description);
                $('#cat_id').val(data.id);
                $('#img').val(data.image);
                
            }
        })
    }
</script>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#img').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImg').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
        </script>   

@endsection 