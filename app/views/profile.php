<? ob_start(); ?>
<?php
$PageTitle = "Profile";
?>

<?php 
//Other php files
include"refs/conn.php"; 
include"refs/common.php"; 
include"refs/session.php"; 
?>

<?php 
//header file
include_once('header.php');
?>

<div class="container">
	<?php
	//active page variable for menu
	$ActivePage = "home";
	include_once('menu.php');
	?>

	
	<?php
	$sql = mysql_query("SELECT * FROM user_details WHERE user_master_id = ".$_SESSION['id']);
		if(mysql_num_rows($sql) > 0)
		{
		
		?>
		<div class="row" style="text-align:center;">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		 <h2>
		<?php 
		echo "Hi ". $_SESSION['fname']."!";//.$_SESSION['id']."";
		if (isset($_GET["updated"]))
		{
			if ($_GET["updated"]=='1')
				{
				}
			else
				{}
		}

		?>
		</h2>
		<hr>
		<a href="aptitude.php" class="btn btn-info btn-lg">Start Your Journey</a>

		<h3>towards your interest</h3>
		
		</div>
		<div class="col-md-3"></div>
	</div>
		<div class="row"><br>
		<div class="col-md-12"></div></div>
		
		<div class="row">

			<div class="col-md-3"></div>
			<center><div class="col-md-6"><img class="img" src="img/banner2.png"/></div></center>
			<div class="col-md-3"></div>
		</div>
		<br><br><br><br><br>
		<div class="row"><br></div>
		<?php	
		}
		else
		{
		?>
		<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-6"><h3>Please provide the below details</h3></div>
				<div class="col-md-4"></div>
			</div>

			<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-6">
			<form class="form-horizontal" action="updateuserdetails.php" method="post" >
			<fieldset>

				<!-- Form Name -->
				<legend></legend>

				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="College">Select your College</label>
					<div class="col-md-5">
						<select id="College" name="College" class="form-control">
						<?php 
							$sql = mysql_query("SELECT * FROM college_master ORDER BY id DESC");
						 	if(mysql_num_rows($sql) > 0)
						 		{
						 			while($row = mysql_fetch_array($sql))
						 			{
						 				echo "<option value=".$row['id'].">";
						 				echo $row['name'];
						 				echo "</option>";
						 			}
						 		}
						?>
						</select>
					</div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="selectbasic">Select your branch/course</label>
					<div class="col-md-4">
						<select id="Branch" name="Branch" class="form-control">
							<?php 
								$sql = mysql_query("SELECT * FROM college_course ORDER BY id DESC");
							 	if(mysql_num_rows($sql) > 0)
							 		{
							 			while($row = mysql_fetch_array($sql))
							 			{
							 				echo "<option value=".$row['id'].">";
							 				echo $row['cource'];
							 				echo "</option>";
							 			}
							 		}
							?>
						</select>
					</div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="selectbasic">Level of degree</label>
					<div class="col-md-4">
						<select id="Level" name="Level" class="form-control">
							<option value="0">Under Graduate</option>
							<option value="1">Graduate</option>
							<option value="2">Post Graduate</option>
						</select>
					</div>
				</div>

				<!-- Select Basic -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="selectbasic">Select current semester</label>
					<div class="col-md-4">
						<select id="Semester" name="Semester" class="form-control">
							<option value="1">1st </option>
							<option value="2">2nd </option>
							<option value="3">3th </option>
							<option value="4">4th </option>
							<option value="5">5th </option>
							<option value="6">6th </option>
							<option value="7">7th </option>
							<option value="8">8th </option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="selectbasic">Gender</label>
					<div class="col-md-4">
						<select id="Gender" name="Gender" class="form-control">
							<option value="1">Male</option>
							<option value="2">Female</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="selectbasic">Languages you know</label>
					<div class="col-md-4">
					<?php 
						$sql = mysql_query("SELECT * FROM languages_master ORDER BY id DESC");
					 	if(mysql_num_rows($sql) > 0)
					 		{
					 			while($row = mysql_fetch_array($sql))
					 			{
					 				echo "<input type='checkbox' name='languages[]' value='".$row['id']."'>".$row['name']."</input><br>";
					 				//echo "<option value=".$row['id'].">";
					 				//echo $row['cource'];
					 				//echo "</option>";
					 			}
					 		}
					?>
					</div>
				</div>
				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for=""></label>
					<div class="col-md-4">
						<input type="Submit" id="" name="submit" value="Submit" class="btn btn-primary">
					</div>
				</div>
			</fieldset>
			<input type="hidden" name='userid' value="<?php echo $_SESSION['id']; ?>" >
			</form>

			</div>
			<div class="col-md-4"></div>
			</div>	
		<?php
		}
	?>
	
</div>


<?php
//footer page
include_once('footer.php');
?>