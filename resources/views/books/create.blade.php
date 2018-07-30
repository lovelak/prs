@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">เพิ่มข้อมูลหนังสือ</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                    <div class="alert alert-warning">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    {!! Form::open(array('url' => 'books', 'files' => true)) !!}
                    <div class="col-xs-8">
                        <div class="form-group">
                            {!! Form::label('book_title', 'ชื่อหนังสือ'); !!}
                            {!! Form::text('book_title', null, ['class' => 'form-control', 'placeholder' => 'ชื่อหนังสือ']); !!}
                        </div>
                    </div>
                    
                    <div class="col-xs-4">
                        <div class="form-group">
                            {!! Form::label('book_price', 'ราคา'); !!}
                            {!! Form::text('book_price', null, ['class' => 'form-control', 'placeholder' => 'เช่น 100, 100.25']); !!}
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="form-group">
                            {!! Form::label('typebooks_id', 'ประเภทหนังสือ'); !!}
                            {!! Form::select('typebooks_id', App\TypeBook::pluck('typebook_name', 'typebook_id'), null, ['class' => 'form-control', 'placeholder' => 'กรุณาเลือกประเภทหนังสือ']); !!}
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="form-group">
                            {!! Form::label('book_image', 'รูปภาพ'); !!}
                            {!! Form::file('book_image', null, ['class' => 'form-control']); !!}
                        </div>
                    </div>

                    <div class="col-xs-4">
                        <div class="form-group">
                            {!! Form::submit('บันทึก', ['class' => 'btn btn-primary']); !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@if (session()->has('flash_message'))
<script>
    swal({
        title: "<?php echo session()->get('flash_message'); ?>",
        text: "ผลการทำงาน",
        timer: 3000,
        type: 'success',
        showConfirmButton: false
    });
</script>
@endif
@endsection
