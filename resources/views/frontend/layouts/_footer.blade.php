@php
    $setting = \App\Models\Settings::where('status', 'active')->first();
@endphp
<footer id="rs-footer" class="rs-footer footer-main-home"
    style="background-image: url({{ asset('frontend') }}/assets/images/bg/footer-bg.jpg); background-size: cover;">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 md-mb-10">
                    <h3 class="footer-title">Contact Info</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="fi fi-rr-map-marker-home"></i>
                            <div class="desc">
                                {{ $setting->app_name }}.<br>
                                Corporate Office : {{ $setting->address }}<br>
                            </div>
                        </li>
                        <li>
                            <i class="fi fi-rr-phone-call"></i>
                            <div class="desc">
                                <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a><br>
                            </div>
                        </li>
                        <li>
                            <i class="fi fi-rr-envelope-plus"></i>
                            <div class="desc">
                                <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a><br>
                            </div>
                        </li>
                    </ul>
                    <div class="textwidget">
                        <p class="pb-20"></p>
                        <p class="pb-25"><strong>Opening Hours</strong> : Sat – Thu: 9am to 6pm</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li><a href="{{ $setting->social_facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="{{ $setting->social_twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="{{ $setting->social_linkedIn }}" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="col-lg-4 md-mb-10">
                    <h3 class="footer-title">Our Projects</h3>
                    <ul class="site-map">
                        @foreach (\App\Models\Project::where('status', 'active')->limit(7)->get() as $item)
                            <li><a href="{{ route('single.projects',[$item->id,$item->slug]) }}">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </div> --}}
                <div class="col-lg-4 md-mb-10">
                    <h3 class="footer-title">Our Services</h3>
                    <ul class="site-map">
                        <li><a href="{{ route('services.all') }}">Our Services at a GLANCE</a></li>
                        {{-- @foreach (\App\Models\Page::where('page_category', 'service')->where('status', 'active')->orderBy('position_view', 'ASC')->get() as $item)
                            <li><a href="{{ route('pageDetails',['service',$item->slug]) }}">{{ $item->page_name }}</a></li>
                        @endforeach --}}
                    </ul>
                </div>


                <div class="col-lg-4">
                    <h3 class="footer-title">MISSION</h3>
                    <p class="widget-desc">Our mission is to accelerate the adoption of renewable energy by providing
                        top-tier solar power solutions and services. We strive to make solar energy accessible,
                        affordable, and reliable for everyone.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                    <ul class="copy-right-menu">
                        <li class="menu-item-has-children">
                            <a href="{{ route('home.all') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about.all') }}">About Us</a>
                            <!-- <ul class="sub-menu">
                              <li class="last-item menu-item-has-children">
                                <a href="about.html">About Our Company</a>
                                <a href="work.html">working syesteam</a>
                                <a href="technology.html">Masa Technology</a>
                                <a href="message.html"
                                  >Managing Director Speech</a
                                >
                              </li>
                            </ul> -->
                        </li>

                        {{-- <li class="menu-item-has-children">
                  
                </li> --}}
                        <li>
                            <a href="#">Products</a>
                        </li>
                        <li>
                            <a href="{{ route('services.all') }}">Services</a>
                        </li>
                        <li>
                            <a href="{{ route('photo-gallery.all') }}">Gallery</a>
                        </li>
                        <li>
                            <a href="{{ route('team') }}">Team</a>
                        </li>
                        <li>
                            <a href="{{ route('blogs.all') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('coe') }}">COE</a>
                        </li>
                        <li>
                            <a href="{{ route('user_contact') }}">Contact</a>
                        </li>

                        <li>
                            <a href="{{ route('carrier') }}">Career</a>
                        </li>
                    </ul>
                    {{-- <ul class="copy-right-menu">
                        <li><a href="{{ route('home.all') }}">Home</a></li>
                        <li><a href="{{ route('projects.all') }}">Project</a></li>
                        <li><a href="{{ route('blogs.all') }}">Blog</a></li>
                        <li><a href="{{ route('photo-gallery.all') }}">Gallery</a></li>
                        <li><a href="{{ route('user_contact') }}">Contact</a></li>
                    </ul> --}}
                </div>
                <div class="col-lg-6">
                    <div class="copyright text-lg-start text-center">
                        <p>© {{ date('Y') }} <a href="https://zariq.com.bd"
                                target="blank">{{ $setting->footer }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
