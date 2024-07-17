<!doctype html>

<title>My Blog</title>
@vite(['resources/css/posts.css', 'build'])

<body>
<article>
  <?= $post; ?>
  </article>

  <a href="/posts">Go Back</a>
</body>