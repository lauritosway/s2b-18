<div class="container">
  <div class="row">
    <div class="col-sm-6">
      @include('form.fields')
      <div class="form-group">
        {!! Form::label('venue', trans('common.venue'), ['class' => 'control-label']) !!}
        {!! Form::select('venue',['sala1' => 'sala1', 'sala2' => 'sala2' ], 'sala1', ['id' => 'check_in','class' => 'form-control', 'placeholder' => 'yyyy/mm/dd', 'autocomplete' => 'off'] ) !!}
      </div>
      
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
      <div class="form-group">
        {!! Form::label('text', 'Cuéntanos qué necesitas', ['class' => 'control-label']) !!}
        {!! Form::textarea('text',null, ['id' => 'text', 'autocomplete' => 'off', 'class' => 'form-control', 'rows' => 5, 'placeholder' => trans('common.writeHereYourMessage') ]) !!}
      </div>
      <div class="row">
        <div class="col-md-7 text-left">
          <p>
            Nos pondremos en Meetingso contigo vía email o vía teléfonica. Recuerda que nuestro horario de atención es de
            Lunes a Viernes de 9 de la mañana a 9 de la noche.
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