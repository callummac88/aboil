<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
    
</head>
<body>

<?php include("header.php");?>

<div class="container main-content">
	<h1>Detailed</h1>
	 <div class="row">
    	
           <?php if (is_array($ad_details)) {
           foreach ($ad_details as $row) {
           ?>
           
           
   <div class="home-adverts col-md-12">
    <table class="standard_ad_tbl">
    <tbody>
            <?php echo "<img class='ad-logo' src='/assets/images/$row->logo'>"?>
            <tr>
                <td>Job Title:</td>   <td><?php echo $row->title; ?></td>
            </tr>
            <tr>
                <td>Company:</td>   <td><?php echo $row->company; ?></td>
            </tr>
            <tr>
                <td>Job Details:</td>  <td><?php echo $row->description; ?></td>
            </tr>
            <tr>
               <td>Salary:</td> <td><?php echo $row->salary; ?></td>
            </tr>


    </tbody>
    </table>
                   <a class="home-a" href="http://local-www.aberdeenoil.careers/detailed/<?php echo $row->id;?>"><button class="btn btn-success apply-btn">Apply Now</button></a>
          </div>
<?php  } } ?>
</div>

</div>

</body>
</html>