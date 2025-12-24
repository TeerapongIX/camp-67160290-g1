@extends('template.default')
@section('header','ตารางแม่สูตรคูณ')
<h1  style="text-align: center;">ตารางแม่สูตรคูณ</h1>
@section('content')
        <form action="/calculate" method="post" >
            @csrf
            <?php //echo isset($_GET['mynumber']) ? $_GET['mynumber'] : ''; ?>
            <input class="form-control" name="mynumber" type="number">
            <br>
            <button class="btn btn-success">บันทึก</button>

    </form>
@endsection
