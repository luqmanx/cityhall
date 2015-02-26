<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Thank You Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
  </head>

  <body>

  	<div class="container">
      <div class="jumbotron">
    
      <form>
  	   
       <?php
        session_set_cookie_params(0);
        session_start();
 
        $id_maj = $_SESSION['id_maj'];
        $sub_majlis = $_SESSION['sub_majlis'];
        $tajuk=$_SESSION['tajuk'];
        $tempat = $_SESSION['tempat'];
        $tambahan=$_SESSION['tambahan'];
        $image=$_SESSION['image'];
 
        $_SESSION['nama'] = $_POST['nama'];
        $_SESSION['telefon'] = $_POST['telefon'];
        $_SESSION['email'] = $_POST['email'];

        //print_r($_SESSION);
        //extract($_SESSION['post']); // Function to extract array
        //echo '<pre>';

        include ('conn.php');

        $nama=$_SESSION['nama'];
        $telefon=$_SESSION['telefon'];
        $email=$_SESSION['email'];
        $ip = $_SERVER['REMOTE_ADDR'];

        //save session id_maj to actual state
        $state = mysql_query("SELECT * FROM select_majlis Where id_maj='$id_maj'");

          while($row = mysql_fetch_assoc($state))
           {  
            $id_maj = $row['state'];
           }

        //save session sub_majlis to actual name majlis
        $sql = mysql_query("SELECT id,name_maj,PIC_email FROM majlis_name Where id='$sub_majlis'"); //or die(mysql_error());
           // fetch the data into variables 
          while($row = mysql_fetch_assoc($sql))
           {  
            $PIC_email = $row['PIC_email'];
            $sub_majlis = $row['name_maj'];
           }
 
        //insert session to database
        $query = mysql_query("insert into details(state,majlis_name,tajuk_aduan,tempat_aduan,mak_tambahan,image_name,nama_pengadu,tel_no,email,ip_address,email_PIC) values('$id_maj','$sub_majlis','$tajuk','$tempat','$tambahan','$image','$nama','$telefon','$email','$ip','$PIC_email')") or die(mysql_error());
 
          include 'emailtemplate.php';
          $to=$PIC_email;
          $subject="Email verification";


          $id_aduan = mysql_insert_id();

          $timestamp_query =mysql_query('SELECT timestamp_created FROM details where id_aduan = "'.$id_aduan.'"');
          while($row = mysql_fetch_assoc($timestamp_query))
          {
            //$timestamp=$row['timestamp_created'];
            $timestamp=date('M j Y g:i A', strtotime($row['timestamp_created']));
          }

          $body='<h2>Aduan baru untuk : '.$sub_majlis. ', '.$id_maj.'</h2><br/><br/>
            <p> ID Aduan : '.$id_aduan.' </p>
            <p> Tajuk Aduan : '.$tajuk.' </p>
            <p> Tempat Berkenaan : '.$tempat.' </p>
            <p> Maklumat Tambahan : '.$tambahan.' </p>
            <p> Nama Pengadu : '.$nama.' </p>
            <p> No Telefon : '.$telefon.' </p>
            <p> Email Pengadu : '.$email.' </p>
            <p> IP Address : '.$ip.' </p>
            <p> Waktu & Tarikh Laporan : '.$timestamp.' </p>';



          Send_Mail($to,$subject,$body,$tajuk,$image);

        if ($query) 
        {
          echo '<p><span id="success">Terima kasih. Aduan anda telah direkod dan dihantar kepada PIC bertugas</span></p>';
        } 
    
        else 
        {
          echo '<p><span>Aduan tidak dapat disimpan.Sila cuba sebentar lagi</span></p>';
 //} 
        }

      session_unset();
      session_destroy();
     //unset($_SESSION);
    // Destroying session.
      ?>
      </form>
      </div>
    </div>
    
  </body>

</html>

