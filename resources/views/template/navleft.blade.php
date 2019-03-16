
    <div class="mdk-drawer js-mdk-drawer" id="default-drawer">
        <div class="mdk-drawer__content ">
            <div class="sidebar sidebar-left sidebar-dark bg-dark o-hidden" data-perfect-scrollbar>
                <div class="sidebar-p-y">  
                    <!-- Account menu -->
                    <div class="sidebar-heading">Main Menu</div>
                    <ul class="sidebar-menu">
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#account_menu"  id="lnk_19">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person_outline</i>
                                ข้อมูลผู้ใช้งานระบบ
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu sm-indent collapse" id="account_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="#" id="lnk_10">
                                        <span class="sidebar-menu-text">ข้อมูลส่วนตัว</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="#" id="lnk_11">
                                        <span class="sidebar-menu-text">แก้ไขข้อมูลส่วนตัว</span>
                                    </a>
                                </li> 
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{url('/logout')}}" id="lnk_logout">
                                        <span class="sidebar-menu-text">ออกจากระบบ</span>
                                    </a>
                                </li>  
                            </ul>
                        </li>  
                        <li class="sidebar-menu-item">
                            <a class="sidebar-menu-button sidebar-js-collapse" data-toggle="collapse" href="#main_menu" id="lnk_13">
                                <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">vertical_split</i>
                                เมนูหลักระบบ
                                <span class="ml-auto sidebar-menu-toggle-icon"></span>
                            </a>
                            <ul class="sidebar-submenu sm-indent collapse" id="main_menu">
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{url('/news')}}" id="lnk_14">
                                        <span class="sidebar-menu-text">ข่าวประชาสัมพันธ์</span>
                                    </a>
                                </li>
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{url('/positions')}}" id="lnk_15">
                                        <span class="sidebar-menu-text">พนักงาน</span>
                                    </a>
                                </li> 
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{url('/courses')}}" id="lnk_16">
                                        <span class="sidebar-menu-text">การลงทะเบียนอบรม</span>
                                    </a>
                                </li> 
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{url('/orders')}}" id="lnk_17">
                                        <span class="sidebar-menu-text">จัดการการจอง</span>
                                    </a>
                                </li> 
                                <li class="sidebar-menu-item">
                                    <a class="sidebar-menu-button" href="{{url('/reports')}}" id="lnk_18">
                                        <span class="sidebar-menu-text">รายงาน</span>
                                    </a>
                                </li>  
                            </ul>
                        </li>  
                    </ul> 
                </div>
            </div>
        </div>
    </div>