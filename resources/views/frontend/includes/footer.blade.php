<footer class="footer-area bg-gray">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_contact">
                        <h4 class="widget-title">Contact Us</h4>
                        <ul class="details">
                            <li><i class="fa fa-map-marker"></i> {{\App\Models\Setting::with('translations')->where('name','location')->first()['content'] ?? ''}} <li>
                            <li><i class="fa fa-envelope"></i> {{\App\Models\Setting::with('translations')->where('name','email')->first()['content'] ?? ''}}</li>
                            <li><i class="fa fa-phone"></i>{{\App\Models\Setting::with('translations')->where('name','phone')->first()['content'] ?? ''}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_nav_menu">
                        <h4 class="widget-title">Course</h4>
                        <ul class="go-top">
                            <li><a href="#/blog">Branding design</a></li>
                            <li><a href="#/blog">Ui/Ux designing </a></li>
                            <li><a href="#/blog">Make Elements</a></li>
                            <li><a href="#/blog">Business</a></li>
                            <li><a href="#/blog">Graphics design</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 go-top">
                    <div class="widget widget_blog_list">
                        <h4 class="widget-title">News &amp; Blog</h4>
                        <ul>
                            <li>
                                <h6><a href="#/blog-details">Big Ideas Of Business Branding Info.</a></h6>
                                <span class="date"><i class="fa fa-calendar"></i>December 7, 2021</span>
                            </li>
                            <li>
                                <h6><a href="#/blog-details">Ui/Ux Ideas Of Business Branding Info.</a></h6>
                                <span class="date"><i class="fa fa-calendar"></i>December 7, 2021</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="widget widget_contact">
                        <h4 class="widget-title">Twitter Feed</h4>
                        <ul class="details">
                            <li>
                                <i class="fa fa-twitter"></i>Simply dummy brand <a href="#">https//tweets/c3l.com</a>
                                <div class="time">9 Hours ago</div>
                            </li>
                            <li>
                                <i class="fa fa-twitter"></i>Simply dummy brand <a href="#">https//tweets/c7l.com</a>
                                <div class="time">9 Hours ago</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 align-self-center">
{{--                    <a href="index.html"><img src="/demo/react/edumint/assets/img/footer-logo.png" alt="img" /></a>--}}
                    <a href="index.html"><img src="{{asset('frontend/images/footer-logo.png')}}" alt="img" /></a>
                </div>
                <div class="col-lg-4 col-md-6 order-lg-12 text-md-right align-self-center">
                    <ul class="social-media mt-md-0 mt-3">
                        <li>
                            <a class="facebook" href="{{\App\Models\Setting::with('translations')->where('name','facebook')->first()['content'] ?? ''}}"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="twitter" href="{{\App\Models\Setting::with('translations')->where('name','twitter')->first()['content'] ?? ''}}"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="instagram" href="{{\App\Models\Setting::with('translations')->where('name','instagram')->first()['content'] ?? ''}}"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li>
                            <a class="youtube" href="{{\App\Models\Setting::with('translations')->where('name','youtube')->first()['content'] ?? ''}}"><i class="fa fa-youtube"></i></a>
                        </li>
{{--                        <li>--}}
{{--                            <a class="pinterest" href="https://www.pinterest.com/solverwp/"><i class="fa fa-pinterest"></i></a>--}}
{{--                        </li>--}}
                    </ul>
                </div>
                <div class="col-lg-4 order-lg-8 text-lg-center align-self-center mt-lg-0 mt-3"><p>copyright 2021 by edumint.com</p></div>
            </div>
        </div>
    </div>
</footer>