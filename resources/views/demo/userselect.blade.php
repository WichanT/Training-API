@extends('template.main')
@section('content') 
@include('template.error')
<div class="row">
    <div class="col-lg container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">ข้อมูลผู้เข้าอบรม</li>
        </ol>
        <div style="text-align:center;">
        <h1 class="h2">ข้อมูลผู้เข้าอบรม</h1>
        <p class="card-subtitle">โปรเลือกผู้เข้าอบรมที่ต้องการ</p>
        </div>
        <div class="card-group" style="margin-top:20px;">
            
            <div class="row"> 
                <div class="card col-md-6 bg-primary">
                    <div class="card-header" style="background-color:#BDC3C7;">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span>
                                <br>
                                <p>หลักสูตรที่ผ่านการอบรมแล้ว</p>
                            </div>
                        </div>
                    </div> 
                    
                    <ul class="list-group list-group-fit" > 
                        <li class="list-group-item" style="background-color:#EEEEEE;">
                            <a href="#" class="text-body text-decoration-0 d-flex align-items-center">
                                <strong>Learn this course.</strong>
                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                            </a>
                        </li>
                    </ul>
                </div> 
                
                <div class="card col-md-6">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span>
                                <br>
                                <p>หลักสูตรที่ผ่านการอบรมแล้ว</p>
                            </div>
                        </div>
                    </div> 
                    
                    <ul class="list-group list-group-fit"> 
                        <li class="list-group-item">
                            <a href="#" class="text-body text-decoration-0 d-flex align-items-center">
                                <strong>Learn this course.</strong>
                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                            </a>
                        </li>
                    </ul>
                </div> 
                
                <div class="card col-md-6">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span>
                                <br>
                                <p>หลักสูตรที่ผ่านการอบรมแล้ว</p>
                            </div>
                        </div>
                    </div> 
                    
                    <ul class="list-group list-group-fit"> 
                        <li class="list-group-item">
                            <a href="#" class="text-body text-decoration-0 d-flex align-items-center">
                                <strong>Learn this course.</strong>
                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                            </a>
                        </li>
                    </ul>
                </div> 
                
                <div class="card col-md-6 bg-primary">
                    <div class="card-header" style="background-color:#BDC3C7;">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span>
                                <br>
                                <p>หลักสูตรที่ผ่านการอบรมแล้ว</p>
                            </div>
                        </div>
                    </div> 
                    
                    <ul class="list-group list-group-fit" > 
                        <li class="list-group-item" style="background-color:#EEEEEE;">
                            <a href="#" class="text-body text-decoration-0 d-flex align-items-center">
                                <strong>Learn this course.</strong>
                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                            </a>
                        </li>
                    </ul>
                </div> 
                
                <div class="card col-md-6">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span>
                                <br>
                                <p>หลักสูตรที่ผ่านการอบรมแล้ว</p>
                            </div>
                        </div>
                    </div>  
                    <ul class="list-group list-group-fit">
                        <li class="list-group-item">
                            <a href="#" class="text-body text-decoration-0 d-flex align-items-center">
                                <strong>Learn this course.</strong>
                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                            </a>
                        </li>
                    </ul>
                </div> 
                
                <div class="card col-md-6 bg-primary">
                    <div class="card-header" style="background-color:#BDC3C7;">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span>
                                <br>
                                <p>หลักสูตรที่ผ่านการอบรมแล้ว</p>
                            </div>
                        </div>
                    </div> 
                    
                    <ul class="list-group list-group-fit" > 
                        <li class="list-group-item" style="background-color:#EEEEEE;">
                            <a href="#" class="text-body text-decoration-0 d-flex align-items-center">
                                <strong>Learn this course.</strong>
                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                            </a>
                        </li>
                    </ul>
                </div> 
                
            </div>
        </div> 
    </div>
    <div id="page-nav" class="col-lg-auto page-nav">
        <div data-perfect-scrollbar>
            <div class="page-section pt-lg-32pt">
                <h4 class="ml-3 mb-1 pl-2" style="background-color:black; color:white; padding:5px;">ลงทะเบียนร่วมอบรม</h4>
                <ul class="nav page-nav__menu">
                    <li class="nav-item" style="border-bottom:1px solid #ccc;">
                        <a href="{{url('/courses')}}" class="nav-link active" id="lnk_course">หลักสูตร <br/>
                        <small>{{$courseName}}</small></a>
                    </li>
                    <li class="nav-item" style="border-bottom:1px solid #ccc;">
                        <a href="{{url('/subjects?courseCode='.$courseCode.'&courseName='.$courseName)}}" class="nav-link active" id="lnk_subject">วิชา <br/>
                        <small>{{$subName}}</small>
                        </a>
                    </li>
                    <li class="nav-item" style="border-bottom:1px solid #ccc;">
                        <a href="{{url('/calendar?courseCode='.$courseCode.'&courseName='.$courseName.'&subCode='.$subCode.'&subName='.$subName)}}" class="nav-link active" id="lnk_calendar">รอบอบรม<br/>
                        <small>วันที่ {{$startDate}} ถึง {{$endDate}}</small><br/>
                        <small>เวลา {{$startTime}}-{{$endTime}}</small>
                        </a>
                    </li>
                    <li class="nav-item" style="border-left:2px solid red; border-bottom:1px solid #ccc;">
                        <a href="#" class="nav-link">ผู้เข้าอรมรม <br/>
                        <small>-</small></a>
                    </li>
                </ul> 
            </div>
        </div>
    </div>
</div>

@endsection