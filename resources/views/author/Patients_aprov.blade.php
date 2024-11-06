@include('author.header')
@include('author.sidebar')
@include('author.navbar')

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
            <h3 class="display-5 fw-bold text-white text-center bg-dark py-2 rounded-top">Approved Patients</h3>

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
                            <th class="text-center" >  Status</th>
                              
                            </tr>
                    </thead>
            
                    <tbody> 
                       @foreach ($p_req as $p)


                    <td>{{$p->id}}</td>    
                    <td>{{$p->name}}</td>    
                    <td>{{$p->email}}</td>    
                    <td>{{$p->d_name}}</td>    
                    <td>{{$p->Date}}</td>    
                    <td>{{$p->Time}}</td>    
                    <td>{{$p->Messeage}}</td>    
                    <td>{{$p->req_status}}</td>    
                    
                        </tr>
           

@endforeach             
             </tbody>
                   </table>
            </div>
        </div>
    </div>
</div>

@include('author.footer')
@include('author.script')
