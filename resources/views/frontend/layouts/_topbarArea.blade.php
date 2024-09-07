@php
    $setting = \App\Models\Settings::where('status','active')->first();
@endphp
<div class="toolbar-area topbar-style1 hidden-md">
    <div class="container">
        <div class="row rs-vertical-middle">
            <div class="col-lg-7">
                <div class="toolbar-contact">
                    <ul class="rs-contact-info">
                        <li>
                            <i class="fi fi-rr-envelope-plus"></i>
                            <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                        </li>
                        <li>
                            <i class="fi fi-rr-phone-call"></i>
                            <a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                        </li>
                        <li>
                            <i class="fi-rr-map-marker-home"></i>
                            {{ $setting->address }}
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="toolbar-sl-share">
                    <ul class="clearfix">
                        <li class="opening"> <em><i class="fi fi-rr-time-add"></i> Sat – Thu: 9am to 6pm</em> </li>
                        <li><a href="{{ $setting->social_facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="{{ $setting->social_twitter }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="{{ $setting->social_linkedIn }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
