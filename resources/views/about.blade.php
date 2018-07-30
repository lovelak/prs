@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    เกี่ยวกับเรา
                </div>
                <div class="panel-body">
                    {{ $fullname }} 
                    <br>
                    {{ $email }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    <script>
       //alert("hello");
    </script>
@endsection