<section id="blog">
<div class="container">

    <div class="section-header">
        <h2 class="section-title text-center">En nuestro blog</h2>
        <p class="text-center">Entérate en lo que andamos metidos.<p>
    </div>

    <div class="row">
    	@foreach($posts AS $post)
			<div class="col-sm-4">
			    <div class="blog-post blog-large">
			        <article>
			            <header class="entry-header">
			                <div class="entry-thumbnail">
			                	<a href="blog/{{$post['slug']}}">
			                    	<img class="img-responsive" src='{{asset("images/articles/400/{$post['image']}")}}' alt="">
			                    </a>
			                </div>
			                <div class="entry-date">{{$post['published_at']}} en {{$post['category']['name']}}</div>
			                <h2 class="entry-title"><a href="blog/{{$post['slug']}}">{{$post['title']}}</a></h2>
			            </header>

			            <div class="entry-content">
			                {{str_limit(strip_tags($post['body']),120)}}
			            </div>

			            
			        </article>
			    </div>
			</div><!--/.col-sm-6-->
		@endforeach

    </div>

</div>
</section>