@extends('layouts.app')

@section('content')

<div class="container">

    <h2>Edit Course</h2>

    <form action="{{ route('courses.update', $course->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Course Code</label>
            <input type="text"
                   name="course_code"
                   class="form-control"
                   value="{{ $course->course_code }}"
                   required>
        </div>

        <div class="mb-3">
            <label>Course Name</label>
            <input type="text"
                   name="course_name"
                   class="form-control"
                   value="{{ $course->course_name }}"
                   required>
        </div>

        <div class="mb-3">
            <label>Credit Hours</label>
            <select name="credit_hours" class="form-control">
                @for($i = 1; $i <= 4; $i++)
                    <option value="{{ $i }}"
                        {{ $course->credit_hours == $i ? 'selected' : '' }}>
                        {{ $i }}
                    </option>
                @endfor
            </select>
        </div>

        <div class="mb-3">
            <label>Semester</label>
            <input type="text"
                   name="semester"
                   class="form-control"
                   value="{{ $course->semester }}"
                   required>
        </div>

        <button type="submit" class="btn btn-warning">
            Update Course
        </button>

    </form>

</div>

@endsection