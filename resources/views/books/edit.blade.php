@extends('layouts.app')

@section('content')
<div class="container">
    @if (count($errors) > 0)
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    แก้ไขข้อมูลหนังสือ {{ $book->book_title }}
                </div>
                <div class="panel-body">
                    {!! Form::model($book, array('url' => 'books/'.$book->book_id, 'method' => 'put')) !!}
                    <div class="col-xs-8">
                        <div class="form-group">
                            {!! Form::label('book_title', 'ชื่อหนังสือ') !!}
                            {!! Form::text('book_title', null, ['class' => 'form-control', 'placeholder' => 'ชื่อหนังสือ']); !!}
                        </div>
                    </div>
                    
                    <div class="col-xs-4">
                        <div class="form-group">
                            {!! Form::label('book_price', 'ราคา') !!}
                            {!! Form::text('book_price', null, ['class' => 'form-control', 'placeholder' => 'เช่น 100, 100.25']); !!}
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="form-group">
                            {!! Form::label('typebooks_id', 'ประเภทหนังสือ') !!}
                            {!! Form::select('typebooks_id', App\Typebook::pluck('typebook_name', 'typebook_id'), null, ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกประเภทหนังสือ']); !!}
                        </div>
                    </div>

                    {{--  <div class="col-xs-4">
                        <div class="form-group">
                            {!! Form::label('book_image', 'รูปภาพ') !!}
                            {!! Form::file('book_image', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>  --}}

                    
                    <div class="form-group">
                        <div class="col-sm-10">
                            {!! Form::submit('บันทึก', ['class' => 'btn btn-primary']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



{{--  @section('footer')
@if (Session::has('status'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('status') }}</p>
    <script>
        alert("ddddd");
        swal({
            title: "<?php echo session()->get('status'); ?>",
            text: "ผลการทำงาน",
            timer: 2000,
            type: 'success',
            showConfirmButton: false
        });
    </script>
@endif
@endsection  --}}