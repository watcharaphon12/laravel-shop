<!doctype html>
<html lang="en">
 
@include('admin.header')

    <link href="{{url('assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{url('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/vendor/datatables/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/vendor/datatables/css/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/vendor/datatables/css/select.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/vendor/datatables/css/fixedHeader.bootstrap4.css')}}">
<body>
   
    <div class="dashboard-main-wrapper">
      
       @include('admin.navbar')

       @include('admin.sidebar')
     
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">ข้อมูลผู้ใช้</h2>
                                <div class="page-breadcrumb">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                    <!-- ============================================================== -->
                    <!-- data table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>
                          
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second " style="width:100%">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;width:10%">#</th>
                                                <th style="text-align: center;width:10%">รูป</th>
                                                <th style="text-align: center;width:10%">ID</th>
                                                <th style="text-align: center;width:10%">ชื่อ</th>
                                                <th style="text-align: center;width:10%">อีเมล</th>
                                                <th style="text-align: center;width:10%">วันที่สมัคร</th>
                                                <th style="text-align: center;width:10%">สถานะ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $row)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>รูป</td>
                                                <td>{{$row->id}}</td>
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->email}}</td>
                                                <td style="text-align: center;">{{$row->created_at}}</td>
                                                <td style="text-align: center;">
                                                @if($row->status=="A")
                                                <span class="badge badge-success">ใช้งาน</span>
                                                    @else
                                                    <span class="badge badge-danger">ยกเลิก</span>
                                                    @endif
                                               </td>
                                                
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                                </div>                     

{{ $data->links('pagination::bootstrap-5') }}
                 </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>
                </div>
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
    
                <!-- ============================================================== -->
                <!-- end footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end wrapper  -->
            <!-- ============================================================== -->
        </div>
    </div>
      @include('admin.footer');
</body>
<script src="{{url('assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <script src="{{url('assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{url('assets/vendor/multi-select/js/jquery.multi-select.js')}}"></script>
    <script src="{{url('assets/libs/js/main-js.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{url('assets/vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="{{url('assets/vendor/datatables/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{url('assets/vendor/datatables/js/data-table.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
</html>