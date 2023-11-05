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
            <button><a href="{{route('student.index')}}">Back</a></button>
        </div>
        <div class="studentForm">
            <div class="navbar">
                <h1>Add Student</h1>
            </div>
            <form action="{{route('student.store')}}" method="post">
                @csrf
                @method('post')
                <label for="">Student ID:</label>
                <input type="text" name="student_id" placeholder="Student ID">
                <label for="">Name:</label>
                <input type="text" name="student_name" placeholder="Name">
                <label for="">Course:</label>
                <input type="text" name="student_course" placeholder="Course">
                <button>Submit</button>
            </form>
        </div>
    </div>
</body>

</html>