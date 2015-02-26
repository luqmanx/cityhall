<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Page User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style type="text/css">
    /* Simple message styles customization */
    #form2 label.error 
    {
    color:red;
    }
    #form2 input.error 
    {
    margin-left: 2px;
    border:1px solid red;
    }
    </style>

    <script src="jquery/jquery-1.8.3.min.js"></script>
    <script src="jquery/jquery.validate.min.js"></script>
    <script type="text/javascript">
    <!--
    // Form validation code will come here.
    jQuery(function ($) 
    {
    $(document).ready(function()
    {
      $("#form2").validate(
      {
        rules: 
        {
        nama:"required",
        email:"required",
         //email: {
            //required: true,
            //email:true,
               //}
          //tempat:{
            //required: true
          //}
        },
        messages: 
        {
            nama: "Sila isi nama",
            email: "Sila isi email",
        }
      });
    });
    });
    
    </script>
  </head>

  <body>
  	<div class="container">
      <div class="jumbotron">
        <form class="form-horizontal" action="thankyou.php" method="post" id="form2" novalidate="novalidate">
        <div class="control-group">
          <legend>Maklumat Pengadu</legend>
          <br>
          <span>* required field</span>
          <br>

          <label class="control-label" >Nama *</label>
            <div class="controls">
              <input type="text" placeholder="Nama…" class="input-xxlarge" name="nama" required>
            </div>
          <br>

          <label class="control-label" >No Telefon</label>
            <div class="controls">
              <input type="text" placeholder="01XXXXXXXX" class="input-xxlarge" name="telefon">
            </div>
            <br>

          <label class="control-label" name="tambahan">Email *</label>
            <div class="controls">
              <input type="text" placeholder="a@example.com" class="input-xxlarge" name="email" required>
            </div>
            <br>

            <div class="controls">
              <input type="reset" class="btn" value="Reset" /></input>
              <button type="submit" class="btn" name="submit3">Submit</button>
            </div>

        </form>
        </div>
      </div>
    </div>
  </body>
</html>

  <?php

    session_set_cookie_params(0);
    session_start();

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image

      if(isset($_POST["submit"]) && file_exists($_FILES["image"]["tmp_name"]))
      {
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if($check !== false) 
        {
          $image=$check["mime"];
          //echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } 
        else 
        {
          echo "File is not an image.";
          $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) 
        {
      
         $_FILES['image']['name']=rand(1,100000).$_FILES['image']['name'];
          //echo "Sorry, file already exists.";
          $target_file=$target_dir .basename( $_FILES["image"]["name"]);
          $uploadOk = 1;
       
        }

         // Check file size
        if ($_FILES["image"]["size"] > 1024*1024) 
        { 
          echo "Sorry, your file is too large.";
          $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) 
        {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) 
        {
        echo "Sorry, your file was not uploaded.";
        } 

        // if everything is ok, try to upload file
        else 
        {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) 
        {
        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
        $_SESSION['image'] = $target_dir .$_FILES["image"]["name"];

        } 

        else 
        {
        //echo "Sorry, there was an error uploading your file.";
        $_SESSION['image']="";

        }
        
      }
    }

    $id_maj=$_SESSION['id_maj'];
    $sub_majlis=$_SESSION['sub_majlis'];
    $image=$_SESSION['image'];
    $_SESSION['tajuk'] = $_POST['tajuk'];
    $_SESSION['tempat'] = $_POST['tempat'];
    $_SESSION['tambahan'] = $_POST['tambahan'];

  ?>