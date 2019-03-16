@extends('template.main')
@section('js')
<script type="text/javascript">
    $('.modal').parent().on('show.bs.modal', function (e) { $(e.relatedTarget.attributes['data-target'].value).appendTo('body'); })
</script>
@endsection 
@section('content') 
@include('template.error')
<div style="margin-top:20px;">
    <div> 
        <div class="card card-body border-left-3 border-left-primary navbar-shadow mb-4">
            <form action="#" id="frm_2">
                <div class="d-flex flex-wrap2 align-items-center mb-headings">
                    <div class="flex search-form mr-3 search-form--light">
                        <input type="text" class="form-control" placeholder="ค้นหาพนักงาน" id="txt">
                        <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                    </div> 
                    <button class="btn btn-dark ml-3"><i class="material-icons">location_on</i> ทุกสาขา</button>
                </div>
 
            </form>
        </div>  
    </div>
    <div class="row">
        <div class="col-md-4"> 
            <div class="card">
                <div class="card-header">
                    <div class="media align-items-center">
                        <div class="media-body">
                            <p class="card-subtitle">ตำแหน่ง</p>
                            <h4 class="card-title">Sales</h4>
                        </div>
                        <div class="media-right">
                            <p class="card-subtitle">จำนวน</p>
                            <h4 class="card-title">20</h4> 
                        </div>
                    </div>
                </div>
                <p class="ml-3 mb-0">จำนวนผู้ผ่านการอบรมแต่ละวิชา</p>
                <ul class="list-group list-group-fit mb-0" style="z-index: initial;">
                    <li class="list-group-item" style="z-index: initial;">
                        <div class="d-flex align-items-center"> 
                            <span class="material-icons mr-3">comment</span> 
                            <div class="flex">
                                <strong>Sale Consultant-STEP I</strong>
                                <div class="d-flex align-items-center">
                                    <div class="progress" style="width: 100%;">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted ml-2">100%</small>
                                </div>
                            </div> 
                        </div>
                    </li>
                    <li class="list-group-item" style="z-index: initial;">
                        <div class="d-flex align-items-center"> 
                            <span class="material-icons mr-3">comment</span> 
                            <div class="flex">
                                <strong>Sale Consultant II</strong>
                                <div class="d-flex align-items-center">
                                    <div class="progress" style="width: 100%;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <small class="text-muted ml-2">50%</small>
                                </div>
                            </div> 
                        </div>
                    </li>
                </ul>
            </div>
        </div> 
        <div class="col-md-8">
            <div class="row"> 
                <div class="card col-md-6">
                    <div class="card-header">
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
                    
                    <ul class="list-group list-group-fit"> 
                        <li class="list-group-item">
                            <a href="#" class="text-body text-decoration-0 d-flex align-items-center">
                                <strong>Getting started with Node</strong>
                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                            </a>
                        </li>
                    </ul>
                </div> 
                
                <div class="card col-md-6">
                    <div class="card-header">
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
                    
                    <ul class="list-group list-group-fit"> 
                        <li class="list-group-item">
                            <a href="#" class="text-body text-decoration-0 d-flex align-items-center">
                                <strong>Getting started with Node</strong>
                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                            </a>
                        </li>
                    </ul>
                </div> 
                
                <div class="card col-md-6">
                    <div class="card-header">
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
                    
                    <ul class="list-group list-group-fit"> 
                        <li class="list-group-item">
                            <a href="#" class="text-body text-decoration-0 d-flex align-items-center">
                                <strong>Getting started with Node</strong>
                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                            </a>
                        </li>
                    </ul>
                </div> 
                
                <div class="card col-md-6">
                    <div class="card-header">
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
                    <ul class="list-group list-group-fit">
                        <li class="list-group-item">
                            <a href="#" class="text-body text-decoration-0 d-flex align-items-center">
                                <strong>Getting started with Node</strong>
                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                            </a>
                        </li>
                    </ul>
                </div> 
                
                <div class="card col-md-6">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="#" class="mr-3"  data-toggle="modal" data-target="#myModal" data-backdrop="true">
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
                                <strong>Getting started with Node</strong>
                                <i class="material-icons text-muted ml-auto" style="font-size: inherit;">check</i>
                            </a>
                        </li>
                    </ul>
                </div> 
            </div>
        </div> 
    </div>
</div>


<!-- The Modal -->
<div class="modal fade" id="myModal" style="margin-top:50px; margin-button:-50px;">
<div class="modal-dialog  modal-lg">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title">สามารถ เรียนรู้ไว</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body">  
        <div style="text-align:center;">  
            <div>
                <img src="{{asset('assets/images/admin.png')}}" alt="" class="rounded" width="100">
            </div>
            <h4 class="card-title mb-0">สามารถ เรียนรู้ไว</h4>
            <span class="badge badge-info">ผู้จัดการฝ่ายขาย</span>
            <span class="badge badge-success">สาขารามอินทรา</span>
        </div>
        <br>
        <div class="container-fluid">
            <div class="row">
              <div class="col-md-3" style="text-align:center;">
                    <div>
                        <img src="{{asset('assets/images/p1.png')}}" alt="" class="rounded" width="100">
                    </div>
                    <div style="line-height:12px;">Sale Consultant Step I</div>
                    <span class="badge badge-success">2019-03-07</span>
              </div> 
              <div class="col-md-3" style="text-align:center;">
                    <div>
                        <img src="{{asset('assets/images/p2.png')}}" alt="" class="rounded" width="100">
                    </div>
                    <div style="line-height:12px;">Sale Consultant Step II</div>
                    <span class="badge badge-success">2019-03-07</span>
              </div> 
              <div class="col-md-3" style="text-align:center;">
                    <div>
                        <img src="{{asset('assets/images/p3.png')}}" alt="" class="rounded" width="100">
                    </div>
                    <div style="line-height:12px;">Sale Consultant Step III</div>
                    <span class="badge badge-success">2019-03-07</span>
              </div>  
              <div class="col-md-3" style="text-align:center;">
                    <div>
                        <img src="{{asset('assets/images/p3.png')}}" alt="" class="rounded" width="100">
                    </div>
                    <div style="line-height:12px;">Sale Consultant Step IV</div>
                    <span class="badge badge-success">2019-03-07</span>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-3" style="text-align:center;">
                    <div>
                        <img src="{{asset('assets/images/p4.png')}}" alt="" class="rounded" width="100">
                    </div>
                    <div style="line-height:12px;">CRO-Step I</div>
                    <span class="badge badge-danger">ส่งอบรม</span>
              </div> 
              <div class="col-md-3" style="text-align:center;">
                    <div>
                        <img src="{{asset('assets/images/p1.png')}}" alt="" class="rounded" width="100">
                    </div>
                    <div style="line-height:12px;">CRO-Step II</div>
                    <span class="badge badge-danger">ส่งอบรม</span>
              </div>  
            </div>
        </div>
    </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
    </div>
  </div>
</div>
</div>
@endsection
 