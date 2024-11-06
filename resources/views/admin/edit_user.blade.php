@include('admin.header')
@include('admin.sidebar')
@include('admin.navbar')

<body class="bg-light" style="min-height: 100vh;">
    <div class="container p-5">
        <div class="row"> <!-- Keeping the row as is for layout -->
            <div class="col-lg-6 col-md-8 col-sm-10 offset-lg-4"> <!-- Use 6 columns and offset by 4 on the left -->
                <div class="card shadow-lg border-0">
                    <h3 class="display-5 fw-bold text-white text-center bg-dark py-2 rounded-top">Edit User</h3> <!-- Red color applied here -->

                    <div class="card-body p-4">
                        <form action="{{url('/update_user' ,$user->id )}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <input value="{{$user->name}}" type="text" class="form-control" name="user_Name" placeholder="Enter Doctor's Name" required>
                            </div>

                            <div class="mb-3">                        
                                <input value="{{$user->email}}" type="email" class="form-control" name="user_email" placeholder="Enter Email" required>
                            </div>

                            <div class="mb-3">                         
                                <input value="{{$user->speciality}}" type="text" class="form-control" name="speciality" placeholder="Enter Specialty" required>
                            </div>

                            <div class="mb-3">      
                                <input value="{{$user->phone}}" type="tel" class="form-control" name="user_Number" placeholder="Enter Contact Number" required>
                            </div>

                            <div class="mb-3 my-3">
                                <label for="">Old image</label> 
                                <img src="{{ url('./dcimage', $user->image) }}" alt="" class="img-fluid rounded" style="width: 100px;">
                            </div>

                            <div class="mb-3"> 
                                <label for="">New image</label>                      
                                <input type="file" class="form-control" name="image" required>
                            </div>

                            <div class="mb-3">                       
                                <input value="{{$user->adress}}" class="form-control" name="user_adress" placeholder="Enter Address" required></>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-dark btn-lg w-100">Update User</button>
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
