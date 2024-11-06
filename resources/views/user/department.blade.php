<div class="container my-5">
    <h2 class="section-title text-center">Our Specialities</h2> <!-- Stylish heading -->
    <div class="row justify-content-center">
        @foreach ($specialitizer as $s)
        <div class="col-md-3 d-flex justify-content-center"> <!-- Each card in a single row with four columns -->
            <div class="vip-card animate-card">
                <div class="vip-image">
                    <img src="{{ url('./s_image', $s->image) }}" alt="Speciality Image" class="rounded-circle">
                </div>
                <div class="vip-info text-center">
                    <h3 class="vip-name">{{ $s->name }}</h3>
                    <p class="vip-description">{{ $s->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Custom CSS -->
<style>
/* Container styling */
.container {
    padding-top: 20px;
    padding-bottom: 50px;
}

/* Stylish heading */
.section-title {
    font-size: 3.5em; /* Increased size */
    font-weight: 900; /* Bolder font weight */
    color: #4a4a4a; /* Darker text color */
    margin-bottom: 30px; /* Space below heading */
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); /* Text shadow for depth */
    animation: fadeIn 1s ease-in-out; /* Animation on load */
}

/* Fade-in animation for heading */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Circular card styling */
.vip-card {
    width: 250px; /* Card size */
    height: 250px;
    border-radius: 50%; /* Circular shape */
    overflow: hidden;
    box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    position: relative;
    cursor: pointer;
    background-color: #ffffff;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border: 4px solid #92071a; /* Dark red outline */
    opacity: 0; /* Start hidden for animation */
    transform: translateY(20px); /* Start slightly below */
    animation: fadeInUp 0.8s forwards; /* Animation to fade in and slide up */
}

/* Animation for the card */
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

/* Optional: Add a delay for each card's animation */
.animate-card:nth-child(1) { animation-delay: 0.1s; }
.animate-card:nth-child(2) { animation-delay: 0.2s; }
.animate-card:nth-child(3) { animation-delay: 0.3s; }
.animate-card:nth-child(4) { animation-delay: 0.4s; }

/* Hover effect for the card */
.vip-card:hover {
    transform: translateY(-10px) rotate(3deg); /* Lift and rotate on hover */
    box-shadow: 0px 12px 24px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
}

/* Circular Image section */
.vip-image img {
    width: 120px;
    height: 120px;
    display: block;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease; /* Smooth scale on hover */
}

/* Hover effect for image */
.vip-image img:hover {
    transform: scale(1.1); /* Enlarge image slightly on hover */
}

/* Info section centered inside the circle */
.vip-info {
    text-align: center;
    margin-top: 10px;
}

/* Text styles */
.vip-name {
    font-size: 2em;
    font-weight: 700;
    color: #333;
    margin: 0;
    animation: fadeInText 0.5s ease-in-out; /* Fade in effect for name */
}

/* Fade in animation for text */
@keyframes fadeInText {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Description styles */
.vip-description {
    font-size: 1em;
    color: #555;
    font-weight: 700;
    margin-top: 5px;
}

/* Background and border for the circular card */
.vip-card {
    background: linear-gradient(135deg, #f7f7f7, #ffffff);
}
</style>
