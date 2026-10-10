<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Students</title></head>
<body>
<h1>Students</h1>
<nav><a href="{{ route('students.index') }}">Students</a> | <a href="{{ route('courses.index') }}">Courses</a></nav>
@if(session('success')) <p style="color:green">{{ session('success') }}</p> @endif
@if($errors->any()) <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>@endif
<p><a href="{{ route('students.create') }}">Create Student</a></p>
<table border="1" cellpadding="8">
<thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr></thead>
<tbody>
@forelse($students as $student)
<tr>
<td>{{ $student->id }}</td><td>{{ $student->name }}</td><td>{{ $student->email }}</td><td>{{ $student->phone }}</td>
<td>
<a href="{{ route('students.show', $student->id) }}">View</a> |
<a href="{{ route('students.edit', $student->id) }}">Edit</a> |
<form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete this student?')">
@csrf @method('DELETE') <button type="submit">Delete</button>
</form>
</td></tr>
@empty
<tr><td colspan="5">No students found.</td></tr>
@endforelse
</tbody></table>
</body></html>
