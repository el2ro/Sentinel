@extends(Config::get('Sentinel::config.layout'))

{{-- Web site Title --}}
@section('title')
@parent
Edit Profile
@stop

{{-- Content --}}
@section('content')

<h4>Luo Uusi Salasana</h4>
<div class="well">
    {{ Form::open(array(
        'action' => array('Sentinel\UserController@resetPost', $data['id'], $data['code']),
        'class' => 'form-inline',
        'role' => 'form'
        )) }}

        <div class="form-group {{ $errors->has('newPassword') ? 'has-error' : '' }}">
            {{ Form::label('newPassword', 'Uusi Salasana', array('class' => 'sr-only')) }}
            {{ Form::password('newPassword', array('class' => 'form-control', 'placeholder' => 'Uusi Salasana')) }}
        </div>

        <div class="form-group {{ $errors->has('newPassword_confirmation') ? 'has-error' : '' }}">
            {{ Form::label('newPassword_confirmation', 'Confirm New Password', array('class' => 'sr-only')) }}
            {{ Form::password('newPassword_confirmation', array('class' => 'form-control', 'placeholder' => 'Salasana Uudestaan')) }}
        </div>

        {{ Form::submit('Vaihda Salasana', array('class' => 'btn btn-primary'))}}

      {{ ($errors->has('newPassword') ?  '<br />' . $errors->first('newPassword') : '') }}
      {{ ($errors->has('newPassword_confirmation') ? '<br />' . $errors->first('newPassword_confirmation') : '') }}

      {{ Form::close() }}
  </div>

@stop