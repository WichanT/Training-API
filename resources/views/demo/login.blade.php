@extends('template.blank')

@section('content')
    <form method="post" action="{{url('/dologin')}}"> 
    @csrf
    <div class="d-flex align-items-center" style="min-height: 100vh">
        <div class="col-sm-8 col-md-6 col-lg-4 mx-auto" style="min-width: 300px;">
            <div class="text-center mt-5 mb-1">
                <div class="">
                    <img src="{{asset('assets/images/logo1.png')}}" style="width:150px;" class="" alt="สถาบันการศึกษาและฝึกอบรม" />
                </div>
            </div>
            <div class="d-flex justify-content-center mb-5 navbar-light">
                <a href="{{url('/')}}" class="navbar-brand m-0">สถาบันการศึกษาและฝึกอบรม</a>
            </div>
            @include('template.error')
            <div class="card navbar-shadow">
                <div class="card-header text-center">
                    <h4 class="card-title">เข้าสู่ระบบ</h4>
                    <p class="card-subtitle">Access your account</p>
                </div>
                <div class="card-body">   
                    <form action="#" novalidate method="get">
                        <div class="form-group">
                            <label class="form-label" for="email">Your Username:</label>
                            <div class="input-group input-group-merge">
                                <input id="username" name="username" type="text" required="" class="form-control form-control-prepended" placeholder="Your Username">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="password">Your password:</label>
                            <div class="input-group input-group-merge">
                                <input id="password" name="password" type="password" required="" class="form-control form-control-prepended" placeholder="Your password">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="far fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary btn-block">เข้าสู่ระบบ</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center text-black-50">
                    Not yet a student? <a href="{{url('/')}}">กลับสู่หน้าหลัก</a>
                </div>
            </div>
        </div>
    </div> 
    </form>
@endsection