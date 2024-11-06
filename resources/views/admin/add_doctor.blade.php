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

    /* Updated button colors to dark */
    .btn-danger {
        background-color: #333333; /* Dark gray for button */
        border-color: #333333; /* Dark gray border */
    }

    .btn-danger:hover {
        background-color: #555555; /* Lighter dark gray on hover */
        border-color: #444444; /* Slightly lighter border on hover */
    }

    /* Updated background color for heading */
    .bg-danger {
        background-color: #333333 !important; /* Dark gray for heading background */
    }

    .rounded-top {
        border-top-left-radius: 0.3rem;
        border-top-right-radius: 0.3rem;
    }
</style>

<body style="min-height: 100vh;">
    <div class="container p-5">
        <div class="row justify-content-center"> <!-- Center the form horizontally -->
            <div class="col-lg-6 col-md-8 col-sm-10"> <!-- Adjust column sizes for responsiveness -->
                <div class="card shadow-lg border-0">
                    <h3 class="form-heading text-white text-center bg-danger py-3 rounded-top">Add Doctors</h3> <!-- Dark gray background and white text -->

                    <div class="card-body p-4">
                        <form action="/upload_doctor" method="POST" enctype="multipart/form-data">
                            @csrf
                            <!-- Doctor's Name -->
                            <div class="mb-3">
                                <input type="text" class="form-control" name="dc_Name" placeholder="Enter Doctor's Name" required>
                            </div>

                            <!-- Doctor's Email -->
                            <div class="mb-3">                        
                                <input type="email" class="form-control" name="dc_email" placeholder="Enter Email" required>
                            </div>

                            <!-- Doctor's Specialty -->
                            <div class="mb-3">                         
                                <input type="text" class="form-control" name="speciality" placeholder="Enter Specialty" required>
                            </div>

                            <!-- Contact Number -->
                            <div class="mb-3">      
                                <input type="tel" class="form-control" name="dc_Number" placeholder="Enter Contact Number" required>
                            </div>

                            <!-- Image Upload -->
                            <div class="mb-3">                       
                                <input type="file" class="form-control" name="image" required>
                            </div>

                            <!-- Address -->
                            <div class="mb-3">                       
                                <textarea class="form-control" name="dc_adress" rows="4" placeholder="Enter Address" required></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-danger btn-lg w-100">Add Doctor</button> <!-- Dark gray submit button -->
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
