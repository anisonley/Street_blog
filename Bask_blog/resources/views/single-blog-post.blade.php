@extends('layout')

@section('main')
<main class="container">
  <section class="single-blog-post">
    <h1>For the Culture</h1>

    <p class="time-and-author">
      2 hours ago
      <span>Written By Timothy Ojo</span>
    </p>

    <div class="single-blog-post-ContentImage" data-aos="fade-left">
      <img src="{{ asset ('images/pic1.jpg') }}" alt="" />
    </div>

    <div class="about-text">
      <p>
        Growing up in Nigeria, the most
        populous country in Africa and with
        diverse cultures, there is one thing
        that is rife when it comes to men as a
        gender. While there have been
        discussions around it over the years
        and some sort of education as to
        what the role of the man is in the
        family and society at large, there is
        still that barrier of not fully
        understanding who a man is. It is so
        bad that the cultural hang-ups
        regarding a man have seeped into
        the church. In a society as deeply
        flawed as ours, the entire
        congruence that a man should be as
        misogynistic as possible is disturbing.
        Since this is not a practice in the
        Bible, I think we should talk about it.
        <br><br>
        You see, gender roles need to be
        understood properly. As a man, what
        are your responsibilities, and what
        are the things not to do before you
        are seen as someone who needs
        education? How do you honour God
        as a man? My first answer will be to
        study the Bible! How many times have
        you studied the Bible and realised
        that all this time you were wrong? For
        me, a lot of times.
        <br><br>
        Do you know why? The Bible is the
        mirror with which we set things right.
        The Bible is not just a book of
        literature. No, it is more than that.
        The Bible helps us understand
        doctrines, and scriptural wisdom over
        the years has proven to be evergreen
        and always timely.
        <br><br>
        Several doctrines that were carved
        by men, have always been to
        suppress women because the culture
        in which they were born realistically
        didn't see them as anything. You
        know how you carry a world view and
        then find something remotely close to
        that in the Bible and take that as
        authority? It is sad because if you
        study the Bible by just reading
        through the words, you may not get
        the lesson. The way you study your
        books by cross-referencing and
        whatnot is exactly how the Bible
        should be studied.
        One big issue that is still a bone of
        contention in the body of Christ is
        the debate that women cannot be
        pastors or should not speak in the
        church. It is shocking because the
        Bible does not even command that.
        <br><br>
        The instruction and the great
        commission are for everybody, male
        and female. "Go ye into all the world
        and preach the gospel to every
        creature, baptising them in the name
        of the Father, Son and Holy Spirit." It
        is this simple. Trying to play the
        patriarchy card in the church is
        unscriptural. It is also baseless in a
        society where women are powerful in
        different spheres of influence.
        While our cultures have ideologies
        that may be hard to relegate, we
        must uphold the scriptures; God's
        instructions above whatever cultural
        learnings we may have had or still
        hold dear.
      </p>
    </div>
  </section>
  <section class="recommended">
    <p>Related</p>
    <div class="recommended-cards">
      <a href="">
        <div class="recommended-card">
          <img src={{ asset('images/pic5.jpg') }} alt="" loading="lazy" />
          <h4>
            The Life of a Techie
          </h4>
        </div>
      </a>
      <a href="">
        <div class="recommended-card">
          <img src={{ asset('images/pic6.jpg') }} alt="" loading="lazy" />
          <h4>
            The Fashionable
          </h4>
        </div>
      </a>
      <a href="">
        <div class="recommended-card">
          <img src={{ asset('images/books.jpg') }} alt="" loading="lazy" />
          <h4>
            Passing Generational Wisdom
          </h4>
        </div>
      </a>

    </div>
  </section>
</main>
@endsection
