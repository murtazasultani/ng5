<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <title>GYM</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section class="material-half-bg">
        <div class="cover"></div>
        </section>
        <section class="login-content">
            <div class="login-box">
                <form role=form method="POST" action="{{ url('/login') }}" class="login-form">
                    {!! csrf_field() !!}
                    <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                    <div class="form-group">
                        <label class="control-label">Email Address</label>
                        <span class = "{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input class="form-control" type="email" placeholder="Email Address" name="email" >
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </span>
                    </div>
                    <div class="form-group">
                        <label class="control-label">PASSWORD</label>
                        <span class = "{{ $errors->has('password') ? ' has-error' : '' }}">
                            <input class="form-control" type=password placeholder="Password" name = "password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </span>
                    </div>
                    <div class="form-group">
                    <div class="utility">
                      <div class="animated-checkbox">
                      </div>
                    </div>
                    </div>
                    <div class="form-group btn-container">
                        <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                    </div>
                </form>
            </div>
            <div class="col-md-12 copy text-center">
                <hr>
                <li><span>Copyright <i class="fa fa-copyright"></i> 2015 GYM Afghanistan - Powered by: </span> <a target="_blank" href="http://cyberaan.com" title="" style = "display: inline;">Cyberaan</a></li>
            </div>
        </section>
        <script type="text/javascript">
          // Login Page Flipbox control
          $('.login-content [data-toggle="flip"]').click(function() {
            $('.login-box').toggleClass('flipped');
            return false;
          });
        </script>
        
    </body>

</html>
