<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/create.css')}}">
    <title>create</title>
</head>

<body>
    <div class="container">
        <div class="top-container">
            <button><a href="{{route('student.index')}}">Cancel</a></button>
        </div>
        <div class="studentForm">
            <div class="navbar">
                <h1>Update Student</h1>
            </div>
            <form action="{{route('student.update', ['student' => $student])}}" method="post">
                @csrf
                @method('put')
                <label for="">Student ID:</label>
                <input type="text" name="student_id" placeholder="Student ID" value="{{$student->student_id}}">
                <label for="">Name:</label>
                <input type="text" name="student_name" placeholder="Name" value="{{$student->student_name}}">
                <label for="">Course:</label>
                <input type="text" name="student_course" placeholder="Course" value="{{$student->student_course}}">
                <button>Update</button>
            </form>
        </div>
    </div>
</body>

</html>