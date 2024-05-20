<?php
include('count_complaints.php');
?>
<html>
	<head>   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="main.css">
  <title>Grievance system</title>
  
  <style>
	input{
		margin:20px;
	}
	.nav-item{
		padding:0px;
			width:100%;
	}
	.btn1{
		width:200px;
		padding:20px;
	}
	.btn1:hover{
		background:#17a2b8;
	}
	
	.navbar ul{
		padding:0px;
		border:1px solid white;
		width:100%;
	}
	#file1,#file2,#file3{
				display:inline-block;
				font-size:160px;
				margin-left:50px;
				color:aqua;
				padding:20px;
				border-bottom:1px solid black;
			}
			#file1:hover{
				border:1px solid black;
				color:green;
			}
			#file1:hover #pen{
				display:block;
			}
			#file2:hover{
				border:1px solid black;
				color:blue;
			}
				#file2:hover #pen2{
				display:block;
			}
			#file3:hover{
				border:1px solid black;
				color:black;
			}	#file3:hover #pen3{
				display:block;
			}
			.tr{
				width:auto;
				float;left;
				border:1px solid black;
			}
			h5 {
				padding:15px;
			}
			
			#file12:hover #pen{
				display:block;
			}
			#pen,#pen2,#pen3{
				display:none;
				font-size:18px;
				text-align:center;
				border-bottom:0.5px solid black;
			}
			#specialchk
			{
				background-color:blue;
				color:white;
				float:right;
				border:1px solid blue;
				border-radius:10px;
				width:auto;
			}
			h6{
				padding:10px;
				border-bottom:1px solid black;
				border-left:1px solid black;
				border-right:1px solid black;
			}
			#span{
				color:green;
				padding:5px;
			}
			.now{
				display:none;
			}
			#remark{
				color:grey;
				font-size:20px;
			}
			.thead{
				font-size:large;
			}
  </style>
  
</head>
<body>
  
  
	<nav class="navbar-nav navbar-expand-sm bg-info" style="margin:0px;padding:0px;">	
		<i class="fa fa-reorder" onclick="callsh()" style="cursor:pointer;font-size:24px;margin:20px 2px 0px 20px;color:white"></i>
			<div class="nav-item item1" style="margin-left:5%">
				<img src="admin.png" style="border-radius:15%;margin-left:25%;float:left" width="70px" height="80px">
				<h3  style="float:left;cursor:pointer;margin:10px 2px 0px 20px;">Admin</h3>			
			</div>
				<div style="width:50%" >
					<a class="btn btn-danger" style="float:right;padding-left:30px;padding-right:30px;margin:10px;" href="adminlogin1.html">Logout</a>
				</div>
	</nav>
	<nav  class="navbar navbar1 bg-dark" style="float:left;margin:0px;display:block;padding:0px;box-shadow:.2px 1px 2px 1px;" id="sh_menu">
			<!-- Links -->
		<ul class="navbar-nav" style="width:100%;">
			<li class="nav-item" style="width:100%;border-bottom:2px solid white;" >
					<a class="btn btn-dark btn1" onclick="dashboard()" href="#">Dashboard</a>
			</li>
			<li class="nav-item">
					<a class="btn btn-dark btn1" onclick="comp()" href="#">Manage Complaints</a>
			</li>
			<li class="nav-item"  id="p_comp" style="display:none;border-top:1.2px solid white;">
					<a class="btn btn-dark btn1" onclick="pending()" href="#">Pending <br />complaints<p id="specialchk"><?php echo $pend;?></p></a>
			</li>
			<li class="nav-item" id="i_comp"  style="display:none"> 
					<a class="btn btn-dark btn1" onclick="inpro()"  href="#">In progress<p id="specialchk"><?php echo $inpro;?></p></a>
			</li>
			<li class="nav-item" id="ccomp" style="display:none;">
					<a class="btn btn-dark btn1" onclick="complcomp()"href="#">Complete <br />Complaints<p id="specialchk"><?php echo $compl; ?></p></a>
			</li>
			<li class="nav-item" id="f_comp" style="display:none;">
					<a class="btn btn-dark btn1" onclick="full()"  href="#">Full Complaint<br /> history<p id="specialchk"><?php echo $full;?></p></a>
			</li>	
			<li class="nav-item"  style="border-top:2px solid white;">
					<a class="btn btn-dark btn1" onclick="manageuser()" href="#">Manage Users</a>
			</li>
			<li class="nav-item" id="a_user" style="display:none;border-top:1.2px solid white;">
					<a class="btn btn-dark btn1" onclick="auser()"   href="#">All users data</a>
			</li>
			<li class="nav-item" id="l_user"  style="display:none">
					<a class="btn btn-dark btn1" onclick="luser()"   href="#">User Login info</a>
			</li>
		</ul>
	</nav>
		
		<div id="main" style="width:78%;float:left;" >
			<!-----------------DASHBOARD-->
			<div class="" id="dashboard" style="width:100%;display:block;padding:20px;">
			<h4>>Dashboard<hr /></h4>
				<div id="file1" onclick="pending()" style="cursor:pointer;">
					<i class="fa fa-file-text" style=""></i>
					<p id="file12" style="display:block;font-size:15px;text-align:center;">Pending complaints<div id="pen"><?php echo $pend; ?></div></p>
				</div>
				<div id="file2">
					<i class="fa fa-file-text" style="cursor:pointer;" onclick="inpro()"></i>
					<p id="file22" style="display:block;font-size:15px;text-align:center;">in progress complaints<div id="pen2"><?php echo $inpro; ?></div></p>
				</div>
				<div id="file3">
					<i class="fa fa-file-text" style="cursor:pointer;" onclick="complcomp()"></i>
					<p id="file32" style="display:block;font-size:15px;text-align:center;">Completed complaints<div id="pen3"><?php echo $compl; ?></div></p>
				</div>
			</div>
			
			<!-----------------------------pending-->
			
			<div class="" id="pending" style="width:auto;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(91, 12, 9,.1);border:1px solid aqua;">
			<h4>>Pending Complaints<hr /></h4>
				<?php
					include('admin_display_pending_complaints.php');
				?>
			</div>
			<!-------------------inprogress-->
			
			<div class="" id="inprocomp" style="width:97%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(91, 12, 9,.1);border:1px solid aqua;">
			<h4>>In progress Complaints<hr /></h4>
			<?php
				include('admin_display_in_progress_complaints.php');
			?>
			</div>
			
			<!-------------------completed-->
			
			<div class="" id="complcomp" style="width:97%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(91, 12, 9,.1);border:1px solid aqua;">
			<h4>>Completed Complaints<hr /></h4>
				<?php
				include('admin_display_completed_complaints.php');

				?>
			</div>
			<!-----------------------------full-->
			
			<div class="" id="fullhistory" style="width:97%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(91, 12, 9,.1);border:1px solid aqua;">
			<h3>>Full history of Complaints<hr /></h3>
				<?php
					include('admin_display_complaints.php');
			     ?>
			</div>
		
			<!---------------------all-user-->
			
			<div class="" id="alluser" style="width:97%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(91, 12, 9,.1);border:1px solid aqua;">
			<h4>>All Users data<hr /></h4>
				<?php
				include('admin_display_user_registration.php');

				?>
			</div>
		
			<!-------------------------Login-->	
		     <div class="" id="logindata" style="width:97%;float:left;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(91, 12, 9,.1);border:1px solid aqua;">
			     <h4>>Login data<hr /></h4>
			<?php
			include('admin_display_user_info.php');
			?>
			</div>
			
		</div>
		<script src="./afteradminlog.js"></script>
		
	</body>
</html
