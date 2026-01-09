@extends('template.default')

@section('content')
    <h1>Flight Create</h1>
    <form action="" method="post">
        @csrf
        <label for="name">Name</label>
        <input class="form-control" type="text" name="name" id="name">
        <label for="airline">Airline</label>
        <input class="form-control" type="text" name="airline" id="airline">
        <label for="number_os_seats">Number of Seats</label>
        <input class="form-control" type="number" name="number_of_seats" id="number_of_seats">
    </form>
    <h1>Flight Lists</h1>
    <table>
        <tr>
            <td>id</td>

        </tr>
