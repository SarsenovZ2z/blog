<?php
    class Post {
        public $id;
        public $title;
        public $description_short;
        public $description;
        public $author;
        public $date_created;
        public $image;
        public $content;

        public function createNewPost() {
            global $db, $upload_dir, $default_image;
            foreach($_POST as $key=>$value) {
                $this->$key = htmlspecialchars($value);
            }
            $this->image = $default_image;
            if ($_FILES['image']['tmp_name']) {
                $file_name = date("Y-m-d-H-i-s")."-".uniqid()."-".basename($_FILES['image']['name']);
                $uploadfile = $upload_dir.$file_name;
                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile)) {
                    $this->image = $uploadfile;
                }
            }

            $conn = $db->connect();
            $query = "INSERT INTO posts (title, description_short, description, author, image, content) VALUES (".strval($this).")";
            $conn->query($query);

            //setting id and date_created
            $query = "SELECT id, date_created FROM posts LIMIT 1";
            $result = mysqli_fetch_object($conn->query($query));
            $this->id = $result->id;
            $this->date_created = $result->date_created;
            mysqli_free_result($result);
            $db->closeConnection();
        }

        public function getById($id) {
            global $db;
            $conn = $db->connect();
            $query = "SELECT * FROM posts WHERE id=".$_GET["id"];
            $result = $conn->query($query);
            $post = mysqli_fetch_object($result);
            foreach($post as $key=>$value) {
                $this->$key = $value;
            }
            mysqli_free_result($result);
            $db->closeConnection();
        }

        public function __toString() {
            return ("'".$this->title."', '".$this->description_short."', '".$this->description."', '".$this->author."', '".$this->image."', '".$this->content."'");
        }

    }
?>
