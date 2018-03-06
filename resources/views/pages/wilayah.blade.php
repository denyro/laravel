@extends('admin')
@section('header', 'Wilayah')
@section('description', 'pemenangan')
@section('content')
<div class="col-md-8">
          <!-- MAP & BOX PANE -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Visitors Report</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="row">
                <div class="col-md-9 col-sm-8">
                  <div class="pad">
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 325px;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-4">
                  <div class="pad box-pane-right bg-green" style="min-height: 280px">
                    <div class="description-block margin-bottom">
                      <div class="sparkbar pad" data-color="#fff">90,70,90,70,75,80,70</div>
                      <h5 class="description-header">8390</h5>
                      <span class="description-text">Visits</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block margin-bottom">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">30%</h5>
                      <span class="description-text">Referrals</span>
                    </div>
                    <!-- /.description-block -->
                    <div class="description-block">
                      <div class="sparkbar pad" data-color="#fff">90,50,90,70,61,83,63</div>
                      <h5 class="description-header">70%</h5>
                      <span class="description-text">Organic</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.box-body -->
          </div>
@endsection
@section('appjs')
<!-- Sparkline -->
<script src="{{{ URL::asset('theadmin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}}"></script>
<!-- jvectormap  -->
<script src="{{{ URL::asset('theadmin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}}"></script>
<script src="{{{ URL::asset('theadmin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}}"></script>
<!-- SlimScroll -->
<script src="{{{ URL::asset('theadmin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}}"></script>
<!-- ChartJS -->
<script src="{{{ URL::asset('theadmin/bower_components/Chart.js/Chart.js')}}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{{ URL::asset('theadmin/dist/js/pages/dashboard2.js')}}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{{ URL::asset('theadmin/dist/js/demo.js')}}}"></script>
@endsection