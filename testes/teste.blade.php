@extends('adminlte::master') @section('adminlte_css')
<link
  rel="stylesheet"
  href="{{ asset('vendor/adminlte/plugins/iCheck/square/blue.css') }}"
/>
<link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}" />
@yield('css') @stop @section('body_class', 'login-page') @section('body')
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}"
      >{!! config('adminlte.logo', '<b>M</b>igra') !!}</a
    >
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">{{ trans('adminlte::adminlte.login_message') }}</p>
    <forms
      action="{{ url(config('adminlte.login_url', 'login')) }}"
      method="post"
    >
      {!! csrf_field() !!}

      <div
        class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}"
      >
        <input
          type="email"
          name="email"
          class="form-control"
          value="{{ old('email') }}"
          placeholder="{{ trans('adminlte::adminlte.email') }}"
        />
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>
    </forms>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
  @stop @section('adminlte_js')
  <script src="{{
      asset('vendor/adminlte/plugins/iCheck/icheck.min.js')
    }}"></script>
  <script>
    $(function() {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
      });
    });
  </script>
  @yield('js') @stop
</div>
