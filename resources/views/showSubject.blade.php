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
                    <td>Days</td>
                    <td>Time</td>
                    <td>Seat</td>
                    <td>RoomName</td>
                    <td>RoomNo</td>
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $subject)
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->name }}</td>
                    <td>{{ $subject->days }}</td>
                    <td>{{ $subject->time }}</td>
                    <td>{{ $subject->seats }}</td>
                    <td>{{ $classroom->name }}</td>
                    <td>{{ $classroom->roomNumber }}</td>
                    
                    <!-- Must be primary key, in this case, 'id' -->
                </tr>
                @endforeach
            </tbody>
        </table>
        <br><br>
    </div>
    <div class="col-3"></div>
</div>

@endsection