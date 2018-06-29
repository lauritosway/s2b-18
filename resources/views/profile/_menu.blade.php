<div id="menu" class="col-sm-3 col-md-2">
    <div>
        <img src="{{\App\Libraries\Images::getUrl('150',$user->image)}}">
    </div>
    <div class="box">
        <div id="home" class="col-sm-12">
            <div id="images" >
                @include('images._menuPhotos')
            </div>
        </div>
    </div>
    <a class="btn btn-block btn-default" href="{{route('profile', [$user->id])}}">{{ trans('common.viewProfile') }}</a>

</div>