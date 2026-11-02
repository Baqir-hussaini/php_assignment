use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

// Create
Route::get('/courses/create',
    [CourseController::class, 'create'])
    ->name('courses.create');

Route::post('/courses',
    [CourseController::class, 'store'])
    ->name('courses.store');

// Edit
Route::get('/courses/{id}/edit',
    [CourseController::class, 'edit'])
    ->name('courses.edit');

Route::put('/courses/{id}',
    [CourseController::class, 'update'])
    ->name('courses.update');

// Delete
Route::delete('/courses/{id}',
    [CourseController::class, 'destroy'])
    ->name('courses.destroy');