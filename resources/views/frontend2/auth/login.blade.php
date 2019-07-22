@extends('frontend2.layouts.app')

@section('banner')
<div style="height:200px"></div>
@endsection

@section('title', app_name() . ' | ' . __('labels.frontend.auth.login_box_title'))

@section('content')
   
<div class="page-header header-filter" style="background-image: url('../public/frontend/img/bg7.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">

            {{ html()->form('POST', route('frontend.auth.login.post'))->open() }}

              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">@lang('labels.frontend.auth.login_box_title')</h4>
                <div class="social-line">
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-twitter"></i>
                  </a>
                  <a href="#pablo" class="btn btn-just-icon btn-link">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </div>
              </div>

              <p class="description text-center">Or Be Classical</p>
              <div class="card-body">

                {{--  <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">face</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="First Name...">
                </div>  --}}

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>

                  {{ html()->email('email')
                      ->class('form-control')
                      ->placeholder(__('validation.attributes.frontend.email'))
                      ->attribute('maxlength', 191)
                      ->required() }}
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  {{ html()->password('password')
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.frontend.password'))
                    ->required() }}
                </div>

                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons"></i>
                    </span>
                  </div>
                  <div class="checkbox">
                        {{ html()->label(html()->checkbox('remember', true, 1) . ' ' . __('labels.frontend.auth.remember_me'))->for('remember') }}
                    </div>
                </div>
              </div>


              <div class="footer text-center">
                <a href="#pablo" class="btn btn-primary btn-link btn-wd btn-lg">{{ form_submit(__('labels.frontend.auth.login_button')) }} </a>
              </div>

              <div class="form-group text-right">
                    <a href="{{ route('frontend.auth.password.reset') }}">@lang('labels.frontend.passwords.forgot_password')</a>
              </div><!--form-group-->

              {{ html()->form()->close() }}

              <div class="text-center">
                {!! $socialiteLinks !!}
            </div>

          </div>
        </div>
      </div>
    </div>
@endsection
