<?php
include "config.php";

$post = new Post();
if (isset($_POST) && $_POST) {
    $post->createNewPost();
}

if (isset($_GET['id'])) {
    $post->getById($_GET['id']);
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <title><?=$post->title?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body, html {
                overflow-x: hidden;
                word-wrap: break-word;
            }
            .post-sm-desc {

            }
            .post {
                padding: 50px;
                min-height: 200px;
                background-image: url(<?=$post->image?>);
                background-position: center;
                background-size: cover;
                color: white;
            }
            .post span {
                background-color: rgba(0, 0, 0, 0.7);
                padding: 3px;
                border-radius: 10px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="/">All posts</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/new_post.php">Create new</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>

        <section>
            <div class="post">
                <div class="container">
                    <h1><span><?=$post->title?></span></h1>
                    <h6><span>Author: <?=$post->author?></span></h6>
                    <span><small><?=$post->date_created?></small></span>
                </div>
            </div>
            <div class="container">
                <hr/>
                <p><strong><?=$post->description?></strong></p>
                <p><?=$post->content?></p>
            </div>
        </section>

        <footer>

        </footer>
        <script>

        </script>
    </body>
</html>
