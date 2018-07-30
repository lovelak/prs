@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <?= link_to('books/create', $title='เพิ่มข้อมูล', ['class' => 'btn btn-primary'], $secure=null); ?>
            <hr>
            <dov class="panel panel-default">
                <div class="panel-heading">แสดงข้อมูลหนังสือ จำนวนทั้งหมด {{ $books->total() }}</div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <tr>
                            <th>รหัส</th>
                            <th>ชื่อหนังสือ</th>
                            <th>ราคา</th>
                            <th>หมวดหนังสือ</th>
                            <th>รูปภาพ</th>
                            <th>แก้ไข</th>
                            <th>ลบ</th>
                        </tr>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->book_id }}</td>
                            <td>{{ $book->book_title }}</td>
                            <td>{{ number_format($book->book_price,2) }}</td>
                            <td>{{ $book->typebooks->typebook_name }}</td>
                            <td>
                                <a href="{{ asset('images/'.$book->book_image)}}"><img src="{{ asset('images/resize/'.$book->book_image) }}"></a>
                            </td>
                            <td>
                                <a href="{{ url('/books/'.$book->book_id.'/edit') }}"><button class="btn btn-warning">แก้ไข</button></a>
                            </td>
                            <td>
                                {!! Form::open(array('url' => 'books/'.$book->book_id, 'method' => 'delete')) !!}
                                <button class="btn btn-danger">
                                    ลบ
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <br>
                    {!! $books->render() !!}
                </div>
            </dov>
        </div>
    </div>
</div>
@endsection