@include('includes.header')

<body class="hold-transition login-page">
  <div style="background-image: url(/images/whitetemple.jpg); background-position: center; background-size: cover;">
    <div class="login-box" style="
    background-color: whitesmoke; background: transparent; background: rgba(249, 249, 249, 0.3)">
      <div class="login-logo login-font">
        <a href="/"><b>कर्मचारी व्यवस्थापन<br>प्रणाली</b></a>
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body login-font"
        style="box-shadow: 0 15px 20px rgba(0, 0, 0, 0.2);  background: transparent; background: rgba(249, 249, 249, 0.3)">
        <p class="login-box-msg">कर्मचारी व्यवस्थापन प्रणालीमा लगिन गर्नुहोस </p>


        @if (count($errors) > 0)
        <ul class="list-group">
          @foreach ($errors->all() as $error)
          <li class="alert alert-danger">
            {{$error}}
          </li>
          @endforeach
        </ul>
        @endif
        <form action="{{ route('login') }}" method="post">
          {{csrf_field()}}
          <div class="form-group has-feedback">
            <input id="login" type="text"
              class="form-control $errors->has('username')|| $errors->has('email') ? ' is-invalid' : ''" name="login"
              value="{{ old('username') ?: old('email') }}"  autofocus placeholder="Email OR username">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

          </div>
          <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
              name="password" required autocomplete="current-password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>

            {{-- @if ($errors->has('employee_id') || $errors->has('email'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('employee_id') ?: $errors->first('email') }}</strong>
            </span>
            @endif --}}
            {{-- @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror --}}
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="">
                <label for="remember" class="form-check-label"> Remember Me</label>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
        </a>
        @endif
        <br>
        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>

      </div>
      <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    @include('includes.footer')
  </div>