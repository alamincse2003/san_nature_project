<div class="col-lg-4 widget-area sidebar-left">
    <aside class="widget widget-nav-menu">
        <ul>
            @foreach($categories as $category)
                <li class="">
                    <a href="{{ route('products',[$category->id,$category->slug]) }}" style="background: lightcoral"> {{ $category->category_name }} </a>
                    @foreach($category->children as $child)

                           <a href="{{ route('products',[$child->id,$child->slug]) }}" style="color:{{ request()->segment(2) == $child->id ? 'lightcoral' : null }}">- {{ $child->category_name }} </a>

                        @foreach($child->children as $child2)

                                <a href="{{ route('products',[$child2->id,$child2->slug]) }}" style="color:{{ request()->segment(2) == $child->id ? 'red' : null }}">-- {{ $child2->category_name }} </a>

                        @endforeach
                    @endforeach
                </li>

            @endforeach
        </ul>
    </aside>



{{--    <aside class="widget contact-widget with-title">--}}
{{--        <h3 class="widget-title">Get in touch</h3>--}}
{{--        <ul class="contact-widget-wrapper">--}}
{{--            <li><i class="ttm-textcolor-skincolor ti ti-location-pin"></i>{{ $settings->address }}--}}
{{--            </li>--}}
{{--            <li><i class="ttm-textcolor-skincolor ti ti-email"></i><a--}}
{{--                    href="mailto:{{ $settings->email }}" target="_blank">{{ $settings->email }}</a>--}}
{{--            </li>--}}
{{--            <li><i class="ttm-textcolor-skincolor ti ti-mobile"></i>{{ $settings->phone }}</li>--}}
{{--            --}}{{--                            <li><i class="ttm-textcolor-skincolor ti ti-alarm-clock"></i>Mon to Sat - 9:00am to 6:00pm <br> (Friday Closed)</li>--}}
{{--        </ul>--}}
{{--    </aside>--}}
</div>
