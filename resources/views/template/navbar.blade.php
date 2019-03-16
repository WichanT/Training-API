                <!-- Navbar -->
                <nav id="default-navbar" class="navbar navbar-expand navbar-light bg-light m-0">
                    <div class="container-fluid">
                        <!-- Toggle sidebar -->
                        <button class="navbar-toggler d-block" data-toggle="sidebar" type="button">
                            <span class="material-icons">menu</span>
                        </button>
                        <!-- Brand -->
                        <a href="{{url('/')}}" class="navbar-brand">
                            <img src="{{asset('assets/images/MMTh_logo_full.png')}}" id="img_1" class="d-none d-xs-md-block" alt=""  style="width:250px;"/>
                        </a>   
                        
                        <div class="flex"></div> 
                        <!-- Menu -->
                        <ul class="nav navbar-nav flex-nowrap d-none d-lg-flex">
                            <li class="nav-item active" @if($showpage=="") style="border-bottom:2px solid red;" @endif>
                                <a class="nav-link" href="{{url('/')}}" id="lnk_1">หนัาหลัก</a>
                            </li> 
                            <li class="nav-item active" @if($showpage=="news") style="border-bottom:2px solid red;" @endif>
                                <a href="{{url('/news')}}" class="nav-link" id="lnk_2">ข่าวประชาสัมพันธ์</a>
                            </li> 
                            <li class="nav-item active"  @if($showpage=="positions") style="border-bottom:2px solid red;" @endif>
                                <a href="{{url('/positions')}}" class="nav-link" id="lnk_3">พนักงาน</a>
                            </li> 
                            <li class="nav-item active" @if($showpage=="courses") style="border-bottom:2px solid red;" @endif>
                                <a href="{{url('/courses')}}" class="nav-link" id="lnk_4">ลงทะเบียนอบรม</a>
                            </li> 
                            <li class="nav-item active" @if($showpage=="orders") style="border-bottom:2px solid red;" @endif>
                                <a href="{{url('/orders')}}" class="nav-link" id="lnk_5">จัดการการจอง</a>
                            </li> 
                            <li class="nav-item active" @if($showpage=="reports") style="border-bottom:2px solid red;" @endif>
                                <a href="{{url('/reports')}}" class="nav-link" id="lnk_6">รายงาน</a>
                            </li>  
                        </ul>

                        <!-- Menu -->
                        <ul class="nav navbar-nav flex-nowrap">

                            <!-- User dropdown -->
                            <li class="nav-item dropdown ml-1 ml-md-3">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"> 
                                    <img src="{{asset('assets/images/admin.png')}}" id="img_4" alt="" class="rounded-circle" width="40">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#" id="lnk_user">
                                        <i class="material-icons">person_outline</i> {{ Session::get('fullName') }}
                                    </a>  
                                    <a class="dropdown-item" href="{{url('/logout')}}" id="lnk_logout">
                                        <i class="material-icons">lock</i> ออกจากระบบ
                                    </a> 
                                </div>
                            </li>
                            <!-- // END User dropdown -->

                        </ul>
                        <!-- // END Menu -->
                    </div>
                </nav>
                <!-- // END Navbar -->