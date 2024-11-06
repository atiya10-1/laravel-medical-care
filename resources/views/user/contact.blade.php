<section id="get-in-touch" class="py-4 bg-light" style="margin-top: 15px; margin-bottom: 5px; padding: 0 20px;">
  <div class="container">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-8 text-center">
        <h2 id="Contact" class="section-title text-uppercase font-weight-bold mb-3" style="font-weight: 700;">Get In Touch</h2>
        <p class="lead text-muted">
          <b><q>Have questions or need more information? Feel free to contact us, and we'll be happy to assist you.</q></b>
        </p>
      </div>
    </div>

    <div class="row">
      <!-- Contact Form -->
      <div class="col-md-7 mb-3">
        <form action="https://formspree.io/f/meoqgjdl" method="POST">
          <div class="form-row">
            <div class="form-group col-md-6 mb-3">
              <input type="text" class="form-control form-control-lg" name="name" required id="name" placeholder="Your Name" style="height: 50px;">
            </div>
            <div class="form-group col-md-6 mb-3">
              <input type="email" class="form-control form-control-lg" name="email" required id="email" placeholder="Your Email" style="height: 50px;">
            </div>
          </div>

          <div class="form-group mb-3">
            <input type="text" class="form-control form-control-lg" name="subject" required id="subject" placeholder="Subject" style="height: 50px;">
          </div>

          <div class="form-group mb-3">
            <textarea class="form-control form-control-lg" name="message" id="message" required rows="6" placeholder="Your Message" style="height: 150px;"></textarea>
          </div>
          <button type="submit" class="btn btn-danger btn-block btn-lg">Send Message</button>
        </form>
      </div>

      <!-- Contact Information -->
      <div class="col-md-5 mb-3">
        <h4 class="font-weight-bold text-center mb-4" style="font-size: 2rem;">Contact Information</h4>
        <div class="row text-center">
          <div class="col-6 mb-3">
            <div class="media flex-column align-items-center">
              <i class="fas fa-map-marker-alt fa-2x text-danger mb-2" style="font-size: 2.5rem;"></i>
              <h5 class="mt-0 mb-1 font-weight-bold ">Our Address</h5>
              <p style="font-size:medium;" >123 Medical Street, City, Country</p>
            </div>
          </div>

          <div class="col-6 mb-3">
            <div class="media flex-column align-items-center">
              <i class="fas fa-phone fa-2x text-danger mb-2" style="font-size: 2.5rem;"></i>
              <h5 class="mt-0 mb-1 font-weight-bold">Call Us</h5>
              <p style="font-size:medium;" >+123 456 7890</p>
            </div>
          </div>

          <div class="col-6 mb-3">
            <div class="media flex-column align-items-center">
              <i class="fas fa-envelope fa-2x text-danger mb-2" style="font-size: 2.5rem;"></i>
              <h5 class="mt-0 mb-1 font-weight-bold">Email Us</h5>
              <p  style="font-size:medium;" >contact@yourwebsite.com</p>
            </div>
          </div>

          <div class="col-6 mb-3">
            <div class="media flex-column align-items-center">
              <i class="fas fa-clock fa-2x text-danger mb-2" style="font-size: 2.5rem;"></i>
              <h5 class="mt-0 mb-1 font-weight-bold">Working Hours</h5>
              <p style="font-size:medium;" >Mon-Fri: 9 AM - 5 PM</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .media h5 {
    font-size: 2rem; /* Reduced from 2rem */
  }
  .media p {
    font-size: 1rem; /* Reduced from 1.5rem */
  }
  @media (max-width: 768px) {
    .col-md-5 {
      margin-top: 20px;
    }
  }
</style>
