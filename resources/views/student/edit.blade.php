<!DOCTYPE html>
<html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1"><title>Edit Student</title></head><body>
<h1>Edit Student</h1>
@if($errors->any()) <div><h3>Please fix these errors:</h3><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div> @endif
<form action="{{ route('students.update', $student->id) }}" method="POST">
@csrf @method('PUT')
<div><label for="name">Name</label><br><input id="name" name="name" value="{{ old('name', $student->name) }}" required></div><br>
<div><label for="email">Email</label><br><input type="email" id="email" name="email" value="{{ old('email', $student->email) }}" required></div><br>
<div><label for="phone">Phone</label><br><input id="phone" name="phone" value="{{ old('phone', $student->phone) }}" required></div><br>
<div><label for="address">Address</label><br><textarea id="address" name="address">{{ old('address', $student->address) }}</textarea></div><br>
<div><label for="date_of_birth">Date of Birth</label><br><input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth', $student->date_of_birth?->format('Y-m-d')) }}"></div><br>
<button type="submit">Update Student</button>
</form><p><a href="{{ route('students.index') }}">Back to Students</a></p>
</body></html>
