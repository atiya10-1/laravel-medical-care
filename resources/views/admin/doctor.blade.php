@include('admin.header')
@include('admin.sidebar')
@include('admin.navbar')

<style>
    .form-heading {
        font-size: 2.5rem; /* Larger heading size */
        font-weight: bold; /* Bold text */
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
</style>

<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10 col-sm-12 offset-lg-2"> <!-- Set width and left margin -->
            <div class="card shadow-lg border-0">
                <h3 class="form-heading text-white text-center bg-dark py-3 rounded-top">All Doctors</h3> <!-- Dark background and white text -->
                <div class="row justify-content-center mt-4">
                    @foreach ($doctors as $d)
                        <div class="col-md-4 col-sm-6 mb-4"> <!-- Ensure 3 cards per row -->
                            <div class="card shadow-sm h-100 text-center"> 
                                <img src="{{ url('./dcimage', $d->image) }}" class="card-img-top rounded-circle mx-auto mt-3" alt="Doctor Image" style="width: 150px; height: 150px; object-fit: cover;">
                                
                                <div class="card-body p-4" style="min-height: 200px;">
                                    <h2 class="card-name"><b>{{ $d->name }}</b></h2>
                                    <h2 class="card-title"><b>{{ $d->speciality }}</b></h2>

                                    <div class="mt-3">
                                        <a href="{{url('./edit_user' ,$d->id )}}" class="btn btn-dark">Edit</a> <!-- Dark buttons -->
                                        <a href="{{url('./delete_user' ,$d->id )}}" class="btn btn-dark">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
@include('admin.script')


