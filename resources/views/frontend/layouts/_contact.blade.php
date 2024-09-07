
               @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="d-flex align-items-center">
                        <i class="bx bx-like"></i>
                        <span>
                          {{ session('success') }}
                         </span>
                    </div>
                </div>
            @endif

    <!-- padding_bottom_zero-section end -->


<div class="rs-contact contact-style1 bg3" style="background: url({{asset('frontend')}}/assets/images/bg/contact-bg.jpg); background-position: top center; background-repeat: no-repeat; background-size: cover;">
    <div class="row">
        <div class="col-lg-4 offset-2 con-left-6">
            <div class="contact-section">
                <div class="contact-wrap">
                    <div class="sec-title mb-45">
	   	                    		<span class="sub-text">
	   	                    			<img src="{{asset('frontend')}}/assets/images/shape-1.png" alt="Images">
	   	                    			Lets talk
	   	                    		</span>
                        <h2 class="title">
                            Have an upcoming project?
                        </h2>
                    </div>
                    <div id="form-messages"></div>
                    <form id="contact-form" action="{{ route('user_contact.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                    @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                    @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="Phone Number" required="">
                                    @error('phone')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 mb-30">
                                    <input class="from-control" type="text" id="address" name="address" placeholder="Your Address" required="">
                                    @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                                    <input class="from-control" type="text" id="subject" name="subject" placeholder="Subject" required="">
                                    @error('subject')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 mb-30">
                                    <textarea class="from-control" id="message" name="message" placeholder="Your Message Here" required=""></textarea>
                                    @error('message')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="btn-part">
                                <div class="form-group mb-0">
                                    <input class="readon more submit" type="submit" value="Submit Now">
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2 pr-50 md-pr-15 con-right-6 md-mt-50">
            <div class="contact-box-item">
                <div class="contact-box mb-20">
                    <div class="contact-icon">
                        <img src="{{asset('frontend')}}/assets/images/contact/style1/icons/1.png" alt="images">
                    </div>
                    <div class="content-text">
                        <h4 class="title"><a href="#">Corporate Office </a></h4>
                        <p class="services-txt">Dhaka,<br> Bangladesh</p>
                    </div>
                </div>
                <div class="contact-box mb-20">
                    <div class="contact-icon">
                        <img src="{{asset('frontend')}}/assets/images/contact/style1/icons/2.png" alt="images">
                    </div>
                    <div class="content-text">
                        <h4 class="title"><a href="#">Email us</a></h4>
                        <p class="services-txt">
                            <a href="mailto:test@gamil.com">masasteelbl@gmail.com</a><br>
                            <a href="mailto:test2@gamil.com">masasteelbl@gmail.com</a>
                        </p>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="contact-icon">
                        <img src="{{asset('frontend')}}/assets/images/contact/style1/icons/3.png" alt="images">
                    </div>
                    <div class="content-text">
                        <h4 class="title"><a href="#">Call us</a></h4>
                        <p class="services-txt">
                            <a href="tel:(+088)01912-195778">(+088) 01912-195778</a><br>
                            <a href="tel:(+088)01912-195778">(+088) 01912-195778</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 contact-right-img"></div>
    </div>
</div>

