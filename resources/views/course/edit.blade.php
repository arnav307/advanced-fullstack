<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Edit Course</title></head><body>
<h1>Edit Course</h1>
@if($errors->any()) <div><h3>Please fix these errors:</h3><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div> @endif
<form action="{{ route('courses.update', $course->id) }}" method="POST">@csrf @method('PUT')
<div><label for="name">Course Name</label><br><input id="name" name="name" value="{{ old('name', $course->name) }}" required></div><br>
<div><label for="description">Description</label><br><textarea id="description" name="description">{{ old('description', $course->description) }}</textarea></div><br>
<div><label for="duration">Duration (weeks)</label><br><input type="number" min="1" id="duration" name="duration" value="{{ old('duration', $course->duration) }}" required></div><br>
<div><label for="fee">Fee</label><br><input type="number" min="0" step="0.01" id="fee" name="fee" value="{{ old('fee', $course->fee) }}" required></div><br>
<div><label for="difficulty">Difficulty</label><br><select id="difficulty" name="difficulty" required>@foreach(['Easy','Medium','Hard'] as $level)<option value="{{ $level }}" @selected(old('difficulty', $course->difficulty) === $level)>{{ $level }}</option>@endforeach</select></div><br>
<div><label for="is_active">Status</label><br><select id="is_active" name="is_active" required><option value="1" @selected((string)old('is_active', (int)$course->is_active) === '1')>Active</option><option value="0" @selected((string)old('is_active', (int)$course->is_active) === '0')>Inactive</option></select></div><br>
<button type="submit">Update Course</button></form><p><a href="{{ route('courses.index') }}">Back to Courses</a></p>
</body></html>
