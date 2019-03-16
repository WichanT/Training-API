@extends('template.main')
@section('css')
    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/fullcalendar.css')}}">
@endsection
@section('js')
    <!-- Required by Calendar (fullcalendar) -->
    <script src="{{asset('assets/vendor/moment.min.js')}}"></script>
    <!-- Fullcalendar -->
    <script src="{{asset('assets/vendor/fullcalendar.min.js')}}"></script>
    <script src="{{asset('assets/vendor/th.js')}}"></script>
    <!-- Init -->
    <script type="text/javascript"> 
      $(document).ready(function() {
        $('#calendar').fullCalendar({
          lang: 'th',
          header: {
            left: 'prev,next, today',
            center: 'title',
            right: 'month' //,basicWeek,basicDay
          },
          defaultDate: '2019-03-01',
          navLinks: true, // can click day/week names to navigate views
          editable: false,
          eventLimit: true, // allow "more" link when too many events
          events: [ 
            @foreach($trainingMonthlyList as $cal)
                {
                  title: '{{$cal['startTime']}}-{{$cal['endTime']}} รับจำนวน {{$cal['canEnrollCount']??'-'}}',
                  start: '{{$cal['startDate']}}',
                  end: '{{$cal['endDate']}}',
                  @if($cal['canEnroll']=='Y')
                    @if($cal['regionCode']==1 || $cal['regionCode']==2 || $cal['regionCode']==5 || $cal['regionCode']==6)
                        color: '#DC3023', 
                    @else
                        color: '#264348', 
                    @endif
                  url: '/usersselect?courseCode={{$courseCode}}&courseName={{$courseName}}&subCode={{$subCode}}&subName={{$subName}}&trainCode={{$cal['trainingCode']}}&startDate={{$cal['startDate']}}&endDate={{$cal['endDate']}}&startTime={{$cal['startTime']}}&endTime={{$cal['endTime']}}',
                  @else
                  color: '#BFBFBF'
                  @endif
                }, 
            @endforeach
            /*
            {
              title: '09:00-17:00 สถานการศึกษาและฝึกอบรม (เต็ม)',
              start: '2019-03-18',
              end: '2019-03-27',
              color: '#BFBFBF'
            }, 
            {
              title: '09:00-17:00 สถานการศึกษาและฝึกอบรม (เหลือ 15 ที่นั่ง)',
              start: '2019-03-19',
              end: '2019-03-28',
              color: '#DC3023', 
              url: '/usersselect',
            },
            {
              title: '09:00-17:00 ศูนย์ฝึกอบรมส่วนภูมิภาค (เหลือ 15 ที่นั่ง)',
              start: '2019-03-21',
              end: '2019-03-30',
              color: '#264348', 
              url: '/usersselect',
            } 
            */
          ]
        });
    
      });
    
    </script>     
@endsection
@section('content') 
@include('template.error')
<div class="row">
    <div class="col-lg container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">ข้อมูลรอบการอบรม</li>
        </ol>
        <div style="text-align:center;">
        <h1 class="h2">ข้อมูลรอบการอบรม</h1>
        <p class="card-subtitle">โปรดเลือกรอบการอบรมที่ท่านต้องการ</p>
        </div>
        
        <div style="text-align:center;">
            <span style="background-color:#DC3023; widht:30px; height:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
            สถาบันการศึกษาและฝึกอบรม
            <span style="background-color:#264348; widht:30px; height:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
            ศูนย์ฝึกอบรมประจำภูมิภาค
        <div class="card-group" style="margin-top:20px;">
            </div>
            <div class="row"> 
                <!-- Calendar -->
                <div id="calendar"></div> 
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
                    <li class="nav-item" style="border-left:2px solid red; border-bottom:1px solid #ccc;">
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