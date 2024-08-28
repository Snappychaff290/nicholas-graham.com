<!doctype html>

<title>My Blog</title>
@vite(['resources/css/posts.css'])

<body>
<article>
  <?= $post; ?>
  </article>

  <a href="/posts">Go Back</a>
</body>