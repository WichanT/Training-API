@extends('template.main')
@section('content') 
@include('template.error')
<div class="row">
    <div class="col-lg container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">ข้อมูลรายวิชา</li>
        </ol>
        <h1 class="h2">ข้อมูลรายวิชา</h1>
        <p class="card-subtitle">โปรดเลือกรายวิชาที่ท่านต้องการเข้าร่วมอบรม</p>

        <div class="card-group" style="margin-top:20px;">
            <div class="row">
                @foreach($courseTopList as $course)
                <div class="card col-md-4 mr-2" style="width:100%;">
                    <a href="{{url('/calendars?courseCode='.$courseCode.'&courseName='.$courseName.'&subCode='.$course['courseTopCode'].'&subName='.$course['courseTopName'])}}" id="lnk_{{$course['courseTopCode']}}">
                        @if($course['courseTopImg'])
                        <img src="{{$course['courseTopImg']}}" id="img_{{$course['courseTopCode']}}" alt="{{$course['courseTopName']}}" style="width:100%;">
                        @else
                        <img src="{{asset('imgs/nopic.png')}}" id="img_{{$course['courseTopCode']}}" alt="{{$course['courseTopName']}}" style="width:100%;">
                        @endif
                    </a> 
                    <div class="card-body"> 
                        <h4 class="mb-0"> {{$course['courseTopName']}}</h4>
                           {{$course['courseTopDesc']}}<br>
                        <!--
                        <small class="text-muted">พนักงานที่สามารถเข้าอบรมได้</small><br>
                        
                        <div class="avatar-group">
                            <div class="avatar">
                                <img src="{{asset('/assets/images/u1.png')}}" alt="Avatar" class="avatar-img rounded-circle">
                            </div>
                            <div class="avatar">
                                <img src="{{asset('/assets/images/u2.png')}}" alt="Avatar" class="avatar-img rounded-circle">
                            </div>
                            <div class="avatar">
                                <img src="{{asset('/assets/images/u3.png')}}" alt="Avatar" class="avatar-img rounded-circle">
                            </div>
                            <div class="avatar">
                                <img src="{{asset('/assets/images/u4.png')}}" alt="Avatar" class="avatar-img rounded-circle">
                            </div> 
                            <div class="avatar">
                                <span class="avatar-title rounded-circle">+20</span>
                            </div>
                        </div>
                        -->
                    </div>
                </div>  
                @endforeach 
                @foreach($courseList as $course)
                <div class="card col-md-4 mr-2" style="width:100%;">
                    <a href="{{url('/calendars?courseCode='.$courseCode.'&courseName='.$courseName.'&subCode='.$course['courseCode'].'&subName='.$course['courseName'])}}" id="lnk_{{$course['courseCode']}}">
                        @if($course['courseImg'])
                        <img src="{{$course['courseImg']}}" id="img_{{$course['courseCode']}}" alt="{{$course['courseName']}}" style="width:100%;">
                        @else
                        <img src="{{asset('imgs/nopic.png')}}" id="img_{{$course['courseCode']}}" alt="{{$course['courseName']}}" style="width:100%;">
                        @endif
                    </a> 
                    <div class="card-body"> 
                        <h4 class="mb-0"> {{$course['courseName']}}</h4>
                           {{$course['courseDesc']}}<br>
                        <!--
                        <small class="text-muted">พนักงานที่สามารถเข้าอบรมได้</small><br>
                        
                        <div class="avatar-group">
                            <div class="avatar">
                                <img src="{{asset('/assets/images/u1.png')}}" alt="Avatar" class="avatar-img rounded-circle">
                            </div>
                            <div class="avatar">
                                <img src="{{asset('/assets/images/u2.png')}}" alt="Avatar" class="avatar-img rounded-circle">
                            </div>
                            <div class="avatar">
                                <img src="{{asset('/assets/images/u3.png')}}" alt="Avatar" class="avatar-img rounded-circle">
                            </div>
                            <div class="avatar">
                                <img src="{{asset('/assets/images/u4.png')}}" alt="Avatar" class="avatar-img rounded-circle">
                            </div> 
                            <div class="avatar">
                                <span class="avatar-title rounded-circle">+20</span>
                            </div>
                        </div>
                        -->
                    </div>
                </div>  
                @endforeach 
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
                    <li class="nav-item" style="border-left:2px solid red; border-bottom:1px solid #ccc;">
                        <a href="#" class="nav-link active" id="lnk_subject active">วิชา <br/>
                        <small>-</small>
                        </a>
                    </li>
                    <li class="nav-item" style="border-bottom:1px solid #ccc;">
                        <a href="#" class="nav-link active" id="lnk_calendar">รอบอบรม<br/>
                        <small>-</small></a>
                    </li>
                    <li class="nav-item" style="border-bottom:1px solid #ccc;">
                        <a href="#" class="nav-link active">ผู้เข้าอรมรม <br/>
                        <small>-</small></a>
                    </li>
                </ul> 
            </div>
        </div>
    </div>
</div>

@endsection