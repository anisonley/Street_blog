@extends('layout')

@section('header')
<header class="header" style="background-image: url({{asset('images/photography.jpg')}});">
  <div class="header-text">
    <h1>Bask Blog</h1>
    <h4>Having latest news at your finger tips</h4>
  </div>
  <div class="overlay"></div>
</header>
@endsection

@section('main')
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
        <a href="/single-blog"
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
        <a href="/single-blog">The mentally healthy man.</a>
      </h4>
    </div>

    <div class="card-blog-content">
      <img src="{{asset('images/pic3.jpg')}}" alt="" />
      <p>
        2 days ago
        <span style="float: right">Written By Stanley Ani</span>
      </p>
      <h4 style="font-weight: bolder">
        <a href="/single-blog"
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
        <a href="/single-blog">Inter Miami confirm STUNNING deal for Lionel Messi </a>
      </h4>
    </div>
  </section>
</main>

@endsection