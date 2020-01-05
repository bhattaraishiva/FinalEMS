@include('includes.header')
<body class="hold-transition register-page">
  <div style="background-image: url({{asset('images/whitetemple.jpg')}}); background-position: center; background-size: cover;">
    <div class="login-box" style="
    background-color: whitesmoke; background: transparent; background: rgba(249, 249, 249, 0.3)">
      <div class="register-logo login-font">
        <a href="/"><b>कर्मचारी  व्यवस्थापन<br>प्रणाली</b></a>
      </div>

      <div class="login-box-body login-font"  style="box-shadow: 0 15px 20px rgba(0, 0, 0, 0.2);  background: transparent; background: rgba(249, 249, 249, 0.3)">
        <p class="login-box-msg">कर्मचारी व्यवस्थापन प्रणाली रजिस्टर गर्नुहोस</p>

        @if (count($errors) > 0)
        <ul class="list-group">
          @foreach ($errors->all() as $error)
          <li class="alert alert-danger">
            {{$error}}
          </li>
          @endforeach
        </ul>
        @endif

        <form action="{{ route('register') }}" method="post">
            {{ csrf_field()}}
          <div class="form-group has-feedback">
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus  placeholder="Full name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            {{-- @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
          </div>
          <div class="form-group has-feedback">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {{-- @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror --}}
          </div>
          <div class="form-group has-feedback">
            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  placeholder="Employee ID">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            {{-- @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror --}}
          </div>
          <div class="form-group has-feedback">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
            {{-- @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror --}}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">

            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Retype Password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="">
                <label>
                  <input type="checkbox" id="confirmsave"> I agree to the <a href="#">terms</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" id="saveactivity" disabled>Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


        <a href="{{route('login')}}" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div>
    <!-- /.register-box -->
@include('includes.footer')

