<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/index.css')}}">
    <title>index</title>
</head>
<body>
    
    <div class="container">
        <div class="feedback">
            @if(session()->has('success'))
            {{session('success')}}
            @endif
        </div>
        <div class="top-container">
            <button><a href="{{route('student.create')}}">Add Student</a></button>
        </div>
        <table>
            <tr>
                <th style="width: 120px;">Student ID</th>
                <th>Name</th>
                <th>Course</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($students as $student)
            <tr>
                <td>{{$student->student_id}}</td>
                <td>{{$student->student_name}}</td>
                <td>{{$student->student_course}}</td>
                <td>
                    <button><a href="{{route('student.edit', ['student' => $student])}}">Edit</a></button>
                </td>
                <td>
                    <form action="{{route('student.delete', ['student' => $student])}}" method="post">
                        @csrf
                        @method('delete')
                        <button>Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>

</body>
</html>