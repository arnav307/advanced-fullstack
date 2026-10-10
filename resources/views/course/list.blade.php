<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Courses</title></head><body>
<h1>Courses</h1><nav><a href="{{ route('students.index') }}">Students</a> | <a href="{{ route('courses.index') }}">Courses</a></nav>
@if(session('success')) <p style="color:green">{{ session('success') }}</p> @endif
<p><a href="{{ route('courses.create') }}">Create Course</a></p>
<table border="1" cellpadding="8"><thead><tr><th>ID</th><th>Name</th><th>Duration (weeks)</th><th>Fee</th><th>Difficulty</th><th>Active</th><th>Actions</th></tr></thead><tbody>
@forelse($courses as $course)
<tr><td>{{ $course->id }}</td><td>{{ $course->name }}</td><td>{{ $course->duration }}</td><td>{{ number_format((float)$course->fee, 2) }}</td><td>{{ $course->difficulty }}</td><td>{{ $course->is_active ? 'Yes' : 'No' }}</td>
<td><a href="{{ route('courses.show', $course->id) }}">View</a> | <a href="{{ route('courses.edit', $course->id) }}">Edit</a> |
<form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Delete this course?')">@csrf @method('DELETE')<button type="submit">Delete</button></form></td></tr>
@empty <tr><td colspan="7">No courses found.</td></tr> @endforelse
</tbody></table></body></html>
