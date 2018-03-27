  <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container">
      <a class="navbar-brand" href="/laravel-blog/public">{{config('app.name','LBlog')}}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="/laravel-blog/public">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/laravel-blog/public/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/laravel-blog/public/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/laravel-blog/public/posts">Blog</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="btn btn-success" role="button" href="/laravel-blog/public/posts/create">Create Post</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>