@extends('template.main')
@section('js')
<script type="text/javascript">
    $('.modal').parent().on('show.bs.modal', function (e) { $(e.relatedTarget.attributes['data-target'].value).appendTo('body'); })
</script>
@endsection
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
    <li class="breadcrumb-item active">ข้อมูลการจอง</li>
</ol>

@endsection
@section('content')
<div class="media align-items-center">
    <div class="media-body">
        <h2 class="card-title">จัดการข้อมูลการจอง</h2>
        <p class="card-subtitle">เปลี่ยนแปลง ยกเลิก แก้ไขรายละเอียดการจอง   </p>
    </div>  
</div>
@include('template.error')

<div class="card" style="margin-top:20px;">

    <div class="card-header">
        <div class="media align-items-center">
            <div class="media-body">
                <h4 class="card-title">T-STEP II Engine System</h4>
                <div><i class="material-icons">location_on</i> สถาบันการศึกษาและฝึกอบรม</div>
                <div><i class="material-icons">calendar_today</i> 18-26 มีนาคม 2562</div>
                <div><i class="material-icons">access_time</i> 09:00-17:00 น.</div>
                <div><i class="material-icons">supervisor_account</i> 5 คน</div>
            </div>
            <div class="media-right" style="width:50px;">
                <a href="#" class="btn btn-white btn-sm mb-2"  data-toggle="modal" data-target="#myModal" data-backdrop="true"><i class="material-icons">create</i></a> 
                <a href="#" class="btn btn-white btn-sm mb-2"><i class="material-icons">delete</i></a> 
                <a href="#" class="btn btn-white btn-sm mb-2"><i class="material-icons">print</i></a> 
            </div>
        </div>
    </div> 
    <div class="card-body">
        <div class="row">
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                                <div style="text-align:center; margin-top:5px;">
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalD" data-backdrop="true"><i class="material-icons">create</i></a> 
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalU" data-backdrop="true"><i class="material-icons">delete</i></a>
                                </div>
                            </div>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div> 
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                                <div style="text-align:center; margin-top:5px;">
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalD" data-backdrop="true"><i class="material-icons">create</i></a> 
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalU" data-backdrop="true"><i class="material-icons">delete</i></a>
                                </div>
                            </div>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div> 
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                                <div style="text-align:center; margin-top:5px;">
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalD" data-backdrop="true"><i class="material-icons">create</i></a> 
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalU" data-backdrop="true"><i class="material-icons">delete</i></a>
                                </div>
                            </div>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div> 
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                                <div style="text-align:center; margin-top:5px;">
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalD" data-backdrop="true"><i class="material-icons">create</i></a> 
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalU" data-backdrop="true"><i class="material-icons">delete</i></a>
                                </div>
                            </div>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div> 
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                                <div style="text-align:center; margin-top:5px;">
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalD" data-backdrop="true"><i class="material-icons">create</i></a> 
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalU" data-backdrop="true"><i class="material-icons">delete</i></a>
                                </div>
                            </div>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div> 
        </div>
    </div>
</div> 

 
<div class="card" style="margin-top:20px;">

    <div class="card-header">
        <div class="media align-items-center">
            <div class="media-body">
                <h4 class="card-title">T-Master </h4>
                <div><i class="material-icons">location_on</i> สถาบันการศึกษาและฝึกอบรม</div>
                <div><i class="material-icons">calendar_today</i> 19-27 มีนาคม 2562</div>
                <div><i class="material-icons">access_time</i> 09:00-17:00 น.</div>
                <div><i class="material-icons">supervisor_account</i> 3 คน</div>
            </div>
            <div class="media-right" style="width:50px;">
                <a href="#" class="btn btn-white btn-sm mb-2"  data-toggle="modal" data-target="#myModal" data-backdrop="true"><i class="material-icons">create</i></a> 
                <a href="#" class="btn btn-white btn-sm mb-2"><i class="material-icons">delete</i></a> 
                <a href="#" class="btn btn-white btn-sm mb-2"><i class="material-icons">print</i></a> 
            </div>
        </div>
    </div> 
    <div class="card-body">
        <div class="row">
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                                <div style="text-align:center; margin-top:5px;">
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalD" data-backdrop="true"><i class="material-icons">create</i></a> 
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalU" data-backdrop="true"><i class="material-icons">delete</i></a>
                                </div>
                            </div>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div> 
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                                <div style="text-align:center; margin-top:5px;">
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalD" data-backdrop="true"><i class="material-icons">create</i></a> 
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalU" data-backdrop="true"><i class="material-icons">delete</i></a>
                                </div>
                            </div>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div> 
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <div class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                                <div style="text-align:center; margin-top:5px;">
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalD" data-backdrop="true"><i class="material-icons">create</i></a> 
                                <a href="#" class="btn btn-white btn-sm mb-2" data-toggle="modal" data-target="#myModalU" data-backdrop="true"><i class="material-icons">delete</i></a>
                                </div>
                            </div>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div> 
             
        </div>
    </div>
</div> 

 


<!-- The Modal -->
<div class="modal fade" id="myModal" style="margin-top:50px; margin-button:-50px;">
<div class="modal-dialog modal-xl">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">จัดการผู้เข้าอบรม เลือกผู้เข้าอบรมที่ต้องการยกเลิก</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body"> 
         <div class="row">
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header bg-danger">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div>
             
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div>
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div>
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div>
            <div class="col-md-4"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
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




<!-- The Modal -->
<div class="modal fade" id="myModalU" style="margin-top:50px; margin-button:-50px;">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">ต้องการลบข้อมูลผู้เข้าอบรมหรือไม่</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body">  
        <div class="row">
            <div class="col-md-12"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
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


<!-- The Modal -->
<div class="modal fade" id="myModalD" style="margin-top:50px; margin-button:-50px;">
<div class="modal-dialog">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">ต้องการเปลี่ยนแปลงผู้เข้าอบรมหรือไม่</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body">  
        <div class="row">
            <div class="col-md-12"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12" style="text-align:center; color:red;"> 
                <i class="material-icons" style="font-size:100px;">arrow_downward</i>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12"> 
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3">
                                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
                            </a>
                            <div class="flex">
                                <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
                                <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
                                <span class="badge badge-success">สาขารามอินทรา</span> 
                                <p class="mb-0">รหัสการลงทะเบียน</p>
                                <h2 style="margin:-10px 0 0 0; color:#DC3023;">XXAA88</h2>
                            </div>
                        </div>
                    </div>  
                </div> 
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