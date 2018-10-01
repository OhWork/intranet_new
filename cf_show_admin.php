<?php
if(!empty($_GET['id'])){
	include_once('database/db_tools.php');
	include_once('connect.php');
	
	$id = $_GET['id'];
	//$r = $db->findByPK('event_confer','event_id',$id)->executeRow();
	$r = $db->findByPK2('event_confer','conferroom','event_id',$id,'confer_confer_id','confer_id')->executeRow();
	}
?>
<div class="row">
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
            <td><?php echo $r['event_uname'];?></td>
        </tr>
        <tr>
            <td>ตำแหน่ง</td>
            <td><?php echo $r['event_uclass'];?></td>
        </tr>
        <tr>
            <td>สังกัด</td>
            <td><?php echo $r['event_division'];?></td>
        </tr>
        <tr>
            <td>ชื่อเรื่อง</td>
            <td><?php echo $r['event_story'];?></td>
        </tr>
        <tr>
            <td>ชื่อผู้ขอใช้ห้องประชุม</td>
            <td><?php echo $r['event_uname'];?></td>
        </tr>
        <tr class="success">
            <td>เวลาเริ่มประชุม</td>
            <td><?php echo $r['event_start'];?></td>
        </tr>
        <tr class="danger">
            <td>เวลาเลิกประชุม</td>
            <td><?php echo $r['event_end'];?></td>
        </tr>
        <tr>
            <td>ผู้เข้าร่วมประชุม</td>
            <td><?php echo $r['event_join']." คน";?></td>
        </tr>
        </tbody>
        </table>
        <a href="cf_confermain.php" class="btn btn-primary btn-lg">ย้อนกลับ</a>
        <input onclick="javascript:window.print()" class="btn btn-primary btn-lg" type="button" value="คลิ๊กเพื่อ Print หน้านี้" name="print2">
            </div>
          </div>
        </div>
    </div>   
</div>