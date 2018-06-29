@foreach($spaces AS $venue)
<div class="venue">
		<div id="{{$venue['id']}}" class="carousel slide col-sm-6 col-xs-12" data-interval="false">
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
					<img class="img-responsive" src="{{ asset("assets/images/venues/{$venue['id']}/regular/{$image['url']}") }}" alt="...">
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
	<div class="description col-xs-12 col-sm-6">
			<div class="col-sm-8 col-sm-7 col-md-8">
				<h2>{{ $venue['title'] }}</h2>
				<p>{{ $venue['description'] }}</p>
				<div class="row">
					<div class="col-sm-12">
						<ul class="nostyle">
							@foreach($venue['perks'] as $perk)
								<li><i class="fa fa-{{$perk['icon']}}"></i> {{$perk['name']}}</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		
		
		<div class="vDescription col-sm-4  col-xs-12">
			<div>


			@foreach($venue['prices'] AS $title => $prices)
				<h3>{{$title}}</h3>
				<span class="label label-default">{{$prices}}</span><br>
				<span style="font-size: 12px; font-weight: bold;">Lunes-Viernes <br> 9:00 a 20:00</span>
			@endforeach
			</div>


			<div class="clearfix"></div>
		</div>



	</div>
	<div class="clearfix"></div>
</div>
@endforeach