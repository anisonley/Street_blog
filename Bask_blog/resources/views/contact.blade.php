@extends('layout')

@section('main')
<main class="container">
  <section id="contact-us">
    <h1>Contact Bask</h1>

    <!-- contact info -->
    <div class="container">
      <div class="contact-info">
        <div class="specific-info">
          <i class="fas fa-home"></i>
          <div>
            <p class="title">53 Ogui Road, Enugu Nigeria</p>
            <p class="subtitle">Zik Avenue</p>
          </div>
        </div>
        <div class="specific-info">
          <i class="fas fa-phone-alt"></i>
          <div>
            <a href="">+234 720 XXX XXXX </a>
            <br />
            <a href="">+234 740 XXX XXXX</a>

            <p class="subtitle">Mon to Fri 9am-5pm</p>
          </div>
        </div>
        <div class="specific-info">
          <i class="fas fa-envelope-open-text"></i>
          <div>
            <a href="brownwizzie23@gmail.com">
              <p class="title">bash@gmail.com</p>
            </a>
            <p class="subtitle">Send us a message!</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form">
        <form action="" method="">
          <!-- Name -->
          <label for="name"><span>Name</span></label>
          <input type="text" id="name" name="name" value="" />

          <!-- Email -->
          <label for="email"><span>Email</span></label>
          <input type="text" id="email" name="email" value="" />

          <!-- Subject -->
          <label for="subject"><span>Subject</span></label>
          <input type="text" id="Subject" name="subject" value="" />

          <!-- Message -->
          <label for="message"><span>Message</span></label>
          <textarea id="message" name="message"></textarea>

           <!-- Button -->
          <input type="submit" value="Submit" />
        </form>
      </div>
    </div>
  </section>
</main>
@endsection