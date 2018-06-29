<section>
<div class="container">

<div class="section-header">
    <h2 class="section-title text-center  ">Quiénes somos</h2>
    <p class="text-center  ">
    	Estamos para ayudarte en lo que necesites.
    </p>
</div>

	<div class="row">
		@foreach([1,2,3] AS $f)
		<div class="col-sm-4">

            <div class="card hovercard">
                <img class="cardheader" src="http://lorempixel.com/100/100/people/9/" />
                <div class="avatar">
                    <img alt="" src="http://lorempixel.com/100/100/people/9/">
                </div>
                <div class="info">
                    <div class="title">
                        <a>Ana Fernández</a>
                    </div>
                    <div class="desc">Directora de Start2bee</div>

                </div>
            </div>

        </div>
        @endforeach

	</div>

</div>

</section>
