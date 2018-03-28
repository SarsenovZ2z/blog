<?php

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create new post</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            body, html {
                overflow-x: hidden;
                word-wrap: break-word;
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
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/new_post.php">Create new <span class="sr-only">(current)</span></a>
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
                <div class="container">
                    <form id="test" class="" action="blog.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="author">Author: </label>
                            <input type="text" name="author" class="form-control" placeholder="" required/>
                        </div>
                        <div class="form-group">
                            <label for="title">Title: </label>
                            <input type="text" name="title"  class="form-control" placeholder="" required/>
                        </div>
                        <div class="form-group">
                            <label for="description_short">Short description: </label>
                            <textarea name="description_short" class="form-control" rows="2" placeholder="" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Description: </label>
                            <textarea name="description" class="form-control" rows="3" placeholder="" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="content">Content: </label>
                            <textarea name="content" class="form-control" rows="5" placeholder="" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Image: </label>
                            <input type="file" name="image"  placeholder=""/>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Upload" accept="image/x-png,image/gif,image/jpeg"/>
                        </div>
                    </form>
                </div>
            </div>

        </section>
    </body>
</html>
