
<?php
    $connect_to_db = mysqli_connect('localhost', 'user', 'pass', 'db');

    $user = $_POST['user'];

    $allowedExts = array("gif", "jpeg", "jpg", "png");
    $temp = explode(".", $_FILES["file"]["name"]);
    $extension = end($temp);

    if ((($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/jpg")
    || ($_FILES["file"]["type"] == "image/pjpeg")
    || ($_FILES["file"]["type"] == "image/x-png")
    || ($_FILES["file"]["type"] == "image/png"))
    && in_array($extension, $allowedExts)) {

      if ($_FILES["file"]["error"] > 0) {

        echo "Error: " . $_FILES["file"]["error"] . "<br>";

      } else {

        //Move the file to the uploads folder
        move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $_FILES["file"]["name"]);

        //Get the File Location
        $filelocation = 'http://yourdomain.com/uploads/'.$_FILES["file"]["name"];

        //Get the File Size
        $size = ($_FILES["file"]["size"]/1024).' kB';

        //Save to your Database
        mysqli_query($connect_to_db, "INSERT INTO images (user, filelocation, size) VALUES ('$user', '$filelocation', '$size')");

        //Redirect to the confirmation page, and include the file location in the URL
        header('Location: confirm.php?location='.$filelocation);
      }
    } else {
      //File type was invalid, so throw up a red flag!
      echo "Invalid File Type";
    }
?>