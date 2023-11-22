@extends('layout.main')
@section('title', 'Contact us page')
@section('content')
<main class="contact-content">
  <div class="contact-wrapper">
    <div class="contact-form"> 
      <h1>Contact Us</h1>
      <form action="#" method="post">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" required></textarea>

        <input type="submit" value="Submit">
      </form>
    </div>
    <div class="google-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d243647.3170959256!2d-74.02537318445088!3d40.71272806852931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1655426301234!5m2!1sen!2s"
        width="700" height="500">
      </iframe>
    </div>
  </div>
</main>
@endsection
