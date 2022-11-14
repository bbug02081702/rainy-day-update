
@extends('layout')

@section('content')
   <div class="container">
    <div class="card">
        <div class="crad-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Quan ly girl</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('girls.create')}}" class="btn btn-primary float-end">Them moi</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if(Session::has('Thongbao'))
                <div class="alert alert-success">
                    {{Session::get('Thongbao')}}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ho ten</th>
                        <th>Ngay sinh</th>
                        <th>Nganh hoc</th>
                        <th>Nam hoc</th>
                        <th>So dien thoai</th>
                        <th>Thao tac</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($girl as $girl)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$girl->fullname}}</td>
                        <td>{{$girl->dateofbirth}}</td>
                        <td>{{$girl->marjors}}</td>
                        <td>{{$girl->year}}</td>
                        <td>{{$girl->phone}}</td>
                        <td>
                            <form action="{{route('girls.destroy', $girl->id)}}" method="post">
                                <a href="{{route('girls.edit',$girl->id)}}" class="btn btn-primary info">Sua</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Xoa</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
   </div>
@endsection