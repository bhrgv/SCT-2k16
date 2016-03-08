<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SCT-2k16</title>

    <!-- Bootstrap Core CSS -->
    <link href="./../css/bootstrap.min.css" rel="stylesheet">


    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="bgcolor:white">

    <h1>SCT-2k16<span class="label label-default"></span></h1>
    <div class="address-bar">March 14th and 15th, 2016</div>
    <!-- /.container -->
	<table class="table">
		<tr>
			<th><h4>S.No</h4></th>
			<th><h4>Name</h4></th>
			<th><h4>Designation</h4></th>
			<th><h4>Department</h4></th>
			<th><h4>Organisation</h4></th>
			<th><h4>Address</h4></th>
			<th><h4>Email ID</h4></th>
			<th><h4>Phone</h4></th>
		</tr>
		<?php
		require_once('./../install/connect.php');
		mysqli_select_db($connect,$database);
		$query="SELECT * from register";
		$retval=mysqli_query($connect,$query);
		if(!$retval) die('Retrieve Error: '.mysqli_error($connect));
		while($row=mysqli_fetch_array($retval,MYSQLI_ASSOC))
		{
			$id=$row['ID'];
			$name=$row['name'];
			$emailid=$row['email_id'];
			$desg=$row['designation'];
			$dept=$row['dept'];
			$org=$row['organization'];
			$address=$row['address'];
			$number=$row['phone_number'];
			echo "<tr>";
			echo "<td>$id</td>"
			echo "<td>$name</td>";
			echo "<td>$desg</td>";
			echo "<td>$dept</td>";
			echo "<td>$org</td>";
			echo "<td>$address</td>";
			echo "<td>$emailid</td>";
			echo "<td>$number</td>";
			echo "</tr>";
		}
		?>
	</table>
	</table>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                   <p class="copyright-text white-text" style="background-color=#900000"><a src="http://creativecommons.org/licenses/by-sa/4.0/">
             This work by MVGR-GLUG is licensed under a Creative Commons Attribution-ShareAlike 4.0 International License.</br>
				<img src="./../img/features/lic.jpg" width="50px;" height="50px;"/>
              
            </a></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="./../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./../js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000//changes the speed
    })
    </script>

</body>

</html>
