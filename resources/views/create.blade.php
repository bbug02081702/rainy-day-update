@extends('layout')
@section('content')
   <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Them girl</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('girls.index')}}" class="btn btn-primary float-end">Danh sach girl</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('girls.store')}}" method="post">
                    @csrf
                    <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <strong>Ho ten</strong>
                                <input type="text" name="fullname" class="form-control" placeholder="Nhap ho va ten" id="" require>
                            </div>
                            <div class="form-group">
                                <strong>Ngay sinh</strong>
                                <input type="date" name="dateofbirth" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <strong>Nganh hoc</strong>
                                <input type="text" name="marjors" class="form-control" id="" placeholder="Nhap nganh hoc">
                            </div>
                            <div class="form-group">
                                <strong>Nam hoc</strong>
                                <input type="number" name="year" class="form-control" id="" placeholder="Nhap nam hoc">
                            </div>
                            <div class="form-group">
                                <strong>So dien thoai</strong>
                                <input type="text" name="phone" class="form-control" placeholder="Nhap so dien thoai" id="">
                            </div>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Luu</button>
                </form>
            </div>
        </div>
   </div>


@endsection