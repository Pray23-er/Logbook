<x-head></x-head>

<x-header></x-header>

<div class="container mt-4 pt-6">
    <div class="hero mb-5 text-center">
        <h1 class="text-4xl font-bold text-sky-700 dark:text-sky-400 mb-3"><i class="bi bi-calendar me-2"></i> Add New Record</h1>
        <p class="text-lg text-gray-600 dark:text-gray-400 mb-4">for today, {{ date('F j, Y') }}</p> </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-white dark:bg-gray-800 rounded-3xl shadow-lg border border-gray-200 dark:border-gray-700 overflow-hidden">
                <div class="card-body p-6">
                    <form method="POST" action="{{ route('records.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="title" class="form-label text-gray-700 dark:text-gray-300 font-medium"><i class="bi bi-card-text me-2"></i> Title</label>
                            <input type="text" id="title" class="form-control @error('title') is-invalid @enderror bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg focus:ring-sky-500 focus:border-sky-500 focus:outline-none" name="title" placeholder="Enter title">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="description" class="form-label text-gray-700 dark:text-gray-300 font-medium"><i class="bi bi-chat-left-text me-2"></i> Description</label>
                            <textarea id="description" rows="5" class="form-control @error('description') is-invalid @enderror bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg focus:ring-sky-500 focus:border-sky-500 focus:outline-none" placeholder="Describe your work..." name="description"></textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="thumbnail" class="form-label text-gray-700 dark:text-gray-300 font-medium"><i class="bi bi-image me-2"></i> Thumbnail</label>
                            <input type="file" id="thumbnail" class="form-control @error('thumbnail') is-invalid @enderror bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white rounded-lg focus:ring-sky-500 focus:border-sky-500 focus:outline-none" name="thumbnail">
                            @error('thumbnail')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid gap-3">
                            <button type="submit" class="btn btn-primary bg-sky-600 hover:bg-sky-700 border-0 py-2.5 rounded-lg transition duration-300"><i class="bi bi-check2 me-2"></i> Submit</button>
                            <a href="{{ route('student.dashboard') }}" class="btn btn-secondary bg-gray-500 hover:bg-gray-600 border-0 py-2.5 rounded-lg transition duration-300"><i class="bi bi-house-door me-2"></i> Home</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer></x-footer>
