@extends('layout')
@section('content')
   <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sua girl</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('girls.index')}}" class="btn btn-primary float-end">Danh sach girl</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('girls.update', $girl->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                         <div class="col-md-6">
                            <div class="form-group">
                                <strong>Ho ten</strong>
                                <input type="text" name="fullname" value="{{$girl->fullname}}" class="form-control" placeholder="Nhap ho va ten" id="">
                            </div>
                            <div class="form-group">
                                <strong>Ngay sinh</strong>
                                <input type="date" name="dateofbirth" value="{{$girl->dateofbirth}}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <strong>Nganh hoc</strong>
                                <input type="text" name="marjors" value="{{$girl->marjors}}" class="form-control" id="" placeholder="Nhap nganh hoc">
                            </div>
                            <div class="form-group">
                                <strong>Nam hoc</strong>
                                <input type="number" name="year" value="{{$girl->year}}" class="form-control" id="" placeholder="Nhap nam hoc">
                            </div>
                            <div class="form-group">
                                <strong>So dien thoai</strong>
                                <input type="text" name="phone" value="{{$girl->phone}}" class="form-control" placeholder="Nhap so dien thoai" id="">
                            </div>
                         </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Cap nhat</button>
                </form>
            </div>
        </div>
   </div>


@endsection