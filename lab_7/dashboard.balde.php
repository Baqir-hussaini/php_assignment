<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>My Reading List</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

    <!-- Navigation Bar -->
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">

            <a class="navbar-brand" href="{{ route('dashboard') }}">
                IT Student Portal
            </a>

            <div class="text-white">
                Welcome, {{ auth()->user()->name }}

                <form
                    action="{{ route('logout') }}"
                    method="POST"
                    class="d-inline"
                >
                    @csrf

                    <button type="submit" class="btn btn-light btn-sm ms-2">
                        Logout
                    </button>
                </form>
            </div>

        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-10">

                <h2 class="mb-4">My Reading List</h2>

                <!-- Success Message -->
                @if (session('success'))

                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>

                @endif

                <!-- Validation Errors -->
                @if ($errors->any())

                    <div class="alert alert-danger">

                        <strong>Please correct the following errors:</strong>

                        <ul class="mb-0 mt-2">

                            @foreach ($errors->all() as $error)

                                <li>{{ $error }}</li>

                            @endforeach

                        </ul>

                    </div>

                @endif

                <!-- Book Registration Form -->
                <div class="card shadow-sm mb-5">

                    <div class="card-header bg-white">

                        <h5 class="mb-0">Register a New Book</h5>

                    </div>

                    <div class="card-body">

                        <form
                            action="{{ route('books.store') }}"
                            method="POST"
                        >

                            @csrf

                            <div class="mb-3">

                                <label for="title" class="form-label">
                                    Book Title
                                </label>

                                <input
                                    type="text"
                                    id="title"
                                    name="title"
                                    class="form-control"
                                    maxlength="150"
                                    value="{{ old('title') }}"
                                    required
                                >

                            </div>

                            <div class="mb-3">

                                <label for="author" class="form-label">
                                    Author
                                </label>

                                <input
                                    type="text"
                                    id="author"
                                    name="author"
                                    class="form-control"
                                    maxlength="100"
                                    value="{{ old('author') }}"
                                    required
                                >

                            </div>

                            <div class="mb-3">

                                <label for="pages" class="form-label">
                                    Number of Pages
                                </label>

                                <input
                                    type="number"
                                    id="pages"
                                    name="pages"
                                    class="form-control"
                                    min="1"
                                    max="10000"
                                    value="{{ old('pages') }}"
                                    required
                                >

                            </div>

                            <button type="submit" class="btn btn-primary">

                                Register Book

                            </button>

                        </form>

                    </div>

                </div>

                <!-- Registered Books Table -->
                <div class="card shadow-sm">

                    <div class="card-header bg-white">

                        <h5 class="mb-0">My Books</h5>

                    </div>

                    <div class="card-body">

                        @if ($books->isEmpty())

                            <div class="alert alert-info mb-0">

                                You have not registered any books yet.

                            </div>

                        @else

                            <div class="table-responsive">

                                <table class="table table-striped table-hover">

                                    <thead class="table-primary">

                                        <tr>
                                            <th>No.</th>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Pages</th>
                                        </tr>

                                    </thead>

                                    <tbody>

                                        @foreach ($books as $book)

                                            <tr>

                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>

                                                <td>
                                                    {{ $book->title }}
                                                </td>

                                                <td>
                                                    {{ $book->author }}
                                                </td>

                                                <td>
                                                    {{ $book->pages }}
                                                </td>

                                            </tr>

                                        @endforeach

                                    </tbody>

                                </table>

                            </div>

                        @endif

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>

</html>