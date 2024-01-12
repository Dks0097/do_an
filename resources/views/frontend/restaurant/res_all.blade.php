@extends('frontend.main_master')
@section('main')

    <!-- Inner Banner -->
    <div class="inner-banner inner-bg4">
        <div class="container">
            <div class="inner-title">
                <ul>
                    <li>
                        <a href="{{url('/')}}">Trang chủ</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>Nhà hàng</li>
                </ul>
                <h3>Nhà hàng</h3>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Blog Style Area -->
    <div class="blog-style-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">

                    @foreach ($blog as $lpost ) 

                    <div class="col-lg-12">
                        <div class="blog-card">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="blog-img">
                                        <a href="{{ url('res/details/'.$lpost->id) }}">
                                            <img src="{{ asset($lpost->image) }}" alt="Images">
                                        </a>
                                    </div>
                                </div>

                <div class="col-lg-7 col-md-8 p-0">
                    <div class="blog-content">
               
                        <h3>
                            <a href="{{ url('res/details/'.$lpost->id) }}">{{ $lpost->name }}</a>
                        </h3>
                        <span>Giá {{ $lpost->unit_price  }}</span>
                        <p>{{ $lpost->short_descp }}</p>
                        <a href="{{ url('res/details/'.$lpost->id) }}" class="read-btn">
                            Read More
                        </a>
                    </div>
                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            {{ $blog->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="side-bar-wrap">
                        <div class="search-widget">
                            <form class="search-form">
                                <input type="search" name="key" class="form-control" placeholder="Search...">
                                <button type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        </div>
                        <div class="services-bar-widget">
                            <h3 class="title">Chuyên mục Nhà hàng</h3>
                            <div class="side-bar-categories">
                                @foreach ($bcategory as $cat) 
                                <ul>
                                    <li>
                                        <a href="{{ url('res/cat/list/'.$cat->id) }}">{{ $cat->name }}</a>
                                    </li> 
                                </ul>
                                @endforeach
                            </div>
                        </div>
                        <div class="side-bar-widget">
                            <h3 class="title">Món ăn gần đây</h3>
                            <div class="widget-popular-post">
                                
                                {{-- @foreach ($lpost as $post)   
                            <article class="item">
                                <a href="{{ url('res/details/'.$post->id) }}" class="thumb">
                <img src="{{ asset($post->image) }}" alt="Images" style="width: 80px; height:80px;">      
                                </a>
                                <div class="info">
                                    <h4 class="title-text">
                                        <a href="{{ url('res/details/'.$post->id) }}">
                                            {{ $post->name }}
                                        </a>
                                    </h4>
                                    <ul>
                                        <li>
                                            Giá
                                            {{ $post->unit_price }}
                                        </li>
                                       
                                    </ul>
                                </div>
                            </article>
                            @endforeach --}}


                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Style Area End -->

    {{$blog->appends(request()->all())->links()}}



@endsection