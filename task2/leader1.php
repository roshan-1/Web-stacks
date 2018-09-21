<!DOCTYPE html>
<html>
<head>
	<?php session_start();?>
	<title>Leader Board</title>
	 <link rel="stylesheet" href="assets/login3.css" type="text/css" >
	 <link rel="stylesheet" href="assets/leader.css" type="text/css" >
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #f3f3f3f;">
	<div class="col-sm-12">
    <div class="top">
     <img src="logo.png" style="position: absolute; top:10px;width:200px; height:40px;">
     <a class="log" href="login.php">Logout</a>
    </div>
	</div>
	<?php 
    	$conn=new mysqli("localhost","root","","leaderboard");
        $sql="select * from leader order by points desc";
        $res=$conn->query($sql);
        $i=0;
        while($row=$res->fetch_assoc()){					//fetching leaderboard data from database
        	$arr[]=$row;
        }
    ?>  
    <div class="col-sm-12 col-md-4">
                            <div id="c1" class="card1">
                                     <center>
                                    <img src="assets/images/<?php echo $arr[0]['logo']; ?>" style="width: 10vw" alt="person1">
                                        <h3><?php echo $arr[0]['name']; ?></h3>
                                        <img  width="40" src="https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/VvGXRm-hlilcbm235/animation-award-for-the-first-place-medal-with-number-one-gold-garland-and-red-ribbon-medal-sparkles-and-shimmers_4_lq-qkzhl__F0000.png" alt="medal">
                                        <p>(Team id:<?php echo $arr[0]['tid'];?>)<br><?php echo $arr[0]['points'];?></p>
                                        <a  id="cd1" href="" class="view">View</a>
                                    </center>                               
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div id="c2" class="card1">                               
                                     <center>
                                    <img src="assets/images/<?php echo $arr[1]['logo']; ?>" style="width: 10vw" alt="person1">
                                        <h3><?php echo $arr[1]['name']; ?></h3>
                                        <img  width="40" height="45" src="https://img.freepik.com/free-vector/silvery-medal-design_1166-23.jpg?size=338&ext=jpg" alt="medal">
                                        <p>(Team id:<?php echo $arr[1]['tid'];?>)<br><?php echo $arr[1]['points'];?></p>
                                        <a href="" class="view">View</a>
                                    </center>                                
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div id="c3" class="card1">
                                     <center>
                                         <img src="assets/images/<?php echo $arr[2]['logo']; ?>" style="width: 10vw" alt="person1">
                                        <h3><?php echo $arr[2]['name']; ?></h3>
                                        <img width="40" src="http://worldartsme.com/images/bronze-level-clipart-1.jpg">
                                        <p>(Team id:<?php echo $arr[2]['tid'];?>)<br><?php echo $arr[2]['points'];?></p>
                                        <a href="" class="view">View</a>
                                    </center>
                            </div>
                        </div>
<table style="position: absolute; top:480px">
 <?php 
$x=3;
 while($x<sizeof($arr)){ ?> <!-- loop for traversing throughout all the data and printing in leaderboard-->
  <tr>
    <td><?php echo $x+1; ?></td>
	<td><img width="50" height="50" src="assets/images/<?php echo $arr[$x]['logo']; ?>" alt="1">
	<td><?php echo $arr[$x]['name']; ?></td>
    <td><?php echo $arr[$x]['tid']; ?></td>
	<td><?php echo $arr[$x]['points']; ?></td>
  </tr>
 <?php $x++; } ?>
</table>
</body>
</html>