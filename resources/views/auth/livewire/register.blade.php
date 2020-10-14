<div class="container py-4">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-md-5">
                   <form method="POST" action="{{ route('register') }}">
                      @csrf
                      <div class="row justify-content-center">
                         <div class="col-md-10">
                            <center>
                               <br>
                               <i class="fad fa-pencil text-primary" style="font-size:40px;margin-bottom:15px;"></i>
                               <h5>Register</h5>
                               <p><strong>Create your Impact Account</strong></p>
                               <br>
                            </center>
                            <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <input id="email" type="email" placeholder="E-Mail Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <br>
                            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <!--<div class="form-group row">
                               <div class="col-md-6 offset-md-4">
                                   <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                       <label class="form-check-label" for="remember">
                                           {{ __('Remember Me') }}
                                       </label>
                                   </div>
                               </div>
                               </div>-->
                            <br>
                            <button type="submit" class="btn btn-primary" style="width:100%;margin-bottom:10px;">
                            {{ __('Register') }}
                            </button>
                            @if (Route::has('password.request'))
                            <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                               {{ __('Forgot Your Password?') }}
                               </a>-->
                            @endif

                                                       <center><br>
                               <p>Or sign in with Google</p>
                            <img class="mb-3" src="https://media.discordapp.net/attachments/760701188030857223/765223635572621372/googlelogo_color_272x92dp.png" alt="" width="72">
                           </center>
                         </div>
                      </div>
                      <br>
                   </form>
          </div>
       </div>
    </div>
 </div>
