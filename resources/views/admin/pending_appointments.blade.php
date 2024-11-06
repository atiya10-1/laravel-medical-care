@include('admin.header')
@include('admin.sidebar')
@include('admin.navbar')

<style>
    .btn-dark-grey {
        background-color: #343a40; /* Dark grey background */
        border-color: #343a40; /* Dark grey border */
        color: white; /* White text */
        font-size: .8rem; /* Standard button size */
        padding: 10px 20px; /* Standard button padding */
        transition: transform 0.2s; /* Smooth transition for hover effect */
    }

    .btn-dark-grey:hover {
        background-color: #23272b; /* Darker grey on hover */
        border-color: #23272b; /* Darker border on hover */
        color: white; /* Keep text white on hover */
        transform: scale(1.05); /* Slightly increase size on hover */
    }
</style>

<div class="container p-2 mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6"></div> <!-- Left Empty Space (3 columns) -->
        
        <div class="col-lg-9 col-md-9 col-sm-12"> <!-- Center Table (9 columns) -->
            <h3 class="display-5 fw-bold text-white text-center bg-dark py-2 rounded-top">All Pending Request</h3>

            <div class="table-responsive">
                <table class="table table-bordered table-hover mt-4">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Patients Name</th>
                            <th>Email</th>
                            <th>Dc_name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Messages</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($p_req as $pr )
                        <tr>
                            <td>{{$pr->id}}</td>
                            <td>{{$pr->name}}</td>
                            <td>{{$pr->email}}</td>
                            <td>{{$pr->d_name}}</td>
                            <td>{{$pr->Date}}</td>
                            <td>{{$pr->Time}}</td>
                            <td>{{$pr->Messeage}}</td>
                            <td>{{$pr->req_status}}</td>
                            <td class="text-center d-flex justify-content-end gap-2 me-3"> <!-- Adjusted margin for right side -->
                            <a href="{{url('/app_req' , $pr->id)}}" class="btn btn-dark-grey">Approve</a>
                            <a href="{{url('/can_req' , $pr->id)}}" class="btn btn-dark-grey me-2">Cancel</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
@include('admin.script')
