
<?php 

	include 'include/header.php'; 
	if(isset($_SESSION['user_id']) && 
                !empty($_SESSION['user_id']) ){

	

	

?>


<style>
	h1,h3{
		display: inline-block;
		padding: 10px;
	}

	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin:20px 5px 0px 5px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px;
	}
</style>

			<div class="container" style="padding: 60px 0;">
			<div class="row">
				<div class="col-md-12 col-md-push-1">
					<div class="panel panel-default" style="padding: 20px;">
						<div class="panel-body">
							
								<div class="alert alert-danger alert-dismissable" style="font-size: 18px; display: none;">
    						
    								<strong>Warning!</strong> Are you sure you want a save the life if you press yes, then you will not be able to show before 3 months.
    							
    							<div class="buttons" style="padding: 20px 10px;">
    								<input type="text" value="" hidden="true" name="today">
    								<button class="btn btn-primary" id="yes" name="yes" type="submit">Yes</button>
    								<button class="btn btn-info" id="no" name="no">No</button>
    							</div>
  							</div>
							<div class="heading text-center">
								<h3>Welcome </h3> <h1>  <?php if(isset($_SESSION['name'])) echo $_SESSION['name'];  ?><!-- Donor Name -->
        </a></h1>
							</div>
							<p class="text-center">Here you can mennage your account update your profile</p>
							<button style="margin-top: 20px;" name="date" id="save_the_life" class="btn btn-lg btn-danger center-aligned ">Save The Life</button>
							<div class="test-success text-center" id="data" style="margin-top: 20px;"><!-- Display Message here--></div>
							<div class="donors_data">
   			<span class="name">Congratulations !</span>
			   <span>	 You already saved the life . You will be donating the blood afer three months. Thanks you for your help .
   			 </span>
   			
   			</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
<?php
}else{
	header("Location: ../index.php");

}

include 'include/footer.php'; 
?>