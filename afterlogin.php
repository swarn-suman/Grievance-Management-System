<?php
include('user_data.php');
?>
<html>
 <head>
<title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="main.css">
		<style>
			.items{
				margin-top:5px;
				margin-right:5%;
				font-family:Cooper Black;
				float:right;
			}
			.btn1{
				width:100%;
			}
			.navbar1{
				width:200px;
				border:1px solid #a79c9c42;
				padding:0px;
				box-shadow:1px 2px 3px 0.5px;;
				background-color:#e4d7d7ab;
			}
			.navbar-nav,.nav-item{
				width:100%;
			}
			img{
				margin:10px;
				margin-left:50px;
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
			.in1{
				width:100%;
				border-radius:15px;
				padding:10px;
				font-size:18px;
				
			}
			#span{
				
				font-size:21px;
			}
			td{
				border-top:1px solid aqua;
				text-align:center;
			}
			.tr{
				width:auto;
			}
			.table,.tr{
				padding:10px;
				float;left;
				border:1px solid black;
			}
			th{
				
				text-align:center;
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
			#remark{
				color:green;
				padding:10px;
				font-size:24px;
			}
		</style>
		<script>
		function image2Text(){
				window.location.assign('index1.html');
			}
		function speech2Text(){
				window.location.assign('index2.html');
			}
		</script>
	</head>
	<body>
				<nav class="navbar-nav nav2 navbar-expand-sm bg-primary">
		
<i class="fa fa-reorder" onclick="callsh()" style="cursor:pointer;font-size:24px;margin:10px 2px 0px 20px;color:white"></i>		
	     <div class="nav-item item1" style="margin-left:5%">
		<h3 style="color:white"><?php echo $fname." ".$lname; ?></h3>
		</div>
		<div class="nav-item items"  style="margin-left:50%;">
			<a class="btn btn-danger" title="Click to Logout" href="userlogin1.html">LOGOUT</a>
		</div>
		<button onclick="setLanguage('en')" class="btn btn-warning mx-2 rounded-pill">English</button>
               <button onclick="setLanguage('hi')" class="btn btn-warning mx-1 rounded-pill" >हिन्दी</button>
		</nav>
		<!-- Links -->
		<nav  class="navbar navbar1 bg-light" style="float:left;margin-top:0px;display:block;background-color:#e4d7d7ab;" id="sh_menu">		
  			<ul class="navbar-nav" style="width:100%;background-color:#17a2b86e;">
			  	<li class="nav-item" >			
					<img src="user.png" width="90px" height="80px">
		   		</li>
    				<li class="nav-item"  >
      				<a class="btn btn-dark btn1" onclick="dashboard()" data-translate="dashboard" href="#">Dashboard</a>
    				</li><br />
    				<li class="nav-item">
     				 <a class="btn btn-dark btn1" onclick="comp()" data-translate="complaint" href="#">Complaint</a>
   				 </li>
	 			<li class="nav-item" style="display:none;" id="m_comp">
      				<a class="btn btn-dark btn1" onclick="makecomplaint()" data-translate="makecomplaint" href="#">Make Complaint</a>
    				</li>
    				<li class="nav-item" >
      				<a class="btn btn-dark btn1" onclick="completed()" style="display:none;" data-translate="completed" id="c_comp" href="#">Completed</a>
    				</li>
    				<li class="nav-item" >
      				<a class="btn btn-dark btn1" onclick="inpro()" style="display:none;" data-translate="inprogress" id="i_comp" href="#">Inprogress</a>
   				</li>
    				<li class="nav-item" >
      				<a class="btn btn-dark btn1" onclick="pending()" style="display:none;" id="p_comp" data-translate="pending" href="#">Pending</a>
    				</li>
				<li class="nav-item" >
     				 <a class="btn btn-dark btn1" onclick="history()" style="display:none;" id="h_comp" data-translate="complaintHistory" href="#">Complaint history</a>
				</li>
	    			<li class="nav-item">
     				 <a class="btn btn-dark btn1" onclick="personal()" data-translate="personalInfo" href="#">Personal Info</a>
    				</li>
	   			 <li class="nav-item">
     				 <a class="btn btn-dark btn1" onclick="editinfo()" style="display:none;" data-translate="editInfo" id="e_info" href="#">Edit Info</a>
   				</li>
	    			<li class="nav-item">
      				<a class="btn btn-dark btn1" onclick="changepass()" style="display:none;" data-translate="changePassword" id="c_pass" href="#">Change password</a>
    				</li>
 		 	</ul>
		</nav>
		<div id="main" style="width:78%;float:left;" >
			<div class="" id="dashboard" style="width:100%;display:block;padding:20px;">
			<h4>>Dashboard<hr /></h4>
				<div id="file1" onclick="pending()" style="cursor:pointer;">
					<i class="fa fa-file-text" style=""></i>
					<p id="file12" style="display:block;font-size:15px;text-align:center;" data-translate="PendingComplaint" >Pending complaints<div id="pen"><?php echo $pend; ?></div></p>
				</div>
					<div id="file2" onclick="inpro()" style="cursor:pointer;">
						<i class="fa fa-file-text" style=""></i>
						<p id="file22" style="display:block;font-size:15px;text-align:center;" data-translate="inProgressComplaint" >in progress complaints<div id="pen2"><?php echo $inpro; ?></div></p>
					</div>
					<div id="file3" onclick="completed()" style="cursor:pointer;">
						<i class="fa fa-file-text" style=""></i>
						<p id="file32" style="display:block;font-size:15px;text-align:center;" data-translate="completedComplaint" >Completed complaints<div id="pen3"><?php echo $compl; ?></div></p>
					</div>
		</div>
			
			<!--------------------------------DASHBOARD-->
			<!--------------------------editinfo-->
			<div class="" id="editinfo" style="width:90%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(32, 76, 5, 0.1);border:1px solid aqua;">
				<h4>>Personal Information<hr /></h4>
				<form class="form" action="userupdateinfo" method="POST" style="width:100%;">
					<span id="span">First Name</span><input type="text"  name="fname" class="form-control in1" placeholder="First name" value="<?php echo $fname; ?>"><br />
					<span id="span">Last Name</span><input type="text" name="lname" class="form-control in1" placeholder="Last name" value="<?php echo $lname; ?>"><br />
					<span id="span">Email</span><input type="text" name="email" class="form-control in1" placeholder="Email" value="<?php echo $email; ?>"><br />
					<span id="span">Phone number</span><input type="text" name="phone" class="form-control in1" placeholder="Phone number" value="<?php echo $phone; ?>"><br />
					<span id="span">Gender</span>
					<select name="gender" class="form-control in1" style="padding:2px;"  value="<?php echo $gender; ?>">
						<option>Male</option>
						<option>Fe Male</option>
					</select><br />
					<input type="submit"  class="btn btn-success " style="width:auto ;padding:10px;padding-left:50px;padding-right:50px;"  value="save"><br />
				</form>
			</div>

			<!--------------------------------makecomp-->
			<div class="" id="makecomplaint" style="width:100%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(32, 76, 5, 0.1);border:1px solid aqua;">
				<h4 data-translate="makecomp">>Make a complaint<hr /></h4>
				<form class="form" action="usermakecomp.php" method="POST" style="width:100%;" enctype="multipart/form-data">
					<span id="span2" data-translate="cat">Category</span>
					<select id="category" name="category" style="width:30%;border-radius:12px;height:37px;"> 
						<option data-translate="oth">Other</option>
						<option data-translate="ElecMmb">Elected Members</option>
						<option data-translate="GenPub">General Public</option>
					</select>
					<span id="span2" data-translate="subcat" style="margin-left:20px;">Sub Categry</span>
					<input type="text" name="subcategory" style="width:30%;border-radius:5px;height:37px; border:.8px solid aqua;" placeholder="Please Enter a subcategory..">
					<br /><br />
					<span id="span2" data-translate="naturecomp">Nature of Complaint</span><input type="text" name="nature" class="form-control in2" placeholder="Regarding to ...."><br />
					<span id="span" data-translate="comp">Complaint</span>
					<textarea name="comp" class="form-control in1" placeholder="Feel free to write. Your complaint is secure." style="height:200px;"></textarea><br />
					<br /><span id="span">Regarding File (If any)</span><input name="f2" type="file" class="form-control" >
				<br />
					<input type="submit"  class="btn btn-success " style="width:auto ;padding:10px;padding-left:50px;padding-right:50px;"  value="Send/दर्ज करें"><br />
				</form>
				<button class="btn btn-success " onclick="image2Text()">image 2 text</button>
				<button class="btn btn-success " onclick="speech2Text()">speech2Text</button>
			</div>
			
			<!--------------------------------pending-->
			<div class="" id="pending" style="width:90%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(32, 76, 5, 0.1);border:1px solid aqua;">
				<h4>>Pending Information<hr /></h4>
				<?php
	                 include('display_pending_complaints.php');
	 			?>
			</div>
			
			<!---------------------------------inpro-->
			<div class="" id="inpro" style="width:90%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(32, 76, 5, 0.1);border:1px solid aqua;">
				<h4>>Inprogress Complaints<hr /></h4>
				<?php
	                 include('display_inprogress_complaints.php')
				?>
			</div>
			
			<!-------------------------------completed-->
			<div class="" id="completed" style="width:90%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(32, 76, 5, 0.1);border:1px solid aqua;">
				<h4>>Completed Complaints<hr /></h4>
				<?php
				include('display_completed_complaints.php');
				?>
			</div>
			
			
			<!-----------------------------------history-->
			<div class="" id="history" style="width:90%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(32, 76, 5, 0.1);border:1px solid aqua;">
				<h4>>History Information<hr /></h4>
				<?php
					include('display_all_complaints.php');
				?>
			</div>
			
			<!------------------------------changepass-->
			<div class="" id="changepass" style="width:90%;display:none;border-radius:15px;padding:15px;margin:10px;background-color:rgba(32, 76, 5, 0.1);border:1px solid aqua;">
				<h4>>Change Password<hr /></h4>
				<form class="form" action="userchangepass.php" method="POST" style="width:100%;">
				
					<span id="span" data-translate="oldpa" >Enter OLD password</span><input type="password"  name="oldpass" class="form-control in1" placeholder="Old Password..."><br />		
					<span id="span">Enter new Password</span><input type="password" name="newpass" class="form-control in1" placeholder="New Password..."><br />
					<span id="span">Re-enter new password</span><input type="password" name="renewpass" class="form-control in1" placeholder="Re-enter New Password..."><br />
					<input type="submit"  class="btn btn-success " style="width:auto ;padding:10px;padding-left:50px;padding-right:50px;"  value="save"><br />
				</form>
			</div>
		</div>
		<script src="./scriptt.js"></script>
		<script src="./afterlog.js"></script>
	</body>
</html>
