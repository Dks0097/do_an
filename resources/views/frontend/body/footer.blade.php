@php
    $setting = App\Models\SiteSetting::find(1);
@endphp

<footer class="footer-area footer-bg">
    <div class="container">
        <div class="footer-top pt-100 pb-70">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="{{ asset($setting->logo) }}" alt="Images">
                            </a>
                        </div>
                        <p>
                            Chứng tôi cam kết sẽ cung cấp dịch vụ nghĩ dưỡng tuyệt vời nhất mà bạn có thể trãi nghiệm ở chúng tôi mà không phải bất cứ đâu, Còn chần chờ gì nữa mà không nhấn ngay vào nuốt ĐẶT PHÒNG NGAY.
                        </p>
                        <ul class="footer-list-contact">
                            <li>
                                <i class='bx bx-home-alt'></i>
                                <a href="#">{{ $setting->address }}</a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                            </li>
                            <li>
                                <i class='bx bx-envelope'></i>
                                <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget pl-5">
                        <h3>Liên Kết</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="about.html" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    About
                                </a>
                            </li> 
                            <li>
                                <a href="services-1.html" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    Dịch vụ
                                </a>
                            </li> 
                            <li>
                                <a href="team.html" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    Thành viên
                                </a>
                            </li> 
                            <li>
                                <a href="gallery.html" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    Phòng chưng bày 
                                </a>
                            </li> 
                            <li>
                                <a href="terms-condition.html" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    Điều kiện
                                </a>
                            </li> 
                            <li>
                                <a href="privacy-policy.html" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    Chính sách bảo mật
                                </a>
                            </li> 
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Liên kết Hữu Ích</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="{{url('/')}}" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    Trang chủ
                                </a>
                            </li> 
                            <li>
                                <a href="blog-1.html" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    Blog
                                </a>
                            </li> 
                            <li>
                                <a href="faq.html" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    Câu hỏi thường gặp
                                </a>
                            </li> 
                            <li>
                                <a href="testimonials.html" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    Đánh Giá
                                </a>
                            </li> 
                            <li>
                                <a href="gallery.html" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    Ảnh Khách sạn
                                </a>
                            </li> 
                            <li>
                                <a href="contact.html" target="_blank">
                                    <i class='bx bx-caret-right'></i>
                                    Liên hệ chúng tôi
                                </a>
                            </li> 
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Bản Tin</h3>
                        <p>
                            Khách hàng là thượng đế mà chúng tôi muốn được chăm sóc và hỗ trợ nhiệt tình 
                        </p>
                        <div class="footer-form">
                            <form class="newsletter-form" data-toggle="validator" method="POST">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email*" name="EMAIL" required autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-bg-one">
                                            Đăng kí ngay bây giờ 
                                        </button>
                                        <div id="validator-newsletter" class="form-result"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copy-right-area">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="copy-right-text text-align1">
                        <p>
                            {{ $setting->copyright }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="social-icon text-align2">
                        <ul class="social-link">
                            <li>
                                <a href="{{ $setting->facebook }}" target="_blank"><i class='bx bxl-facebook'></i></a>
                            </li> 
                            <li>
                                <a href="{{ $setting->twitter }}" target="_blank"><i class='bx bxl-twitter'></i></a>
                            </li> 
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-instagram'></i></a>
                            </li> 
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a>
                            </li> 
                            <li>
                                <a href="#" target="_blank"><i class='bx bxl-youtube'></i></a>
                            </li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>