@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">แสดงข้อมูลประเภทหนังสือ [ทั้งหมด {{ $count }} รายการ]</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รหัส</th>
                            <th>ประเภทหนังสือ</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($typebooks as $typebook)
                        <tr>
                            <td>{{ $typebook->typebook_id }}</td>
                            <td>{{ $typebook->typebook_name }}</td>
                            <td><a href="{{ url('/typebooks/destroy/'.$typebook->typebook_id) }}"><button class="btn btn-danger">ลบ</button></a></td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $typebooks->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection