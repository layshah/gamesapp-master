<? ob_start(); ?>
<?php 
//Other php files
include"refs/conn.php"; 
include"refs/common.php"; 
include"refs/session.php"; 
include"refs/constants.php"; 

?>
<?php 


$round = 0;

if(isset($_GET['round']))
{
	$round = $_GET['round'];
}

if ($round == "2")
{

	if($_GET['order'] == -1)
		{
			echo "-1";
		}
		else
		{
			$query= "SELECT id FROM test_master WHERE test_name LIKE '".$AskIntTestName."'";
			$sql = mysql_query($query); 
			$row=mysql_fetch_array($sql);
			$testid = $row['id'];

			//echo $query;

			$query= "SELECT * FROM user_results WHERE user_master_id = ".$_SESSION['id']." AND test_type_id=".$testid;
			$sql = mysql_query($query); 
			$row=mysql_fetch_array($sql);
			//$testid = $row['id'];
			If($row['results']=="")
			{
				$query = "INSERT INTO user_results(user_master_id,test_type_id,results) 
				VALUES('".$_SESSION['id']."',".$testid.",'".$_GET['order']."')";
				$sql = mysql_query($query) or die ('Error updating database: '.mysql_error()); 			
				echo "1";
			}
			else
			{

				//already in db.
				echo "1";
				//'SELECT * FROM user_results WHERE user_master_id = 11 AND test_type_id=13 '
			}


			
		}

}
else
{

	//echo $_SESSION['id']."<br>";
	//header("Location: index.php");  

	//echo "From Server:".$_POST["data"];

	/*
	a:;1,1;2,3;3,5;4,8;5,10;6,12;7,14;8,16;9,18;10,20;11,22;12,24;13,26;14,28;15,30;16,32;17,34;18,36;19,38;20,40;21,42;22,44;23,46;24,48;25,50;26,52;27,54;28,56;29,58;30,60;31,62;32,64;33,66;34,68;35,70;36,72;37,74;38,76;39,78;40,80;41,82;42,84;43,86;44,88;45,90;46,92;47,94;48,96;49,98;50,100;51,102;52,104;53,106;54,108;55,110;56,112;57,114;58,116;59,118;60,120;61,122;62,124;63,126;64,128;65,130;66,132;67,134;68,136;69,138;70,140;71,142;72,144;73,146;74,148;75,150;76,152;77,154;78,156;79,158;80,160;81,162;82,164;83,166;84,168;85,170;86,172 

	12:;1,173;2,175
	set,activitd
	*/
	$query= "SELECT id FROM test_master WHERE test_name LIKE '".$InterestTestName."'";
	$sql = mysql_query($query); 
	$row=mysql_fetch_array($sql);
	$testid = $row['id'];

	$query = "INSERT INTO test_interestv1_result(user_master_id,test_master_id,test_interestv1_setid,attitude_interests_activities_id) 
					VALUES";
	$datasplit = explode(":",$_POST["data"]);
	if($datasplit[0]==$testid)//"a")
	{
		//echo "aptituderound1";
		$datasplit = explode(";",$datasplit[1]);

		foreach ($datasplit as $value) {
			# code...
			if($value=="")
			{

			}
			else
			{
				$query = $query."(".$_SESSION['id'].",".$testid.",".$value."),";
			}
		}
		$query = rtrim($query, ",");
		//echo $query;
		$sql = mysql_query($query) or die ('Error:Error updating database: '.mysql_error()); 
		$query = "INSERT INTO user_results(user_master_id,test_type_id,results) 
					VALUES('".$_SESSION['id']."',".$testid.",'1')";

		$sql = mysql_query($query) or die ('Error updating database: '.mysql_error()); 			
		echo "1";
		//echo $query;
		?>
							
		<?php
	}
	else
	{
		echo "Error: No data to process";
	}
	//echo $query;
}

?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49737929-1', 'interestship.com');
  ga('send', 'pageview');
</script>