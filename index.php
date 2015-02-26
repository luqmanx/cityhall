 <?php
        session_set_cookie_params(0);
 		session_start();
 		
        include('conn.php');
		$query = mysql_query("SELECT * FROM select_majlis") or die("Query failed: ".mysql_error());
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Index File</title>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">

  		<link rel="stylesheet" href="css/bootstrap.min.css">
		<script src="jquery/jquery-1.8.3.min.js"></script>
		<script src="jquery/jquery.validate.min.js"></script>

		<script type="text/javascript">
		$(document).ready(function () 
		{
    		$('#indexform').validate(
    		{
        		onclick: false, // <-- add this option
        		rules: 
        		{
            	id_maj: "required"
        		},
        		messages: 
        		{
            	id_maj: {
                required: "Sila pilih negeri!"
            	}
        	},
        	errorPlacement: function (error, element) 
        	{
            alert(error.text());
        	}
        	
    		});
		});
		</script>

		<script type="text/javascript">
		$(document).ready(function() 
		{
			$("#dropdown2").hide();
			$("#id_maj").change(function() 
			{
		//$(this).after('<div id="loader"><img src="img/loading.gif" alt="loading subcategory" /></div>');
		//$(this).after('<div id="loader">/div>');
				$("#dropdown2").show();
				$(this).slideDown(200, function() 
				{
					$.get('getmajlis.php?id_maj=' + $(this).val(), function(data) 
					{
						$("#sub_majlis").html(data);
			//$('#loader').slideDown(200, function() {
						$(this).remove();
					});
				});	
    		});

		});
		</script>

  
	</head>

	<body>
		<div class="container">
  			<div class="jumbotron">
    			<h1>Selamat Datang Sistem Aduan Majlis Bandaran</h1>
  			</div>

					<form action="pagedetails.php" method="post" class="form-group" id="indexform" novalidate="novalidate">

  						<label for="sel1">Sila pilih negeri:</label>
  						<select name="id_maj" id="id_maj" class="form-control" required>
  						<option value="">Sila Pilih</option>
  							<?php while($row = mysql_fetch_array($query)): ?>
	  							<option value="<?php echo $row['id_maj']; ?>" name="state"><?php echo $row['state']; ?></option>
	  						<?php endwhile; ?>
						</select>
						<br><br>

						<div id="dropdown2">
						<p><label for="sel2">Sila pilih majlis bandaran:</label>
							<select name="sub_majlis" id="sub_majlis" class="form-control"></select>
						</p>
						<br><br>
						</div>

							<button type="submit" class="btn btn-default" name='submit1'>Next Page</button>
					</form>
		</div>
</html>

