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

    .table {
        background-color: #ffffff; /* White table background */
        color: #333; /* Dark text color for table */
    }

    .table th {
        background-color: #333333; /* Dark background for header */
        color: white; /* White text for header */
    }

    .table td {
        border-color: #ced4da; /* Light border for table cells */
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1; /* Light gray on hover */
    }

    .pagination {
        margin-top: 20px; /* Margin for pagination */
    }
</style>

<body class="bg-light" style="min-height: 100vh;">
    <div class="container p-5">
        <div class="row justify-content-center"> <!-- Center the card horizontally -->
            <div class="col-lg-6 col-md-8 col-sm-10"> <!-- Adjust column sizes for responsiveness -->
                <div class="card shadow-lg border-0">
                    <h3 class="form-heading text-white text-center bg-dark py-3 rounded-top">All Specialties</h3> <!-- Dark background and white text -->

                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover mt-4">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                         </tr>
                                </thead>
                                <tbody>
                                <tbody>
@foreach ($specialitizer as $s)
    <tr>
        <td>{{$s->id}}</td>
        <td>{{$s->name}}</td>
        <td>{{$s->descrription}}</td> 
        <td>
        <img src="{{ asset('s_image/' . $s->image) }}" alt="Specialty Image" style="width: 50px; height: 50px; object-fit: cover;" class="rounded-circle">
        </td>                    
    </tr>
@endforeach
</tbody>


                        </tbody>
                            </table>

                            <div class="pagination">
                                <!-- Pagination links will be added here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('admin.footer')
@include('admin.script')
</body>
