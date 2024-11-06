@include('admin.header')
@include('admin.sidebar')
@include('admin.navbar')

<style>
    .btn-dark-transparent {
        background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent dark background */
        border: 1px solid rgba(255, 255, 255, 0.7); /* Light border */
        color: rgba(255, 255, 255, 0.9); /* Light text color */
        transition: background-color 0.3s, color 0.3s; /* Smooth transitions */
    }

    .btn-dark-transparent:hover {
        background-color: rgba(0, 0, 0, 0.8); /* Darker background on hover */
        color: rgba(255, 255, 255, 1); /* Full white text on hover */
    }

    .btn-action {
        background-color: #333; /* Dark background */
        color: white; /* White text */
        border: none; /* No border */
        padding: 8px 12px; /* Padding for buttons */
        border-radius: 5px; /* Rounded corners */
        transition: background-color 0.3s; /* Smooth transitions */
    }

    .btn-action:hover {
        background-color: #555; /* Lighter dark shade on hover */
    }

    .search-icon {
        color: rgba(255, 255, 255, 0.9); /* Light color for the search icon */
    }

    .pagination {
        justify-content: center; /* Center the pagination */
        margin-top: 20px; /* Add some space above the pagination */
    }

    .user-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        border-radius: 50%; /* Circle shape */
    }

    .action-buttons {
        display: flex; /* Use flexbox for alignment */
        justify-content: center; /* Center the buttons */
        gap: 5px; /* Space between buttons */
    }

    @media (max-width: 768px) {
        .table-responsive {
            overflow-x: auto; /* Allow horizontal scrolling on small devices */
        }
        .user-image {
            width: 40px; /* Adjust size for smaller screens */
            height: 40px;
        }
    }

    .form-control {
        border-radius: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container p-2 mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6"></div> <!-- Left Empty Space (3 columns) -->
        
        <div class="col-lg-9 col-md-9 col-sm-12"> <!-- Center Table (9 columns) -->
            <h3 class="display-5 fw-bold text-white text-center bg-dark py-2 rounded-top">All Users</h3> <!-- Dark background applied -->

            <div class="container mt-4">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" id="inp" placeholder="Search..." aria-label="Search">
                            <button class="btn btn-dark-transparent" type="submit">
                                <i class="fas fa-search search-icon"></i> <!-- Light color for the search icon -->
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-hover mt-4">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Image</th>
                            <th>Role</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $u)
                        <tr>
                            <td>{{ $u->id }}</td>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->phone }}</td>
                            <td>{{ $u->adress }}</td>
                            <td>
                                @if ($u->image == "")
                                    <img src="{{ asset('usertheme/assets/img/logo/logo2.PNG') }}" alt="Logo" class="img-fluid" style="max-width: 120px; height: 100px;">
                                @else
                                    <img src="{{ url('./dcimage', $u->image) }}" alt="User Image" style="width: 80px; height: 80px; object-fit: cover; border-radius: 50%;">
                                @endif
                            </td>
                            <td>
                                @if ($u->usertype == "0")
                                    Patient
                                @elseif($u->usertype == "1")
                                    Doctor
                                @elseif($u->usertype == "2")
                                    Admin
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="action-buttons">
                                    <a href="{{ url('./edit_user', $u->id) }}" class="btn-action">Edit</a>
                                    <a onclick="return confirm('Are you sure to delete this user?')" href="{{ url('./delete_user', $u->id) }}" class="btn-action">Delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="pagination">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
@include('admin.script')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function(){
    $('#inp').on('keyup', function(){
        let inp = $('#inp').val().toUpperCase();

        // Filter and show/hide rows based on input
        $('table tbody tr').each(function() {
            // Check if the row matches the input
            let isMatch = $(this).text().toUpperCase().indexOf(inp) > -1;
            $(this).toggle(isMatch);
        });
    });
});
</script>
