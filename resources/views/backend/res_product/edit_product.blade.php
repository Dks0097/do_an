@extends('admin.admin_dashboard')
@section('admin') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Edit Blog Post</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit Blog Post</li>
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

                <form  class="row g-3" action="{{ route('update.blog.post') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="id" value="{{ $post->id }}">

                    <div class="col-md-6">
                        <label for="input7" class="form-label">Blog Category</label>
                        <select name="rescat_id" id="input7" class="form-select">
                            <option selected="">Select Category </option>
                            @foreach ( $blogcat as $cat) 
                            <option value="{{ $cat->id }}" {{ $cat->id == $post->rescat_id ? 'selected' : '' }} >{{ $cat->name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="input1" class="form-label">name</label>
                        <input type="text" name="name" class="form-control" id="input1" value="{{ $post->name }}" >
                    </div>
                    <div class="col-md-6">
                        <label for="input1" class="form-label">unit_price</label>
                        <input type="number" name="unit_price" class="form-control" id="input1"  value="{{ $post->unit_price }}"  >
                    </div>
                   

                    <div class="col-md-6">
                        <label for="input1" class="form-label">promotion_price</label>
                        <input type="number" name="promotion_price" class="form-control" id="input1"value="{{ $post->promotion_price }}"  >
                    </div>

                    <div class="col-md-12">
                        <label for="input11" class="form-label">Short Description</label>
                        <textarea name="description" class="form-control" id="input11"   rows="3">{!! $post->description !!}</textarea>
                    </div>


                    <div class="col-md-6">
                        <label for="input1" class="form-label">Post Title</label>
                        <input class="form-control" name="post_image" type="file" id="image">
                    </div>

                    <div class="col-md-6">
                        <label for="input1" class="form-label"> </label>
                        <img id="showImage" src="{{ asset($post->image) }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="80">
                    </div>




                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Submit</button>

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
        
        
@endsection