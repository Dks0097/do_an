@extends('frontend.main_master')
@section('main')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- Inner Banner -->
  <div class="inner-banner inner-bg6">
    <div class="container">
        <div class="inner-title">
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li><a href="{{ route('dashboard') }}">Bảng điều kiển</a> </li>
            </ul>
            <h3>Danh sách đặt chỗ của người dùng</h3>
        </div>
    </div>
</div>
<!-- Inner Banner End -->

<!-- Service Details Area -->
<div class="service-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
             <div class="col-lg-3">

                @include('frontend.dashboard.user_menu')

            </div>


            <div class="col-lg-9">
                <div class="service-article">


    <section class="checkout-area pb-70">
    <div class="container">
        <form action="{{ route('password.change.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">Danh sách đặt chỗ của người dùng </h3>



                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Mã hóa đơn</th>
                                <th scope="col">Ngày đặt</th>
                                <th scope="col">Người dùng</th>
                                <th scope="col">Phòng</th>
                                <th scope="col">Thời gian nhận/trả phòng</th>
                                <th scope="col">Số phòng</th>
                                <th scope="col">Trạng thái</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allData as $item) 
                                <tr>
                                <td> <a href="{{ route('user.invoice',$item->id) }}">{{ $item->code }}</a> </td>
                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                <td>{{ $item['user']['name'] }}</td>
                                <td>{{ $item['room']['type']['name'] }}</td>
                                <td> <span class="badge bg-primary">{{ $item->check_in }}</span>  <span class="badge bg-warning text-dark">{{ $item->check_out }}</span> </td>
                                <td>{{ $item->number_of_rooms }}</td>
                                <td> 
                                    @if ($item->status == 1)
                                    <span class="badge bg-success">Hoàn Thành</span>
                                       @else
                                       <span class="badge bg-info text-dark">Đang xử lí</span>
                                    @endif
                    
                                </td>
                                </tr>
                                @endforeach
                    
                            </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </form>      

             </div>
             </section>

        </div>
    </div>


</div>
    </div>
</div>
<!-- Service Details Area End -->




@endsection