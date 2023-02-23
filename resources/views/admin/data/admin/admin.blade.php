@extends('admin.layout.table')
@section('title','Users')
@section('content')
<div class="card-body">
    @section('tabletitle','ผู้ดูแลระบบ')
    <form id="search" method="GET" action="{{url('admin/data/admin')}}">
        @csrf
     <div class="row">
    <div class="col-md-5">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="ค้นหา">
            <div class="input-group-append"><button class="input-group-text" type="submit"><i class="fas fa-search"></i></button></div>
        </div>
    </div>
    <div class="col-md-5"></div>
    <div class="col-md-2">
        <select class="btn dropdown-toggle"  name="limit" onchange="document.getElementById('search').submit();">
            <option @isset($_GET['limit']) @if($_GET['limit']==10) selected @endif @endisset value="10">แสดง 10</option>
            <option @isset($_GET['limit'])  @if($_GET['limit']==25) selected @endif @endisset  value="25">แสดง 25</option>
            <option @isset($_GET['limit'])  @if($_GET['limit']==50) selected @endif  @endisset value="50">แสดง 50</option>
        </select>
    </div>
</div>
</form>
    <div class="table-responsive">
        <table class="table table-striped table-bordered first">
            <thead>
                <tr>
                    <th style="text-align: center;">#</th>
                    <th style="text-align: center;">รหัส</th>
                    <th style="text-align: center">ชื่อผู้ใช้</th>
                    <th style="text-align: center">ชื่อ</th>
                    <th style="text-align: center">สกุล</th>
                    <th style="text-align: center">เบอร์</th>
                    <th style="text-align: center">วันที่สมัคร</th>
                    <th style="text-align: center">สถานะ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td><a href="{{url('user',[ 'code' => $row->code ])}}">{{ $loop->iteration }}</a></td>
                        <td><img src="{{{asset('storage/images/data/user/img_avatar1.png')}}}" alt="Avatar" class="avatar"><a href="{{url('user',[ 'code' => $row->code ])}}">{{ $row->code }}</a></td>
                        <td><a href="{{url('user',[ 'code' => $row->code ])}}">{{ $row->username }}</a></td>
                        <td><a href="{{url('user',[ 'code' => $row->code ])}}">{{ $row->first_name }}</a></td>
                        <td><a href="{{url('user',[ 'code' => $row->code ])}}">{{ $row->last_name }}</a></td>
                        <td><a href="{{url('user',[ 'code' => $row->code ])}}">{{ $row->phone}}</a></td>
                        <td><a href="{{url('user',[ 'code' => $row->code ])}}">{{ $row->created_at}}</a></td>
                        <td style="text-align: center">
                            @if ($row->status == 'A')
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
    <div style="margin-top:10px">
    {{ $data->appends('limit',$_GET['limit']??10)->links('pagination::bootstrap-5') }}
</div>
</div>
@stop