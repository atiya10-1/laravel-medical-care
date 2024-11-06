<!-- About Us Section Start -->
<section class="about-us section-padding">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Side: Text Content -->
            <div class="col-lg-6 col-md-12 mb-4">
                <div class="about-text">
                    <h2 class="about-title" id="About" >Discover Our Hospital</h2>
                    <p class="about-description">
                        At <strong> <q>Medical Care</q> </strong>, we are committed to providing exceptional healthcare services tailored to meet the unique needs of our community. Our skilled professionals ensure that every patient receives compassionate and personalized care.
                    </p>
                    <p class="about-description">
                        With advanced facilities and cutting-edge medical technology, we focus on enhancing the health and well-being of our patients through comprehensive care and innovative solutions.
                    </p>

                    <!-- Mission Statement -->
                    <h3 class="mission-title">Our Mission</h3>
                    <p class="mission-description">
                        To deliver high-quality, patient-centered healthcare that enriches the lives of those we serve.
                    </p>

                    <!-- Values Section -->
                    <div class="values-section">
                        <h3 class="values-title">Our Core Values</h3>
                        <ul class="values-list">
                            <li>Compassion</li>
                            <li>Integrity</li>
                            <li>Excellence</li>
                            <li>Collaboration</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right Side: Triangular Images -->
            <div class="col-lg-6 col-md-12">
                <div class="about-image-wrapper">
                    <div class="about-image triangle-up">
                        <img src="{{ asset('/usertheme/assets/img/gallery/img2.webp') }}" alt="Hospital Interior" class="img-fluid">
                    </div>
                    <div class="about-image triangle-down">
                        <img src="{{ asset('/usertheme/assets/img/gallery/img.webp') }}" alt="Medical Team" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<style>
    /* About Us Section Styling */
    .about-us {
        padding: 80px 0;
        background-color: #f9f9f9; /* Light background for contrast */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow for elevation */
        border-radius: 15px; /* Rounded corners for a softer look */
        animation: fadeIn 1s ease-in; /* Fade-in animation */
    }

    /* Fade In Animation */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    /* Text Content Styling */
    .about-title {
        font-size: 36px; /* Updated font size */
        font-weight: 700;
        font-family: 'Arial', sans-serif; /* Change to desired font */
        color: #92071a; /* Primary color */
        margin-bottom: 20px;
        position: relative;
        overflow: hidden; /* Ensures the underline is confined within the title */
        transition: color 0.3s; /* Smooth color transition on hover */
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1); /* Soft shadow for depth */
    }

    .about-title:hover {
        color: #ff7f50; /* Change color on hover */
    }

    .about-title::after {
        content: "";
        display: block;
        width: 100%; /* Full width underline */
        height: 4px; /* Thinner underline */
        background: #92071a; /* Primary color underline */
        position: absolute;
        bottom: -10px;
        left: 0;
        transform: translateX(-100%); /* Start hidden to the left */
        animation: slideIn 0.3s forwards; /* Slide animation on load */
    }

    .about-description {
        font-size: 18px; /* Increased font size for readability */
        color: #555;
        line-height: 1.7;
        margin-bottom: 20px;
        transition: transform 0.3s; /* Smooth scaling */
    }

    .about-description:hover {
        transform: translateY(-2px); /* Lift effect on hover */
    }

    /* Mission Statement Styling */
    .mission-title {
        font-size: 26px;
        font-weight: 600;
        font-family: 'Arial', sans-serif; /* Change to desired font */
        color: #333;
        margin-top: 30px;
        margin-bottom: 10px;
        position: relative;
        overflow: hidden; /* Ensures the underline is confined within the title */
    }

    .mission-title::after {
        content: "";
        display: block;
        width: 100%; /* Full width underline */
        height: 2px; /* Thinner underline */
        background: #92071a; /* Primary color underline */
        position: absolute;
        bottom: -5px;
        left: 0;
        transform: translateX(-100%); /* Start hidden to the left */
        animation: slideIn 0.3s forwards; /* Slide animation on load */
    }

    .mission-description {
        font-size: 16px;
        color: #555;
        line-height: 1.5;
    }

    /* Values Section Styling */
    .values-section {
        margin-top: 30px;
    }

    .values-title {
        font-size: 26px;
        font-weight: 600;
        font-family: 'Arial', sans-serif; /* Change to desired font */
        color: #333;
        margin-bottom: 10px;
        position: relative;
        overflow: hidden; /* Ensures the underline is confined within the title */
    }

    .values-title::after {
        content: "";
        display: block;
        width: 100%; /* Full width underline */
        height: 2px; /* Thinner underline */
        background: #92071a; /* Primary color underline */
        position: absolute;
        bottom: -5px;
        left: 0;
        transform: translateX(-100%); /* Start hidden to the left */
        animation: slideIn 0.3s forwards; /* Slide animation on load */
    }

    .values-list {
        list-style-type: none; /* No bullets for a clean look */
        padding-left: 0;
        color: #555;
        font-size: 16px;
        line-height: 1.5;
    }

    .values-list li {
        margin-bottom: 5px;
        position: relative; /* Positioning for custom bullets */
        padding-left: 20px; /* Padding for bullet space */
        transition: transform 0.3s; /* Smooth transition for scaling */
    }

    .values-list li:hover {
        transform: scale(1.05); /* Scale up on hover */
    }

    .values-list li::before {
        content: "✔"; /* Check mark as bullet */
        position: absolute;
        left: 0;
        color: #92071a; /* Primary color for bullets */
        font-size: 16px; /* Bullet size */
    }

    /* Image Wrapper Styling */
    .about-image-wrapper {
        position: relative; /* For absolute positioning of images */
        display: flex;
        flex-direction: column; /* Stack images vertically */
        gap: 15px; /* Space between images */
    }

    /* Triangular Image Styles */
    .about-image {
        overflow: hidden; /* Ensures image fits within shape */
        transition: transform 0.3s, box-shadow 0.3s; /* Smooth scaling and shadow transition */
    }

    .about-image.triangle-up {
        clip-path: polygon(50% 0%, 100% 100%, 0% 100%); /* Triangle pointing up */
    }

    .about-image.triangle-down {
        clip-path: polygon(0% 0%, 100% 0%, 50% 100%); /* Triangle pointing down */
    }

    .about-image img {
        width: 100%;
        height: auto; /* Maintains aspect ratio */
        transition: transform 0.3s; /* Smooth scaling for images */
    }

    .about-image:hover img {
        transform: scale(1.1); /* Scale image on hover */
    }

    .about-image:hover {
        transform: scale(1.05); /* Slight scaling on hover for the image wrapper */
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2); /* Shadow effect on hover */
    }
</style>
