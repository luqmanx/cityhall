<?php
  session_set_cookie_params(0);
  session_start();
  include ('conn.php');


  $_SESSION['id_maj'] = $_POST['id_maj'];
  $_SESSION['sub_majlis'] = $_POST['sub_majlis'];
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Page Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jasny-bootstrap.css">

    <style type="text/css">
    /* Simple message styles customization */
    #myForm label.error 
    {
    color:red;
    }
    #myForm input.error 
    {
    border:1px solid red;
    }
    </style>
 
    <script src="jquery/jquery-1.8.3.min.js"></script>
    <script src="jquery/jasny-bootstrap.js"></script>
    <script src="jquery/jasny-bootstrap.min.js"></script>
    <script src="jquery/jquery.validate.min.js"></script>
  
    <script type="text/javascript">
    <!--
    // Form validation code will come here.
    jQuery(function ($) 
    {
      $(document).ready(function()
      {
        $("#myForm").validate(
        {
          rules: 
          {
          tajuk:"required",
          tempat:"required",
          //tajuk: {
              //required: true
                 //}
            //tempat:{
             //required: true
            //}
          },
          messages: 
          {
            tajuk: "Sila isi tajuk",
            tempat: "Sila isi tempat",
          }
        });
      });
    });
    
    </script>
  </head>

  <body>

    <div class="container">
        <div class="jumbotron">
            <form class="form-horizontal" action="pageuser.php" method="post" enctype='multipart/form-data' id="myForm" novalidate="novalidate">
              <div class="control-group">

                  <legend>Maklumat Aduan</legend>
                  <br>
                  <span>* required field</span>
                  <br>

    
                    <label class="control-label" >Tajuk *</label>
                          <div class="controls">
                            <input type="text" placeholder="Tajuk aduan…" class="input-xxlarge" name="tajuk" required> 
                          </div>
                          <br>

                    <label class="control-label" >Lokasi *</label>
                          <div class="controls">
                            <input type="text" placeholder="Tempat aduan…" class="input-xxlarge" name="tempat" required>
                          </div>
                          <br>

                    <label class="control-label" >Maklumat Tambahan</label>
                          <div class="controls">
                            <textarea rows="5" class="input-xxlarge" name="tambahan"></textarea>
                          </div>
                          <br>

                          <div class="controls">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                              <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;" >
                              </div>
                                <div>
                              <span class="btn btn-default btn-file" ><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="image"></span>
                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                          </div>
                          <br>

                          <div class="controls">
                              <input type="reset" class="btn" value="Reset" /></input>
                                <button type="submit" class="btn" name="submit">Next Page</button>
                          </div>
            </form>
              </div>
        </div>
    </div>
  </body>
</html>