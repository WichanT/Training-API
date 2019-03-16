@extends('template.main')

@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}">หน้าหลัก</a></li>
    <li class="breadcrumb-item active">รายงาน</li>
</ol>

@endsection
@section('content')
<div class="media align-items-center">
    <div class="media-body">
        <h2 class="card-title">รายงาน</h2>
        <p class="card-subtitle"></p>
    </div>  
</div>
@include('template.error')
<div style="margin-top:20px;">
    <div> 
        <div class="card card-body border-left-3 border-left-primary navbar-shadow mb-4">
            <form action="#">
                <div class="d-flex flex-wrap2 align-items-center mb-headings">
                    <div>  
                        <select name="" id="" class="form-control">
                            <option value="">สาขาทั้งหมด</option>
                        </select>
                    </div>
                    <div class="flex search-form ml-3 search-form--light">
                        <input type="text" class="form-control" placeholder="ค้นหาพนักงาน" id="searchSample02">
                        <button class="btn" type="button" role="button"><i class="material-icons">search</i></button>
                    </div>
                </div>
 
            </form>
        </div>        
        
    </div>
    <div class="row"> 
    
    </div>
</div>

@endsection
 