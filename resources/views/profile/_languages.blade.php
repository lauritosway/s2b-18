


<div id="languages" class="form-group">
  @foreach($languages as $item)
  <div id="{{$item['title']}}" class="venueType @if($item['value']) venueSelected @endif" onclick="selectVenue('{{$item['title']}}')">
    <p class="col-sm-12 text-center" style="margin-top: 10px; text-transform: uppercase; ">  {{$item['title']}} </p>
    <p class="col-sm-12 text-center" style="margin-top: 0px; text-transform: uppercase; "> {{$item['description']}} </p>
  </div>
  <input class="hidden" type="checkbox" name="languages[{{$item['id']}}]" id="{{$item['title']}}_cb" value="{{$item['title']}}" @if($item['value']) checked @endif>
  @endforeach
    <div class="clearfix"></div>
</div>


