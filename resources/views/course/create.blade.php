<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Create Course</title></head><body>
<h1>Create Course</h1>
@if($errors->any()) <div><h3>Please fix these errors:</h3><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div> @endif
<form action="{{ route('courses.store') }}" method="POST">@csrf
<div><label for="name">Course Name</label><br><input id="name" name="name" value="{{ old('name') }}" required></div><br>
<div><label for="description">Description</label><br><textarea id="description" name="description">{{ old('description') }}</textarea></div><br>
<div><label for="duration">Duration (weeks)</label><br><input type="number" min="1" id="duration" name="duration" value="{{ old('duration') }}" required></div><br>
<div><label for="fee">Fee</label><br><input type="number" min="0" step="0.01" id="fee" name="fee" value="{{ old('fee') }}" required></div><br>
<div><label for="difficulty">Difficulty</label><br><select id="difficulty" name="difficulty" required><option value="">Select difficulty</option>@foreach(['Easy','Medium','Hard'] as $level)<option value="{{ $level }}" @selected(old('difficulty') === $level)>{{ $level }}</option>@endforeach</select></div><br>
<div><label for="is_active">Status</label><br><select id="is_active" name="is_active" required><option value="1" @selected(old('is_active', '1') == '1')>Active</option><option value="0" @selected(old('is_active') === '0')>Inactive</option></select></div><br>
<button type="submit">Create Course</button></form><p><a href="{{ route('courses.index') }}">Back to Courses</a></p>
</body></html>
