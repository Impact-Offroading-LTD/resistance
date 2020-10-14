<div class="container py-4">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-5">
            @if($step == 0)
            <center>
               <br>
               <i class="fad fa-times-hexagon text-danger" style="font-size:40px;margin-bottom:15px;"></i>
               <h4>Oops! Invalid Username or Password!</h4>
               <p><strong>Seems the account your trying to sign into does not exist or the account has been terminated by our staff team.</strong></p>
               <br>
            </center>
            @endif
            @if($step == 1)
            <center>
               <br>
               <i class="fad fa-sign-in-alt text-primary" style="font-size:40px;margin-bottom:15px;"></i>
               <h4>Login</h4>
               <p><strong>Use your Impact Account</strong></p>
               <br>
            </center>
            @endif
            @if($step == 2)
            <center>
             <br>

             <div class="user-avatar" style="background-image: url('https://www.gravatar.com/avatar/{{ md5( strtolower( trim( $email ) ) )}}&s=100');width:75px;height:75px;"></div>

             <br><h5>Welcome, {{$username}}!</h5>
             <p>{{$email}}</p>
             <br>
            </center>
            @endif

            @if($step == 1)
            <form wire:submit.prevent="getuser">
            <input wire:model="email" id="email" type="email" placeholder="Email or username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
            @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
            <center><button type="submit" class="btn btn-primary" style="width:50%;margin-bottom:10px;">
                {{ __('Login') }}
                </button></center>
            <br>
            </form>
            @endif

            @if($step == 0)
            <form wire:submit.prevent="resetform">
                <center><button type="submit" class="btn btn-primary" style="width:50%;margin-bottom:10px;">
                 {{ __('Go Back') }}
                 </button></center>
                <br>
            </form>
            @if (Route::has('password.request'))
            <center>
            <a href="{{ route('password.request') }}" style="text-decoration:none;">
            {{ __('Forgot Your Password?') }}
            </a>
            </center>
            @endif
            @endif

            <!-- Login Card -->
                  <form method="POST" action="/login">
                     @csrf
                     <div class="row justify-content-center">
                        <div class="col-md-10">


                           @if($step == 2)
                           <input id="email" name="email" value="{{$email}}" hidden>
                           <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                           @error('password')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror

                           <!--<br>
                           <div class="form-check">
                              <input name="remember" id="remember" class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="" {{ old('remember') ? 'checked' : '' }}>
                              <label class="form-check-label" for="flexCheckDefault">
                              {{ __('Remember Me') }}
                              </label>
                           </div>-->
                           <br>
                           @endif

                           @if($step == 2)
                           <center><button type="submit" class="btn btn-primary" style="width:50%;margin-bottom:10px;">
                            {{ __('Login') }}
                            </button></center>
                           @endif

                           @if($step == 1)
                           <center><br>
                               <p>Or sign in with Google</p>
                            <img class="mb-3" src="https://media.discordapp.net/attachments/760701188030857223/765223635572621372/googlelogo_color_272x92dp.png" alt="" width="72">
                           </center>
                           @endif
                           @if($step == 2)
                           <br><br>
                           @if (Route::has('password.request'))
                           <center>
                           <a href="{{ route('password.request') }}" style="text-decoration:none;">
                           {{ __('Forgot Your Password?') }}
                           </a>
                           </center>
                           @endif
                           @endif
                        </div>
                     </div>
                  </form>
            <!-- Login Card -->
         </div>
      </div>
   </div>
</div>
