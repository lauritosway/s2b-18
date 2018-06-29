@extends('start2bee')


@section('content')


<div id="bigbox" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.3)),url({{ asset("assets/images/slides/workshops.jpg") }});">
	<div class="container">
		<div class="row">
			<div id="message" class="col-sm-8">
				<h1>
				Únete a nuestra comunidad
				<span>comunidad coworker, clases de conversaciones gratuitas y eventos</span>
				</h1>
				<div class="col-sm-4 col-sm-push-4">
					<a href="{{route('register')}}" class="btn btn-primary btn-block btn-lg">Regístrate</a>
				</div>


		</div>
	</div>
</div>
</div>

<section class="bg-dark">
	<div class="container">
		<div class="section-header">
			<h2 class="section-title text-center  ">únete a nuestra comunidad de bees</h2>
			<p class="text-center  ">
			Ven a formar parte de nuestro coworker, somos una comunidad, nos gusta hacer cosas juntos.
		    Tenemos clases de<br> conversación gratuitas y eventos exclusivos para nuestros miembros.
			</p>
		</div>

		@foreach($users AS $user)
			<div class="col-md-2 col-sm-3 text-center" style="height:290px;">
			<a href="{{route('profile', [$user->id])}}">
			   <img src="{{\App\Libraries\Images::getUrl('150',$user['image'])}}" name="aboutme"  border="0"></a>
			   <div class="h4 media-heading" style="margin-top:5px;">
			   	{{$user['name']}} 

			   </div>
			</a>
			   <div class="h5" style="margin:0;">{{$user['title']}}</div>
			   @if(!empty($user['linkedin']))
			    <div class="media-heading left"><a href="{{$user['linkedin']}}" target="_blank"><i class="fa fa-linkedin"></i></a></div>
			   @endif


			   <br>

			   <hr>
			   <br>
			       

			   </div>
		@endforeach

	</div>
</section>


<section id="services">
	       
            <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center">workshops gratuitos de idiomas</h2>
                <p class="text-center">Ven a practicar tus idiomas con nosotros y conoce gente como tú. Nuestras clases son amenas, con nativos, y ¡gratuitas!</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-language"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Habla idiomas</h4>
                                <p>Si tu inglés se está oxidando, ven a conocernos, hacemos clases cada semana de conversación, es gratis. Diviértete practicando.</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Somos voluntarios</h4>
                                <p>Nuestros 'profesores' son voluntarios, tenemos nativos de inglés, ruso, portugués, etc. Es gratuito para todos, si eres nativo de algún idioma, tú también puedes participar. </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Perfecto para conocer gente</h4>
                                <p>De todas las edades y todas las profesiones, conecta con gente, pasa un buen rato y disfruta de aprender idiomas sin darte cuenta. </p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                
                </div>
                </div>


             
                


            </div><!--/.row-->    
        </div><!--/.container-->
        </section>
@stop


