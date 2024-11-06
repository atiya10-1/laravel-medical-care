<div class="team-area section-padding20" style="background-color: #f8f9fa; padding: 80px 0;">
    <div class="container">
        <!-- Section Title -->
        <div class="col-lg-12">
            <div id="Doctor" class="section-title text-center mb-4">
                <h2 style="font-size: 4rem; color: #333; font-weight: bold; animation: slideInLeft 1.5s ease-in-out; margin: 10px 0;"><i>Our Doctors</i></h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($doctors as $d)
            <div class="col-12 col-sm-6 col-md-4 mb-4"> <!-- Responsive columns -->
                <div class="doctor-card animate-card">
                    <img src="{{ url('./dcimage', $d->image) }}" class="doctor-image" alt="Doctor Image">
                    <div class="doctor-info">
                        <h3>{{ $d->name }}</h3>
                        <h5>{{ $d->speciality }}</h5>
                        <div class="mt-3">
                            @if (Auth::id())
                                <a href="/appointment" target="_blank" class="btn btn-success custom-btn">Book Appointment</a>
                            @else
                                <a class="btn btn-warning custom-btn text-white btn-sm rounded" href="/login">Please Login</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
.custom-btn {
    font-size: 1.5rem;
    padding: 0.75rem 1.5rem;
    border-radius: 5px;
    transition: background-color 0.3s, transform 0.3s; /* Added transform transition */
    margin-top: 10px; /* Space above the button */
}

.custom-btn:hover {
    background-color: #5cb85c;
    transform: scale(1.05); /* Slightly enlarge button on hover */
}

/* Doctor card styles */
.doctor-card {
    background: #ffffff; /* White background */
    padding: 30px; /* Increased padding */
    border-radius: 20px; /* More pronounced rounded corners */
    display: flex;
    flex-direction: column; /* Stack content vertically */
    align-items: center; /* Center items */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Softer shadow */
    transition: transform 0.3s, box-shadow 0.3s; /* Smooth transitions */
    margin-top: 5px;
    border: 2px solid #e0e0e0; /* Light border */
    position: relative;
    overflow: hidden; /* Ensure rounded corners show */
}

/* Hover effects for card */
.doctor-card:hover {
    transform: translateY(-10px); /* Lift card higher on hover */
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.4); /* Darker shadow for depth */
}

/* Doctor image styles */
.doctor-image {
    width: 150px; /* Image size */
    height: 150px;
    object-fit: cover;
    border-radius: 50%; /* Circular image */
    border: 5px solid #e0e0e0; /* Border around the image */
    margin-bottom: 15px; /* Space below image */
    transition: transform 0.3s; /* Smooth scale on hover */
}

.doctor-image:hover {
    transform: scale(1.1); /* Enlarge image slightly on hover */
}

.doctor-info {
    text-align: center; /* Center text */
    padding: 0 10px; /* Padding for smaller screens */
}

.doctor-info h3 {
    font-size: 2rem; /* Doctor's name size */
    color: #92071a; /* Doctor's name color */
    margin: 0 0 5px; /* Spacing below name */
}

.doctor-info h5 {
    font-size: 1.5rem; /* Specialty size */
    color: #777; /* Specialty color */
    margin: 0 0 15px; /* Space below specialty */
}

/* Keyframes for animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px); /* Slide in from below */
    }
    to {
        opacity: 1;
        transform: translateY(0); /* Move to original position */
    }
}

/* Animation delays for each card */
.animate-card {
    animation: fadeInUp 0.8s forwards; /* Animation to fade in and slide up */
}

/* Optional: Add a delay for each card's animation */
.animate-card:nth-child(1) { animation-delay: 0.1s; }
.animate-card:nth-child(2) { animation-delay: 0.2s; }
.animate-card:nth-child(3) { animation-delay: 0.3s; }
.animate-card:nth-child(4) { animation-delay: 0.4s; }
.animate-card:nth-child(5) { animation-delay: 0.5s; }
.animate-card:nth-child(6) { animation-delay: 0.6s; }
/* Add more as necessary */
</style>
