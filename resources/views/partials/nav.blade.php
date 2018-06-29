<header>    

    <nav id="main-menu" class="navbar navbar-default navbar-top" role="banner">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li><a {!! ( Route::currentRouteName() == 'spaces' ) ? "class='active'" : '' !!} href="{{route('spaces')}}">{{trans('common.spaces')}}</a></li>
                    <li><a {!! ( Route::currentRouteName() == 'offices' ) ? "class='active'" : '' !!} href="{{route('offices')}}">{{trans('common.offices')}}</a></li>
                    <li><a {!! ( Route::currentRouteName() == 'coworking' ) ? "class='active'" : '' !!} href="{{route('coworking')}}">{{trans('common.coworking')}}</a></li>
                    <li><a {!! ( Route::currentRouteName() == 'teams' ) ? "class='active'" : '' !!} href="{{route('teams')}}">{{trans('common.teams')}}</a></li>
                    <li><a {!! ( Route::currentRouteName() == 'contact' ) ? "class='active'" : '' !!} href="{{route('contact')}}">{{trans('common.contact')}}</a></li>
                    <li><a {!! ( Route::currentRouteName() == 'blog' ) ? "class='active'" : '' !!} href="{{route('blog')}}">{{trans('common.blog')}}</a></li>
                    <li><a {!! ( Route::currentRouteName() == 'community' ) ? "class='active'" : '' !!} href="{{route('community')}}">{{trans('common.community')}}</a></li>
                </ul>
            </div>
        </div>
    </nav>

</header>
