<?php 
ob_start();
include('class/School.php');
?>
<title>School Management System</title>
<?php include('include_files.php');?>
<div class="container">		
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading" style="background:#ff6961;color:white;">
				<div class="panel-title">Admin Create</div>                        
			</div> 
			<div style="padding-top:30px" class="panel-body" >
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="dashboard.php">                                    
					First Name: <input type="text" class="form-control" id="firs" name="first" placeholder="First Name" >
					Last Name: <input type="text" class="form-control" id="last" name="last" placeholder="Last Name" >
					E-mail: <input type="text" class="form-control" id="email" name="email" placeholder="E-mail" >
					Password: <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" >
					Gender :<br> <input type="radio"  name="gender" value="male"> Male 
		         <input type="radio"  name="gender" value="female"> Female<br>
					<br>Mobile: <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" >                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Create" class="btn btn-success">	
						  <a href="index.php"><button class="btn btn-success">Back</button></a>					  
						</div>	
						
					</div>	
					
					
				</form>   
			</div>
			        

		</div>  
	</div>
</div>	
<?php include('inc/footer.php');?>
