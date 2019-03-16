@extends('template.main')
@section('content') 
@include('template.error')
<div class="" style="margin-top:20px;">
    <div > 
        <div class="card card-body border-left-3 border-left-primary navbar-shadow mb-4">
            <form action="#" id="frm_1">
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
                            <p class="card-subtitle">พนักงานทั้งหมด</p>
                            <h4 class="card-title">All Employee</h4>
                        </div>
                        <div class="media-right">
                            <p class="card-subtitle">จำนวน</p>
                            <h4 class="card-title">400</h4> 
                        </div>
                    </div>
                </div>            
                <div class="chart">
                    <canvas id="devicesChart" class="chart-canvas"></canvas>
                </div>
            </div> 
        </div>
        <div class="col-md-4">
            <div class="card card-body border-left-3 border-left-primary navbar-shadow mb-1">
                <div class="media" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    <div class="media-body"> 
                        <div class="card-title">SALES</div>
                    </div>
                    <div class="media-right"> 
                        <div class="card-title"><i class="material-icons">person</i> 20</div> 
                    </div>
                </div>
            </div> 
            <div class="collapse" id="collapse1">
              <div class="card">
                <div class="card-body">
                    <img src="{{asset('/assets/images/coin.png')}}" style="width:100%;"></img>
                </div>
                <div class="card-footer">
                   <a href="{{url('/employee')}}" id="lnk_32"> รายละเอียด </a>
                </div>
              </div>
              
            </div>
            
            <div class="card card-body border-left-3 border-left-secondary navbar-shadow mb-1">
                <div class="media">
                    <div class="media-body"> 
                        <div class="card-title"><a href="{{url('/employee')}}" id="lnk_33">SERVICE ADVISOR</a></div>
                    </div>
                    <div class="media-right"> 
                        <div class="card-title"><i class="material-icons">person</i> 20</div> 
                    </div>
                </div>
            </div> 
            
            <div class="card card-body border-left-3 border-left-success navbar-shadow mb-1">
                <div class="media">
                    <div class="media-body"> 
                        <div class="card-title"><a href="{{url('/employee')}}"  id="lnk_34">FOREMAN</a></div>
                    </div>
                    <div class="media-right"> 
                        <div class="card-title"><i class="material-icons">person</i> 20</div> 
                    </div>
                </div>
            </div> 
            
            <div class="card card-body border-left-3 border-left-danger navbar-shadow mb-1">
                <div class="media">
                    <div class="media-body"> 
                        <div class="card-title"><a href="{{url('/employee')}}" id="lnk_35">ESTIMATOR</a></div>
                    </div>
                    <div class="media-right"> 
                        <div class="card-title"><i class="material-icons">person</i> 20</div> 
                    </div>
                </div>
            </div> 
            
            <div class="card card-body border-left-3 border-left-warning navbar-shadow mb-1">
                <div class="media">
                    <div class="media-body"> 
                        <div class="card-title"><a href="{{url('/employee')}}" id="lnk_36">PAINTING</a></div>
                    </div>
                    <div class="media-right"> 
                        <div class="card-title"><i class="material-icons">person</i> 20</div> 
                    </div>
                </div>
            </div> 
            <div class="card card-body border-left-3 border-left-info navbar-shadow mb-1">
                <div class="media">
                    <div class="media-body"> 
                        <div class="card-title"><a href="{{url('/employee')}}" id="lnk_37">SURFACE PREPARATION</a></div>
                    </div>
                    <div class="media-right"> 
                        <div class="card-title"><i class="material-icons">person</i> 20</div> 
                    </div>
                </div>
            </div> 
        </div>
        <div class="col-md-4"> 
            <div class="card card-body border-left-3 border-left-info navbar-shadow mb-1">
                <div class="media">
                    <div class="media-body"> 
                        <div class="card-title"><a href="{{url('/employee')}}" id="lnk_38">CRO</a></div>
                    </div>
                    <div class="media-right"> 
                        <div class="card-title"><i class="material-icons">person</i> 20</div> 
                    </div>
                </div>
            </div> 
            <div class="card card-body border-left-3 border-left-warning navbar-shadow mb-1">
                <div class="media">
                    <div class="media-body"> 
                        <div class="card-title"><a href="{{url('/employee')}}" id="lnk_38">PARTS STAFF</a></div>
                    </div>
                    <div class="media-right"> 
                        <div class="card-title"><i class="material-icons">person</i> 20</div> 
                    </div>
                </div>
            </div>
            
            <div class="card card-body border-left-3 border-left-danger navbar-shadow mb-1">
                <div class="media">
                    <div class="media-body"> 
                        <div class="card-title"><a href="{{url('/employee')}}" id="lnk_40">TECHNICIAN</a></div>
                    </div>
                    <div class="media-right"> 
                        <div class="card-title"><i class="material-icons">person</i> 20</div> 
                    </div>
                </div>
            </div>
            
            <div class="card card-body border-left-3 border-left-dark navbar-shadow mb-1">
                <div class="media">
                    <div class="media-body"> 
                        <div class="card-title"><a href="{{url('/employee')}}" id="lnk_41">BODY REPAIR</a></div>
                    </div>
                    <div class="media-right"> 
                        <div class="card-title"><i class="material-icons">person</i> 20</div> 
                    </div>
                </div>
            </div>
            
            <div class="card card-body border-left-3 border-left-success navbar-shadow mb-1">
                <div class="media">
                    <div class="media-body"> 
                        <div class="card-title"><a href="{{url('/employee')}}" id="lnk_42">COLOR MIXING</a></div>
                    </div>
                    <div class="media-right"> 
                        <div class="card-title"><i class="material-icons">person</i> 20</div> 
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>
@endsection

@section('js')

    <!-- Chart.js Samples -->
    <script>
        (function() {
            'use strict';

            Charts.init()
 
            var Devices = function(id, type = 'doughnut', options = {}) {
                options = Chart.helpers.merge({
                    tooltips: {
                        callbacks: {
                            title: function(a, e) {
                                return e.labels[a[0].index]
                            },
                            label: function(a, e) {
                                var t = "";
                                return t += '<span class="popover-body-value">' + e.datasets[0].data[a.index] + "%</span>"
                            }
                        }
                    }
                }, options)

                var data = {
                    labels: ["Sale", "Technicial", "Body And Paint"],
                    datasets: [{
                        data: [60, 25, 15],
                        backgroundColor: [settings.colors.primary[500], settings.colors.success[300], settings.colors.success[100]],
                        hoverBorderColor: "dark" == settings.charts.colorScheme ? settings.colors.gray[800] : settings.colors.white
                    }]
                }

                Charts.create(id, type, options, data)
            }
  

            Devices('#devicesChart')
  

        })();
         
        
    </script>
@endsection