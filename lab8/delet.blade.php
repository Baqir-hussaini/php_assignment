<form action="{{ route('courses.destroy', $course->id) }}"
      method="POST"
      onsubmit="return confirm('Are you sure you want to delete this course?')">

    @csrf

    @method('DELETE')

    <button type="submit" class="btn btn-danger">
        Delete
    </button>

</form>