@extends('layout')

@section('main')
<main class="container" >
  <section id="contact-us">
      <h1 style="padding-top: 50px;">Create New Post!</h1>
      <!-- Contact Form -->
      <div class="contact-form">
          <form action="" method="" >
              @csrf
              <!-- Title -->
              <label for="title"><span>Title</span></label>
              <input type="text" id="title" name="title" value="" />
           
              <!-- Image -->
              <label for="image"><span>Image</span></label>
              <input type="file" id="image" name="image" />
   
              <!-- Body-->
              <label for="body"><span>Body</span></label>
              <textarea id="bodyP" name="bodyP" style=""></textarea>

              <!-- Button -->
              <input type="submit" value="Submit" />
          </form>
      </div>

  </section>
</main><

@endsection

