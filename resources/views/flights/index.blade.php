@extends('template.default')

@section('content')
    <h1>Flight Create</h1>
    <form action="{{ url('/flihgts')}}" method="post">
        @csrf
        <label for="name">Name</label><br>
        <input class="form-control" type="text" name="name" id="name"><br>
        <label for="airline">Airline</label><br>
        <input class="form-control" type="text" name="airline" id="airline"><br>
        <label for="number_os_seats">Number of Seats</label><br>
        <input class="form-control" type="number" name="number_of_seats" id="number_of_seats"><br>
        <label for="price">Price</label><br>
        <input class="form-control" type="decimal" name="price" id="price"><br>
        <button class="btn btn-primary" type="submit">บันทึก</button>
    </form>
    <h1>Flight Lists</h1>
    <table class="table">
        <thead>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>airline</td>
            <td>number_of_seats</td>
            <td>price</td>
            <td></td>
        </tr>
        </thead>
        <tr>
            <td>1.</td>
            <td>name</td>
            <td>airline</td>
            <td>number_of_seats</td>
            <td>price</td>
            <td>แก้ไข / ลบ</td>
        </tr>
    </table>


@endsection

