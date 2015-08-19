<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>

</head>
<body>

<?php include("header.php");?>

<div class="container main-content">

    <div class="jumbotron">
      <center>
	<h2>Welcome To Aberdeen Oil Careers</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
         <button class="btn btn-primary">Read More</button>
      </center>
    </div>


<div class="row">
	<div class="col-md-12">
		<h2>Latest Jobs</h2>
		
	</div>
	
	
</div>


    <div class="row">
    	
           <?php if (is_array($advert)) {
           foreach ($advert as $row) {
           ?>
           
           
   <div class="home-adverts col-md-6">
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
                <td>Summary:</td>  <td><?php echo $row->description; ?></td>
            </tr>
            <tr>
               <td>Salary:</td> <td><?php echo $row->salary; ?></td>
            </tr>


    </tbody>
    </table>
                   <a class="home-a" href="/detailed/<?php echo $row->id;?>"><button class="btn btn-success apply-btn">See More</button></a>
          </div>
<?php  } } ?>
</div>
</div>

</body>
</html>