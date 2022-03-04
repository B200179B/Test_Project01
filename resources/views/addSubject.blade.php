@extends('layout')
@section('content')

<div class="row" style="margin:auto;">
    <div class="col-3"></div>
    <div class="col-6">
        <br><br>
        <h3>Add New Subject</h3>
        <!--{{ route('addClassroom') }}-->
        <form action="{{ route('addSubject') }}" method="POST" enctype="multipart/form-data"> <!--button type: submit-->
            <!--enctype="multipart/form-data" need when Upload image and file-->

            @csrf
            <div class="form-group">
                <label for="subjectName">Add New Subject</label>
                <input class="form-control" type="text" id="subjectName" name="subjectName" required>
    
            </div>

            <div class="form-group">
                <label for="subjectDays">Days</label>
                <input class="form-control" type="text" id="subjectDays" name="subjectDays" required>
                
            </div>

            <div class="form-group">
                <label for="subjectPrice">Time</label>
                <input class="form-control" type="text" id="subjectTime" name="subjectTime" min="0" required>
                
            </div>

            <div class="form-group">
                <label for="subjectQuantity">Seats</label>
                <input class="form-control" type="number" id="subjectSeats" name="subjectSeats" min="0" required>
                
            </div>

            <div class="form-group">
                <label for="classroomID">Classroom</label>
                <select name="classroomID" id="classroomID" class="form-control">
                    @foreach($classroomID as $classroom)
                        <option value="{{$classroom->id}}">{{$classroom->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Add New</button>
        </form>

        
        <br><br>
    </div>
    <div class="col-3"></div>
</div>

@endsection