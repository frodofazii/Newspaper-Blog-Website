



@extends('user/app')


@section('bg-img',asset('user/img/contact-bg.jpg'))

@section('head')

@endsection

@section('title','Login Here' )

@section('Sub-Heading','')

<link rel="stylesheet"  href="{{ asset('/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">



@section('main-content')



    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <form class="col-lg-offset-3" role="form" method="POST" action="{{ route('login') }}">
                        @csrf
           
                         
                           
                           <!-- <a href="{{ url('/download/OK.pptx')  }}" target="_blank">
                                    Click
                                </a>-->
                               
         
                        <div class="form-group row">

                            <label for="email" class="col-sm-6 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-6 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox icheck">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                 <a href='{{ route ('register')}}' class="btn btn-primary">
                                    {{ __('Register') }}
                                </a>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
          

        </div>
      </div>
    </article>

    


@endsection

@section('footer')
@endsection

