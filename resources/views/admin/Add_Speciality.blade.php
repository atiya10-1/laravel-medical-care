@include('admin.header')
@include('admin.sidebar')
@include('admin.navbar')

<style>
    .form-heading {
        font-size: 2.5rem; /* Larger heading size */
        font-weight: bold; /* Keep bold text */
    }

    /* Additional styles for light theme */
    body {
        background-color: #f8f9fa; /* Light background for the body */
        color: #333; /* Dark text color for readability */
    }

    .card {
        background-color: #ffffff; /* White card background */
        border: none; /* Remove card border */
    }

    .form-control {
        background-color: #ffffff; /* White input background */
        color: #333; /* Dark text color for input */
        border: 1px solid #ced4da; /* Light border for inputs */
    }

    .form-control::placeholder {
        color: #6c757d; /* Placeholder color */
    }

    .btn-dark {
        background-color: #333333; /* Dark background */
        border-color: #333333; /* Dark border */
        color: white; /* White text */
    }

    .btn-dark:hover {
        background-color: #555555; /* Lighter dark shade on hover */
        border-color: #444444; /* Slightly lighter border on hover */
    }

    .bg-dark {
        background-color: #333333 !important; /* Dark background for heading */
    }

    .rounded-top {
        border-top-left-radius: 0.3rem;
        border-top-right-radius: 0.3rem;
    }
</style>

<body style="min-height: 100vh;">
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card shadow-lg border-0">
                    <h3 class="form-heading text-white text-center bg-dark py-3 rounded-top">Add Specialty</h3>

                    <div class="card-body p-4">
                        <form action="/Upload_Speciality" method="POST" enctype="multipart/form-data">
                            @csrf
                            
                            <!-- Specialty Name -->
                            <div class="mb-3">
                                <label for="specialtyName" class="form-label fw-bold">Specialty Name</label>
                                <input type="text" class="form-control" name="speciality" id="specialtyName" placeholder="Enter specialty name" required>
                            </div>

                            <!-- Description -->
                            <div class="mb-3">
                                <label for="specialtyDescription" class="form-label fw-bold">Description</label>
                                <input type="text" class="form-control" name="description" id="specialtyDescription" placeholder="Enter description" required>
                            </div>

                            <!-- Specialty Image -->
                            <div class="mb-3">
                                <label for="specialtyImage" class="form-label fw-bold">Specialty Image</label>
                                <input type="file" class="form-control" name="image" id="specialtyImage" required>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-dark btn-lg w-100">Add Specialty</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('admin.footer')
@include('admin.script')
</body>
