@extends('layout')
@section('content')

<div class="row" style="margin:auto;">
    <div class="col-3"></div>
    <div class="col-6">
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Room Number</td>
                </tr>
            </thead>
            <tbody>
                @foreach($classrooms as $classroom)
                <tr>
                    <td>{{ $classroom->id }}</td>
                    <td>{{ $classroom->name }}</td>
                    <td>{{ $classroom->roomNo }}</td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    </div>
    <div class="col-3"></div>
</div>

@endsection