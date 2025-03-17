<div class="page-single">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-8 col-xs-10 card-sigin-main py-45 justify-content-center mx-auto">
                <div class="card-sigin mt-5 mt-md-0">
                    <!-- Demo content-->
                    <div class="main-card-signin d-md-flex">
                        <div class="wd-100p">
                            <div class="d-flex mb-4"><a href="{{url('index')}}"><img src="{{asset('assets/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a></div>
                            <div class="">
                                <div class="main-signup-header">
                                    <h2 class="text-dark">Get Started</h2>
                                    <h6 class="font-weight-normal mb-4">It's free to signup and only takes a minute.</h6>
                                    @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif
                                    @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                    @endif
                                    <form wire:submit.prevent="submit">
                                        <div class="form-group">
                                            <label>Firstname &amp; Lastname</label> <input wire:model="name" class="form-control" placeholder="Enter your firstname and lastname" type="text">
                                            <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label> <input wire:model="email" class="form-control" placeholder="Enter your email" type="text">
                                            <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label> <input wire:model="password" class="form-control" placeholder="Enter your password" type="password">
                                            <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                            <!-- button -->
                                        </div><button class="btn btn-primary btn-block" type="submit">Create Account</button>
                                        <div class="mt-4 d-flex mx-auto text-center justify-content-center">
                                            <button class="btn btn-icon btn-facebook me-3" type="button">
                                                <span class="btn-inner--icon"> <i class="bx bxl-facebook tx-18 tx-prime"></i> </span>
                                            </button>
                                            <button class="btn btn-icon me-3" type="button">
                                                <span class="btn-inner--icon"> <i class="bx bxl-twitter tx-18 tx-prime"></i> </span>
                                            </button>
                                            <button class="btn btn-icon me-3" type="button">
                                                <span class="btn-inner--icon"> <i class="bx bxl-linkedin tx-18 tx-prime"></i> </span>
                                            </button>
                                            <button class="btn  btn-icon me-3" type="button">
                                                <span class="btn-inner--icon"> <i class="bx bxl-instagram tx-18 tx-prime"></i> </span>
                                            </button>
                                        </div>
                                    </form>
                                    <div class="main-signup-footer mt-3 text-center">
                                        <p>Already have an account? <a href="{{url('auth/login')}}">Sign In</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>