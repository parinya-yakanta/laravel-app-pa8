@extends('layouts.admins')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">List Members</div>

                <div class="card-body">
                    
                    <table class="table table-md-mini">
                        <thead>
                            <tr>
                                <th>รีวิว</th>
                                <th>รหัสลูกค้า</th>
                                <th>ชื่อลูกค้า</th>
                                <th>ประวัติการสั่งซื้อ</th>
                                <th>ประวัติการชำระเงิน</th>
                                <th>สถานะลูกค้า</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row"> 
                                    <a href="#">
                                        <i class="far fa-eye"></i>
                                    </a> 
                                </td>
                                <td>64-88554-01-8</td>
                                <td>นายปริญญา ยะคันทะ</td>
                                <td><button class="btn-xs btn-info"><i class="far fa-eye"></i> ดูรายการ</button></td>
                                <td><button class="btn-xs btn-success"><i class="far fa-eye"></i> ดูรายการ</button></td>
                                <td>VIP</td>
                            </tr>
                            <tr>
                                <td scope="row"> 
                                    <a href="#">
                                        <i class="far fa-eye"></i>
                                    </a> 
                                </td>
                                <td>64-45444-04-2</td>
                                <td>นายยะคันทะ ปริญญา</td>
                                <td><button class="btn-xs btn-info"><i class="far fa-eye"></i> ดูรายการ</button></td>
                                <td><button class="btn-xs btn-success"><i class="far fa-eye"></i> ดูรายการ</button></td>
                                <td>Normal</td>
                            </tr>
                            <tr>
                                <td scope="row"> 
                                    <a href="#">
                                        <i class="far fa-eye"></i>
                                    </a> 
                                </td>
                                <td>64-44455-08-3</td>
                                <td>นางโสมน อลเวง</td>
                                <td><button class="btn-xs btn-info"><i class="far fa-eye"></i> ดูรายการ</button></td>
                                <td><button class="btn-xs btn-success"><i class="far fa-eye"></i> ดูรายการ</button></td>
                                <td>Normal</td>
                            </tr>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
