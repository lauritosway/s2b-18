<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">{{ trans('common.close') }}</span></button>
          Ponte en contacto con nosotros.
      </div>
      <div class="modal-body">

          <div class="form-group">
          {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
          {!! Form::text('name', null, ['id' => 'name','class' => 'form-control', 'placeholder' => '', 'autocomplete' => 'off']) !!}
          </div>

          <div class="form-group">
          {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
          {!! Form::text('email', null, ['id' => 'email','class' => 'form-control', 'placeholder' => '', 'autocomplete' => 'off']) !!}
          </div>

          <div class="form-group">
          {!! Form::label('phone', 'Teléfono', ['class' => 'control-label']) !!}
          {!! Form::text('phone', null, ['id' => 'phone','class' => 'form-control', 'placeholder' => '', 'autocomplete' => 'off']) !!}
          </div>

          <div class="form-group">
          {!! Form::label('text', 'Cuéntanos qué necesitas', ['class' => 'control-label']) !!}
          {!! Form::textarea('text',null, ['id' => 'text', 'autocomplete' => 'off', 'class' => 'form-control', 'rows' => 5, 'placeholder' => trans('common.writeHereYourMessage') ]) !!}

          </div>

      </div>
      <div class="modal-footer">

          <div class="row">
          <div class="col-md-7 text-left">
          <p>
            Nos pondremos en contacto contigo vía email o vía teléfonica. Tamibén puedes escribirnos a info@start2bee.com si lo prefieres.
            Nuestro horario de atención es de 9h a 14h y de 15.30h a 8h.
          </p>
          </div>
          <div class="col-md-5">
              <button id="sendMessage" class="btn btn-primary btn-block">
                  Enviar
              </button>
          </div>
          </div>

      </div>

    </div>
  </div>
</div>

@section('javascript')
<script>
  $("#sendMessage").click( function(){

      $('#modalContact').modal('hide');

      $.ajax({
          type: "POST",
          url: '/contact',
          data: {name: $("#name").val(), phone: $("#phone").val(), email: $("#email").val(),text: $("#text").val(), _token: '{{csrf_token()}}'},
          })
          .done(function( partial ) {
            $("#name").val(''); 
            $("#phone").val(''); 
            $("#email").val('');
            $("#text").val('');
            $("#messageSent").removeClass('hide');
          });
  });
</script>
@stop