<footer>
    <div class="container">
        <div class="row">
                <div class="col-sm-2 col-xs-6">
                    <h5>{{trans('common.company')}}</h5>
                    <ul>
                        <li><a href="{{route('spaces')}}">{{trans('common.spaces')}}</a></li>
                        <li><a href="{{route('offices')}}">{{trans('common.offices')}}</a></li>
                        <li><a href="{{route('coworking')}}">{{trans('common.coworking')}}</a></li>
                        <li><a href="{{route('contact')}}">{{trans('common.contact')}}</a></li>
                        <li><a href="{{route('blog')}}">{{trans('common.blog')}}</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 col-xs-6">
                    <h5>{{trans('common.languages')}}</h5>
                    <ul class="language_bar_chooser">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                    {{{ $properties['native'] }}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                
                <div class="col-sm-2 col-xs-6">
                    <h5>{{ trans('common.legal') }}</h5>
                    <ul>
                        <li><a href="">{{ trans('common.termsPrivacy') }}</a></li>
                    </ul>
                </div>

                <div class="col-sm-2 col-xs-6">
                    <h5>Follow us</h5>
                    <ul class="social-icons">
                        <li><a href="//www.facebook.com/start2bee"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="//twitter.com/start2bee"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>



        </div>
        <hr>

        <div class="row">
            <div id="copyright" class="col-sm-12">
                &copy; Start2bee
            </div>
        </div>
    </div>
</footer>