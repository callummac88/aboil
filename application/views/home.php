<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome</title>
    <link rel="stylesheet" href="../public_html/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public_html/assets/css/app.css">
    <script src="../public_html/assets/js/bootstrap.min.js"></script>

</head>
<body>

<?php include("header.html");?>

<div class="container">

    <div class="jumbotron">
      <center>
	<h2>Welcome To Aberdeen Oil Careers</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
         <button class="btn btn-primary">Read More</button>
      </center>
    </div>

    <div class="col-md-12">

       <div class="col-md-6">
           <?php if (is_array($advert1)) {
           foreach ($advert1 as $row) {
           ?>
               <div class="home-adverts">
    <table class="standard_ad_tbl">
    <tbody>

            <?php echo "<img class='ad-logo' src='../public_html/assets/images/$row->logo'>"?>
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
                   <a class="home-a" href="http://local-www.aberdeenoil.careers/<?php echo $row->id;?>"><button class="btn btn-success apply-btn">Apply Now</button></a>
          </div>

       <?php
       }
       } ?>
       </div>

        <div class="col-md-6">
            <?php if (is_array($advert2)) {
            foreach ($advert2 as $row) {
            ?>

            <div class="home-adverts">
            <table class="standard_ad_tbl">
                <tbody>
                        <?php echo "<img class='ad-logo' src='../public_html/assets/images/$row->logo'>"?>
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
                <a class="home-a" href="http://local-www.aberdeenoil.careers/<?php echo $row->id;?>"><button class="btn btn-success apply-btn">Apply Now</button></a>
                </div>
            <?php
            }
            } ?>
        </div>


    </div>
</div>


</body>
</html>