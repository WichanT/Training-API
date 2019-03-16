@extends('template.main')
@section('css') 
@endsection
@section('js')
<script type="text/javascript">
    $('.modal').parent().on('show.bs.modal', function (e) { $(e.relatedTarget.attributes['data-target'].value).appendTo('body'); })
    function chValue(name, newsdate, newsimg, newsdetail){
        document.getElementById('NewsImg').src=newsimg;
        document.getElementById('NewsName').innerHTML=name;
        document.getElementById('NewsDate').innerHTML=newsdate;
        document.getElementById('NewsDetail').innerHTML=newsdetail;
        }
</script> 
@endsection
@section('breadcrumb')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{url('/')}}" id="lnk_17">หน้าหลัก</a></li>
    <li class="breadcrumb-item active">ข้อมูลผู้ใช้งาน</li>
</ol>

@endsection
@section('content')
<div class="media align-items-center">
    <div class="media-body" style="text-align:center;">
        <h2 class="card-title" style="color:black;">ข่าวประชาสัมพันธ์</h2>
        <p class="card-subtitle">เรื่องราว และกิจกรรมดี ๆ ของครอบครัวมิตซูบิชิ มอเตอร์ </p>
    </div>  
</div>
@include('template.error')

<div class="card-group" style="margin-top:20px;">
    <div class="row">
    @foreach($newsTopList as $news) 
    <div class="card col-md-6">
        <a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="true" id="lnk_{{$news['newsTopCode']}}" onMouseOver="chValue('{{$news['newsTopTitle']}}', '{{$news['displayDateTime']}}', '{{$news['newsTopImgCover']}}', '{{$news['newsTopDetail']}}')">
            @if($news['newsTopImgCover'])
            <img src="{{$news['newsTopImgCover']}}" alt="{{$news['newsTopTitle']}}" style="width:100%;" id="img_{{$news['newsTopCode']}}">
            @endif
        </a> 
        <div class="card-body"> 
            <h4 class="mb-0"><a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="true" id="lnk_19" style="color:black;"  onMouseOver="chValue('{{$news['newsTopTitle']}}', '{{$news['displayDateTime']}}', '{{$news['newsTopImgCover']}}', '{{$news['newsTopDetail']}}')">{{$news['newsTopTitle']}}</a></h4>
            <small class="">{{$news['displayDateTime']}}</small><br>
            {{$news['newsTopTitleDetail']}}
        </div>
    </div> 
    @endforeach

    @foreach($newsList as $news) 
    <div class="card col-md-3">
        <a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="true" id="lnk_{{$news['newsCode']}}" onMouseOver="chValue('{{$news['newsTitle']}}', '{{$news['displayDateTime']}}', '{{$news['newsImgCover']}}', '{{$news['newsDetail']}}')">
            @if($news['newsImgCover'])
            <img src="{{$news['newsImgCover']}}" alt="{{$news['newsTitle']}}" style="width:100%;" id="img_{{$news['newsCode']}}">
            @endif
        </a> 
        <div class="card-body"> 
            <h4 class="mb-0"><a href="#" data-toggle="modal" data-target="#myModal" data-backdrop="true" id="lnk_19" style="color:black;" onMouseOver="chValue('{{$news['newsTitle']}}', '{{$news['displayDateTime']}}', '{{$news['newsImgCover']}}', '{{$news['newsDetail']}}')">{{$news['newsTitle']}}</a></h4>
            <small class="">{{$news['displayDateTime']}}</small><br>
            {{$news['newsTitleDetail']}}
        </div>
    </div> 
    @endforeach
    
    </div>
</div> 

<!-- The Modal -->
<div class="modal fade" id="myModal">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
      <h4 class="modal-title" style="color:black;" id="NewsName"></h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <!-- Modal body -->
    <div class="modal-body"> 
        <div style="margin-top:-30px; margin-bottom:20px;" id="NewsDate"></div>
        
        <img src="" style="width:100%;" id="NewsImg"><br><br>
        <div id="NewsDetail"></div>

    </div>
    <!-- Modal footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
    </div>
  </div>
</div>
</div>
@endsection