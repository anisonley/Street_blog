@extends('layout')

@section('main')
<main class="container">
    <h2 class="header-title">All Blog Posts</h2>
    <div class="searchbar">
      <form action="">
        <input type="text" placeholder="Search..." name="search" />

        <button type="submit">
          <i class="fa fa-search"></i>
        </button>

      </form>
    </div>
    <div class="categories">
      <ul>
        <li><a href="">Life Style</a></li>
        <li><a href="">Tech</a></li>
        <li><a href="">Entertainment</a></li>
        <li><a href="">Sports</a></li>
        <li><a href="">Health</a></li>
      </ul>
    </div>
    <section class="cards-blog latest-blog">
      <div class="card-blog-content">
        <img src={{ asset('images/pic1.jpg') }} alt="" />
        <p>
            2 hours ago
            <span style="float: right">Written By TIMOTHY OJO</span>
        </p>
        <h4 style="font-weight: bolder">
            <a href="{{ route('single-blog-post.show') }}">For the Culture</a>
        </h4>
      </div>

      <div class="card-blog-content">
        <img src={{ asset('images/pic2.jpg') }} alt="" />
        <p>
            23 hours ago
        <span style="float: right">Written By Karen Mwende</span>
        </p>
        <h4 style="font-weight: bolder">
            <a href="{{ route('single-blog-post.show') }}">The mentally healthy man.</a>
        </h4>
      </div>

      <div class="card-blog-content">
        <img src={{ asset('images/pic3.jpg') }} alt="" />
        <p>
            2 days ago
            <span style="float: right">Written By Stanley Ani</span>
        </p>
        <h4 style="font-weight: bolder">
            <a href="{{ route('single-blog-post.show') }}">Love as it is</a>
        </h4>
      </div>

      <div class="card-blog-content">
        <img src={{ asset('images/pic4.jpg') }} alt="" />
        <p>
            3 days ago
            <span style="float: right">Written By Dominic Booth</span>
        </p>
        <h4 style="font-weight: bolder">
            <a href="{{ route('single-blog-post.show') }}">Inter Miami confirm STUNNING deal for Lionel Messi </a>
        </h4>
      </div>

      <div class="card-blog-content">
        <img src={{ asset('images/pic5.jpg') }} alt="" />
        <p>
          2 weeks ago
          <span>Written By Bask </span>
        </p>
        <h4 style="font-weight: bolder">
          <a href="{{ route('single-blog-post.show') }}">The Life of a Techie</a>
        </h4>
      </div>

      <div class="card-blog-content">
        <img src={{ asset('images/pic6.jpg') }} alt="" />
        <p>
          1 month ago
          <span>Written By Jedidiah Divine</span>
        </p>
        <h4 style="font-weight: bolder">
          <a href="{{ route('single-blog-post.show') }}">The Fashionable</a>
        </h4>
      </div>

      <!-- pagination -->
      <div class="pagination" id="pagination">
        <a href="">&laquo;</a>
        <a class="active" href="">1</a>
        <a href="">2</a>
        <a href="">3</a>
        <a href="">4</a>
        <a href="">5</a>
        <a href="">&raquo;</a>
      </div>
    </section>
@endsection