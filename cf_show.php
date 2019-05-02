<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="CSS/bootstrap.css"/>
<link rel="stylesheet" href="CSS/fullcalendar.css"/>
<link rel="stylesheet" href="CSS/jquery.datetimepicker.css"/ >
<link rel="stylesheet" href="CSS/main.css"/>
</head>
<?php
if(!empty($_GET['id'])){
	include_once('database/db_tools.php');
	include_once('connect.php');
	
	$id = $_GET['id'];
	//$r = $db->findByPK('event_confer','event_id',$id)->executeRow();
	$r = $db->findByPK2('eventconfer','confer','eventconfer_id',$id,'confer_conferroom_id','conferroom_id')->executeRow();
	}
?>
<body >
<div class="wrapper">
    <div class="show">
        <table class="table table-hover">
        <thead>
        <tr>
            <th>รายละเอียดการจอง</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>ชื่อผู้ใช้ห้องประชุม</td>
            <td><?php echo $r['eventconfer_uname'];?></td>
        </tr>
        <tr>
            <td>ตำแหน่ง</td>
            <td><?php echo $r['eventconfer_uclass'];?></td>
        </tr>
        <tr>
            <td>สังกัด</td>
            <td><?php echo $r['eventconfer_division'];?></td>
        </tr>
        <tr>
            <td>ชื่อเรื่อง</td>
            <td><?php echo $r['eventconfer_story'];?></td>
        </tr>
        <tr>
            <td>ชื่อผู้ขอใช้ห้องประชุม</td>
            <td><?php echo $r['eventconfer_uname'];?></td>
        </tr>
        <tr class="success">
            <td>เวลาเริ่มประชุม</td>
<!--             <td><?php echo $r['eventconfer_start'];?></td> -->
        </tr>
        <tr class="danger">
            <td>เวลาเลิกประชุม</td>
            <td><?php echo $r['eventconfer_end'];?></td>
        </tr>
        <tr>
            <td>ผู้เข้าร่วมประชุม</td>
            <td><?php echo $r['eventconfer_join']." คน";?></td>
        </tr>
        </tbody>
        </table>
        
            </div>
          </div>
        </div>
    </div>   
</div>
</body>
</html>
