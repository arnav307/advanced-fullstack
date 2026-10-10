<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Course Details</title></head><body>
<h1>Course Details</h1>@if(session('success')) <p style="color:green">{{ session('success') }}</p> @endif
<p><strong>ID:</strong> {{ $course->id }}</p><p><strong>Name:</strong> {{ $course->name }}</p>
<p><strong>Description:</strong> {{ $course->description ?: '—' }}</p><p><strong>Duration:</strong> {{ $course->duration }} weeks</p>
<p><strong>Fee:</strong> {{ number_format((float)$course->fee, 2) }}</p><p><strong>Difficulty:</strong> {{ $course->difficulty }}</p>
<p><strong>Status:</strong> {{ $course->is_active ? 'Active' : 'Inactive' }}</p>
<p><a href="{{ route('courses.edit', $course->id) }}">Edit Course</a></p><p><a href="{{ route('courses.index') }}">Back to Courses</a></p>
</body></html>
