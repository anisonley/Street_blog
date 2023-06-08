<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home - Bask Blog</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
  </head>
  <body>
    <div id="wrapper">
      <!-- header -->
      <header class="header" style="background-image: url({{asset('images/photography.jpg')}});">
        <div class="header-text">
          <h1>Bask Blog</h1>
          <h4>Having latest news at your finger tips</h4>
        </div>
        <div class="overlay"></div>
      </header>

      <!-- sidebar -->
      <div class="sidebar">
        <span class="closeButton">&times;</span>
        <p class="brand-title"><a href="">Bask Blog</a></p>

        <div class="side-links">
          <ul>
            <li><a class="active" href="/">Home</a></li>
            <li><a href="/blog">Blog</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
          </ul>
        </div>

        <!-- sidebar footer -->
        <footer class="sidebar-footer">
          <div>
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
          </div>

          <small> &copy 2023 Bask Blog</small>
        </footer>
      </div>
      <!-- Menu Button -->
      <div class="menuButton">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <!-- main -->
      <main class="container">
        <h2 class="header-title">Latest Blog Posts</h2>
        <section class="cards-blog latest-blog">
          <div class="card-blog-content">
            <img src="{{asset('images/pic1.jpg')}}" alt="" />
            <p>
              2 hours ago
              <span style="float: right">Written By TIMOTHY OJO</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html"
                >For the Culture</a
              >
            </h4>
          </div>

          <div class="card-blog-content">
            <img src="{{asset('images/pic2.jpg')}}" alt="" />
            <p>
              23 hours ago
              <span style="float: right">Written By Karen Mwende</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html">The mentally healthy man.</a>
            </h4>
          </div>

          <div class="card-blog-content">
            <img src="{{asset('images/pic3.jpg')}}" alt="" />
            <p>
              2 days ago
              <span style="float: right">Written By Stanley Ani</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html"
                >Love as it is</a
              >
            </h4>
          </div>

          <div class="card-blog-content">
            <img src="{{asset('images/pic4.jpg')}}" alt="" />
            <p>
              3 days ago
              <span style="float: right">Written By Dominic Booth</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html">Inter Miami confirm STUNNING deal for Lionel Messi </a>
            </h4>
          </div>
        </section>
      </main>

      <!-- Main footer -->
      <footer class="main-footer">
        <div>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>
        <small>&copy 2023 Bask Blog</small>
      </footer>
    </div>

    <!-- Click events to menu and close buttons using javaascript-->
    <script>
      document
        .querySelector(".menuButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "100%";
          document.querySelector(".sidebar").style.zIndex = "5";
        });

      document
        .querySelector(".closeButton")
        .addEventListener("click", function () {
          document.querySelector(".sidebar").style.width = "0";
        });
    </script>
  </body>
</html>