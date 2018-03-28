<?php
    require_once "config.php";
    global $db;

    $conn = $db->connect();

    $query = "SELECT id, title, author, description_short, date_created, image FROM posts ORDER BY date_created DESC";
    $result = $conn->query($query);
    $db->closeConnection();
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body, html {
                overflow-x: hidden;
                word-wrap: break-word;
            }
            .post-sm-desc {
                padding-bottom: 20px;
                margin-bottom: 20px;
                background-position: center;
                background-size: cover;
            }
            .post {
                display: block;
                height: 200px;
                overflow-y: hidden;
                padding: 30px 30px 50px 20px;
                transition: 0.2s ease-in;
                color: white;
            }
            .post span {
                padding: 2px;
                border-radius: 5px;
                background-color: rgba(0, 0, 0, 0.5);
            }
            .post:hover {
                transform: scale(1.05);
                color: white;
                text-decoration: none;
            }
            .post:hover span {
                filter: drop-shadow(0 0 0.75rem black);
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
            <div class="jumbotron">
                <div class="row">
                    <?php while($post = mysqli_fetch_object($result, 'Post')):?>
                        <div class="col-lg-3 post-sm-desc" style="background-image: url(<?=$post->image?>)">
                            <a href="/blog.php?id=<?=$post->id?>" class="post">
                                <h4><span><?=$post->title?></span></h4>
                                <h6><span>Author: <?=$post->author?></span></h6>
                                <small><span><?=$post->date_created?></span></small>
                                <h6><span><?=$post->description_short?></span></h6>
                            </a>
                        </div>
                    <?php endwhile;?>
                    <?php
                        mysqli_free_result($result);
                    ?>
                </div>
            </div>
        </section>

        <footer>

        </footer>
        <script>

        </script>
    </body>
</html>
