@extends('template.main')
@section('content') 
@include('template.error')
<div class="row">
    <div class="col-lg container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">ข้อมูลหลักสูตร</li>
        </ol>
        <div style="text-align:center;">
            <h1 class="h2">ข้อมูลหลักสูตร</h1>
            <p class="card-subtitle">โปรดเลือกหลักสูตรที่ท่านต้องการเข้าร่วมอบรม</p>
        </div>

        <div class="card-group" style="margin-top:20px;">
            <div class="row">
                @foreach($courseTypeTopList as $course)
                    <div class="card col-md-4">
                        <a href="{{url('/subjects?courseCode='.$course['courseTypeTopCode'].'&courseName='.$course['courseTypeTopName'])}}">
                            <img src="{{$course['courseTypeTopImg']}}" alt="{{$course['courseTypeTopName']}}" style="width:100%;">
                        </a> 
                        <div class="card-body"> 
                            <h5 class="mb-0">{{$course['courseTypeTopName']}}</h5>
                        </div>
                    </div> 
                @endforeach 
                @foreach($courseTypeList as $course)
                    <div class="card col-md-4">
                        <a href="{{url('/subjects?courseCode='.$course['courseTypeId'].'&courseName='.$course['courseTypeName'])}}">
                            <img src="{{$course['courseTypeImg']}}" alt="{{$course['courseTypeName']}}" style="width:100%;">
                        </a> 
                        <div class="card-body"> 
                            <h5 class="mb-0">{{$course['courseTypeName']}}</h5>
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
                <ul class="nav page-nav__menu" style="list-style-type: none;">
                    <li class="nav-item" style="border-left:2px solid red; border-bottom:1px solid #ccc;">
                        <a href="{{url('/courses')}}" class="nav-link active" id="lnk_course">หลักสูตร <br/>
                        <small>-</small></a>
                    </li>
                    <li class="nav-item" style="border-bottom:1px solid #ccc;">
                        <a href="#" class="nav-link active" id="lnk_subject">วิชา <br/>
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