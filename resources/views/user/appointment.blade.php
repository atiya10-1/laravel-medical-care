@include('user.header')
@include('user.navbar')

<style>
        body {
            font-size: 18px; /* Body font size */
            background-color: #f8f9fa; /* Light background color */
        }
        .form-container {
            background-color: #ffffff; /* White background for form */
            border: 1px solid #ced4da; /* Light border color */
            border-radius: 10px; /* Rounded corners */
            padding: 30px; /* Padding around the form */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            margin: 20px auto; /* Center form with margin */
            max-width: 600px; /* Max width for the form */
        }
        .form-container h2 {
            color: #92071a; /* Heading color */
            margin-bottom: 20px; /* Margin below heading */
            text-align: center; /* Center align heading */
            font-weight: bold; /* Bold text */
        }
        .form-control, .form-control:focus {
            font-size: 16px; /* Input fields font size */
            border-radius: 5px; /* Rounded corners for input */
            border: 1px solid #ced4da; /* Border color */
        }
        .form-control:focus {
            border-color: #92071a; /* Border color on focus */
            box-shadow: 0 0 5px rgba(146, 7, 26, 0.5); /* Glow effect on focus */
        }
        .btn {
            font-size: 16px; /* Button font size */
            background-color: #92071a; /* Button color */
            border-color: #92071a; /* Button border color */
        }
        .btn:hover {
            background-color: #a01222; /* Darker shade on hover */
            border-color: #a01222; /* Darker border on hover */
        }
    </style>
    <title>Appointment Booking Form</title>
</head>
<body>
    <div class="container mt-5">
        <div class="form-container">
            <h2>Book an Appointment</h2>
            <form action="/Book_Appointment" method="POST">
                @csrf
                <div class="form-group">
                    <label for="patientName">Patient Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="patientEmail">Email address</label>
                    <input type="email" class="form-control" name="Email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="doctorSelect"> Doctor Name</label>
                    <input type="text" class="form-control"  placeholder="Enter dc_name" name="d_name" required>  
                </div>
                <div class="form-group">
                    <label for="appointmentDate">Appointment Date</label>
                    <input type="date" class="form-control" name="Date" required>
                </div>
                <div class="form-group">
                    <label for="appointmentTime">Appointment Time</label>
                    <input type="time" class="form-control" name="Time" required>
                </div>
                <div class="form-group">
                    <label for="patientMessage">Message/Additional Notes</label>
                    <textarea class="form-control" name="Messeage" rows="3" placeholder="Any additional information..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary ">Book Appointment</button>
            </form>
        </div>
    </div>


 @include('user.footer')
 @include('user.script')

 