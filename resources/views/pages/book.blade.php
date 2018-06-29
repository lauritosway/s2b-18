@extends('start2bee')
@section('content')
<div id="book">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h1>Reserva</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7">
        {!! Form::open(['url' => '/book']) !!}
        @include('form.fields')
        {!! Form::hidden('venueName', $venue['title']) !!}
        <div class="form-group">
          <div class="row">
            <div class="col-sm-4">
              {!! Form::label('from', trans('common.from'), ['class' => '']) !!}
              {!! Form::text('check_in', ( isset($request->check_in) ) ? $request->check_in->toDateString() : null , ['id' => 'check_in','class' => 'form-control', 'placeholder' => 'yyyy/mm/dd', 'autocomplete' => 'off']) !!}
            </div>
            <div class="col-sm-4">
              {!! Form::label('to', trans('common.to') , ['class' => '']) !!}
              {!! Form::text('check_out', ( isset($request->check_out) ) ? $request->check_out->toDateString() : null , ['id' => 'check_out','class' => 'form-control', 'placeholder' => 'yyyy/mm/dd', 'autocomplete' => 'off']) !!}
            </div>
            <div class="col-sm-3">
              {!! Form::label('people', trans('common.people'), ['class' => '']) !!}
              {!! Form::text('people', '', ['id' => 'people','class' => 'form-control', 'placeholder' => '', 'autocomplete' => 'off']) !!}
            </div>
          </div>
        </div>
        
        @if(isset($venue['distribution']))
        <div class="form-group">
          {!! Form::label('text', '¿Cómo necesitas que te montemos la sala?', ['class' => 'control-label']) !!}
          <div class="clear"></div>
        @foreach($venue['distribution'] AS $dis)
        <div id="{{$dis['id']}}" class="venueType" onclick="selectVenue('{{$dis['id']}}')">
          <img width="250" class="img-responsive" src="{{ asset("assets/images/venues/{$dis['url']}") }}" alt="...">
        </div>
        <input class="hidden" type="radio" name="venueType" id="{{$dis['id']}}_cb" value="{{$dis['name']}}">
        @endforeach
        </div>
        <div style="height: 20px; width: 100%; clear: both;"></div>
        @endif
        
        <div class="form-group">
          {!! Form::label('text', 'Cuéntanos qué necesitas', ['class' => 'control-label']) !!}
          {!! Form::textarea('text',null, ['id' => 'text', 'autocomplete' => 'off', 'class' => 'form-control', 'rows' => 5, 'placeholder' => trans('common.writeHereYourMessage') ]) !!}
        </div>
        <div class="row">
          <div class="col-md-5 pull-right">
            <button id="sendMessage" class="btn btn-primary btn-block">
            Enviar
            </button>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div id="{{$venue['id']}}" class="carousel slide" data-interval="false">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#{{$venue['id']}}" data-slide-to="0" class="active"></li>
            @for($i=1;$i<count($venue['images']);$i++)
              <li data-target="#{{$venue['id']}}" data-slide-to="{{$i}}"></li>
            @endfor
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            @foreach($venue['images'] AS $key => $image)
            <div class="item @if($key == 0) active @endif">
              <img width="552" class="img-responsive" src="{{ asset("assets/images/venues/{$venue['id']}/regular/{$image['url']}") }}" alt="...">
              <div class="carousel-caption">
              </div>
            </div>
            @endforeach
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#{{$venue['id']}}" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#{{$venue['id']}}" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="description">
          <h2>{{ $venue['title'] }}</h2>
          <p>{{ $venue['description'] }}</p>
        </div>
        <div class="clearfix"></div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</div>
@stop
@section('javascript')
<script type="text/javascript">
function selectVenue(value)
{
$(".venueType").removeClass("venueSelected");
$("#"+value).addClass("venueSelected");
$("#"+value+"_cb").prop('checked', true);
}
</script>
@stop