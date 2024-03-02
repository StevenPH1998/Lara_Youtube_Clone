<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
  <link rel="shortcut icon" href="icon/logo.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/89c0957ca7.js" crossorigin="anonymous"></script>
  <title>Youtube Clone</title>
</head>

<body>
  <header>
    <nav>
      <div class="nav-group">
        <i class="nav-icon fas fa-bars fa-lg"></i>
        <i class="youtube-icon nav-icon fab fa-youtube fa-lg"></i>
      </div>
      <div class="nav-group search">
        <input type="text" placeholder="Search" />
        <button class="search-button"><i class="fas fa-search"></i></button>
      </div>
      <div class="nav-group">
        <i class="nav-icon fas fa-video fa-lg"></i>
        <i class="nav-icon fas fa-th fa-lg"></i>
        <i class="nav-icon fas fa-bell fa-lg"></i>
        <i class="nav-icon fas fa-user-circle fa-lg"></i>
      </div>
    </nav>
  </header>

  <main class="container">
    <section class="video-and-comments">
      <section>
        <iframe src="https://www.youtube.com/embed/6kAvCSMkYEI"
          allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p class="video-title">The Last Intel Mac VS the Osborne</p>
        <div class="video-stats">
          <div class="video-stat">838,026 views•Aug 10, 2020</div>
          <div class="video-stat">
            <i class="title-icon fas fa-thumbs-up"></i> 115K
            <i class="title-icon fas fa-thumbs-down"></i> 1.1K
            <i class="title-icon fas fa-share"></i>
            <i class="title-icon fas fa-save"></i>
          </div>
        </div>
        <hr />
        <div class="video-about">
          <figure class="avatar">
            <img src="icon/video_avatar_picture.JPG" alt="Youtuber's profile picture" />
            <figcaption class="youtuber-name">
              <strong>MKBHD</strong>
            </figcaption>
          </figure>
          <div class="subscribe">
            <button class="subscribe-button">SUBSCRIBE</button>
            <i class="far fa-bell fa-lg"></i>
          </div>
        </div>

      </section>
      @foreach ($comments_video as $data )


      <section>
        <div class="comment">
          <i class="fas fa-user-astronaut fa-lg"></i>
          <span class="comment-name">Lorem ipsum</span>
          <p class="comment-text">
            {{ $data->comments_user }}
          </p>
          <div class="comment-buttons">
            <i class="fas fa-thumbs-up"></i> {{ $data->likes }}
            <i class="fas fa-thumbs-down"></i>
            REPLY
            <p class="view-replies">
              <i class="fas fa-arrow-down"></i> View 9 Replies
            </p>
          </div>
        </div>
      </section>
      @endforeach
    </section>
    <aside>
      <div class="recommend-video">
        <img src="icon/video2.PNG" alt="The NEW Samsung Galaxy Tab S7+" />
        <div class="video-info-recommend">
          <span class="recommend-video-title">
            The NEW Samsung Galaxy Tab S7+
          </span>
          <div class="creator-name">
            <p>Dave Lee</p>
            <p>1.2M views</p>
          </div>
        </div>
      </div>

      <div class="recommend-video">
        <img src="icon/video3.PNG" alt="First Flight on Another Planet!" />
        <div class="video-info-recommend">
          <span class="recommend-video-title">
            First Flight on Another Planet!
          </span>
          <div class="creator-name">
            <p>Veritasium</p>
            <p>4M views</p>
          </div>
        </div>
      </div>
      <div class="recommend-video">
        <img src="icon/video2.PNG" alt="The OLD Samsung Galaxy Tab S7+" />
        <div class="video-info-recommend">
          <span class="recommend-video-title">
            The OLD Samsung Galaxy Tab S7+
          </span>
          <div class="creator-name">
            <p>Lee Dave</p>
            <p>2.1M views</p>
          </div>
        </div>
      </div>

      <div class="recommend-video">
        <img src="icon/video3.PNG" alt="Second Flight on Another Planet!" />
        <div class="video-info-recommend">
          <span class="recommend-video-title">
            Second Flight on Another Planet!
          </span>
          <div class="creator-name">
            <p>Veritasium2</p>
            <p>32M views</p>
          </div>
        </div>
      </div>
    </aside>
  </main>
</body>

</html>
