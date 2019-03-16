@extends('template.main')
@section('js')
<script type="text/javascript">
    $('.modal').parent().on('show.bs.modal', function (e) { $(e.relatedTarget.attributes['data-target'].value).appendTo('body'); })
</script>
@endsection
@section('content') 
@include('template.error')
<div class="row">
    <div class="col-lg container-fluid page__container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
            <li class="breadcrumb-item active">บริการเสริม</li>
        </ol>
        <h1 class="h2">ข้อมูลบริการเสริม</h1>
        <p class="card-subtitle">โปรดเลือกบริการเสริมที่ท่านต้องการ</p>

        <div class="card card-body" style="margin-top:20px;"> 
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title">บริการเสริม</h4>
                    <p>ท่านต้องการบริการเสริมในการเข้าร่วมอบรมครั้งนี้หรือไม่</p>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="flex">
                        <label class="form-label" for="chk_01">กด Active เพื่อตอบใช่</label><br>
                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                            <input checked="" type="checkbox" id="chk_01" class="custom-control-input">
                            <label class="custom-control-label" for="chk_01">Yes</label>
                        </div>
                        <label class="form-label mb-0" for="chk_01">Yes</label>
                    </div>
                </div>
            </div>  
            
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title">ต้องการโรงแรม</h4>
                    <p>ท่านต้องการโรงแรมที่พักระหว่างการเข้าฝึกอบรมด้วยหรือไม่</p>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="flex">
                        <label class="form-label" for="chk_02">กด Active เพื่อตอบใช่</label><br>
                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                            <input checked="" type="checkbox" id="chk_02" class="custom-control-input">
                            <label class="custom-control-label" for="chk_02">Yes</label>
                        </div>
                        <label class="form-label mb-0" for="chk_02">Yes</label>
                    </div>
                </div>
            </div> 
            
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title">รถบริการรับส่ง</h4>
                    <p>ท่านต้องการรถเพื่อบริการรับส่งไปยังสถานที่จัดอบรมหรือไม่</p>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="flex">
                        <label class="form-label" for="chk_03">กด Active เพื่อตอบใช่</label><br>
                        <div class="custom-control custom-checkbox-toggle custom-control-inline mr-1">
                            <input checked="" type="checkbox" id="chk_03" class="custom-control-input">
                            <label class="custom-control-label" for="chk_03">Yes</label>
                        </div>
                        <label class="form-label mb-0" for="chk_03">Yes</label>
                    </div>
                </div>
            </div>  
        </div> 

        <h1 class="h2">พนักงานที่ต้องการที่พัก</h1>
        <p class="card-subtitle">โปรดเลือกรายชื่อพนักงานที่ต้องการที่พักและกำหนดวันที่เข้าพัก </p>         
        <div class="row">
        <div class="col-md-6">
            <div class="card bg-primary">
                <div class="card-header" style="background-color:#BDC3C7;">
                    <div class="d-flex align-items-center">
                        <a href="#" class="mr-3" data-toggle="modal" data-target="#myModal" data-backdrop="true">
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
        <div class="col-md-6">
            <div class="card bg-primary">
                <div class="card-header" style="background-color:#BDC3C7;">
                    <div class="d-flex align-items-center">
                        <a href="#" class="mr-3" data-toggle="modal" data-target="#myModal" data-backdrop="true">
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
        <div class="col-md-6">
            <div class="card bg-primary">
                <div class="card-header" style="background-color:#BDC3C7;">
                    <div class="d-flex align-items-center">
                        <a href="#" class="mr-3" data-toggle="modal" data-target="#myModal" data-backdrop="true">
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
                <h4 class="ml-4 mb-1">ลงทะเบียนร่วมอบรม</h4>
                <ul class="nav page-nav__menu">
                    <li class="nav-item">
                        <a href="{{url('/courses')}}" class="nav-link active">หลักสูตร <br><small>Sale Consultant & CRO Courses</small></a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/subjects')}}" class="nav-link active">วิชา<br>
                        <small>T-STEP II Engine System</small>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('calendars')}}" class="nav-link active" >รอบอบรม <br>
                        <small>21-29 มี.ค.2562 เวลา 09:00-17:00 น.</small>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">ผู้เข้าอรมรม<br>
                        <small>สามารถ เรียนรู้ไว, สามารถ เรียนรู้ไว, สามารถ เรียนรู้ไว</small>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active">บริการเสริม<br>
                        <small>บริการโรงแรม 22-28 มีนาคม 2562</small>
                        </a>
                    </li>
                </ul> 
                <a href="{{url('/orders')}}" class="btn btn-danger" style="width:80%; margin-left:35px;">ลงทะเบียน</a>
            </div>
        </div>
    </div>
</div>


<!-- The Modal -->
<div class="modal fade" id="myModal" style="margin-top:50px; margin-button:-50px;">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">เลือกวันที่เข้าพัก</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body">  
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input id="chk_05" type="checkbox" class="custom-control-input" checked>
                <label for="chk_05" class="custom-control-label">เข้าพักวันที่ 21 มีนาคม 2562</label>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input id="chk_06" type="checkbox" class="custom-control-input" checked>
                <label for="chk_06" class="custom-control-label">เข้าพักวันที่ 22 มีนาคม 2562</label>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input id="chk_07" type="checkbox" class="custom-control-input" checked>
                <label for="chk_07" class="custom-control-label">เข้าพักวันที่ 23 มีนาคม 2562</label>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input id="chk_08" type="checkbox" class="custom-control-input" checked>
                <label for="chk_08" class="custom-control-label">เข้าพักวันที่ 24 มีนาคม 2562</label>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input id="chk_09" type="checkbox" class="custom-control-input" checked>
                <label for="chk_09" class="custom-control-label">เข้าพักวันที่ 25 มีนาคม 2562</label>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input id="chk_10" type="checkbox" class="custom-control-input" checked>
                <label for="chk_10" class="custom-control-label">เข้าพักวันที่ 26 มีนาคม 2562</label>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input id="chk_11" type="checkbox" class="custom-control-input" checked>
                <label for="chk_11" class="custom-control-label">เข้าพักวันที่ 27 มีนาคม 2562</label>
            </div>
        </div>
        <div class="form-group">
            <div class="custom-control custom-checkbox">
                <input id="chk_12" type="checkbox" class="custom-control-input" checked>
                <label for="chk_12" class="custom-control-label">เข้าพักวันที่ 28 มีนาคม 2562</label>
            </div>
        </div>
    </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success" data-dismiss="modal">บันทึกข้อมูล</button> 
      <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button> 
    </div>
  </div>
</div>
</div>
@endsection