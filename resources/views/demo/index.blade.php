@extends('template.home')
@section('css')
    <style type="text/css"> 
        .cover-image-full > img {
          width: 100%;
        }
    </style>
@endsection
@section('home')
  <div class="cover-image-full">
    <img src="{{asset('assets/images/bg.jpg')}}" alt="Learning Cover" id="img_5" />
  </div>
@endsection