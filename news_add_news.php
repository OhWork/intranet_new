<?php
    $form = new form();
    $lbheadnews = new label('หัวข้อข่าว : ');
    $lbdetail = new label('รายละเอียด : ');
    $lbtime = new label('เวลา : ');
     $selecttypenews = new SelectFromDB();
     $selecttypenews->name = 'typeNews_typeNews_id';
     $selecttypenews->lists = 'โปรดระบุ ชนิดของข่าวสาร';
    $txtheadnews = new textfield('news_head','','form-control','','');
    $datetime = date("Y-m-d H:i");
    $date = date("Y-m-d");
    $time = date("H:i");
    $button = new buttonok("ส่งแบบฟอร์มแจ้งซ่อม","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
      if(!empty($_GET['user_id'])){
	$id = $_GET['user_id'];
	$r = $db->findByPK('user','user_id',$id)->executeRow();
	$txtname= $r['user_name'];
	$txtlast= $r['user_last'];
	}
    if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $r = $db->findByPK('news','news_id',$id)->executeRow();
    $txtheadnews->value = $r['news_head'];
    $txtdetail->value = $r['news_detail'];
    $txttime->value = $r['news_date'];
    $user_id = $r['user_user_id'];
    $r2 = $db->findByPK('user','user_id',$user_id)->executeRow();
    $txtname= $r2['user_name'];
	$txtlast= $r2['user_last'];
    }
	echo '<div class="newaddbox">';
    echo $form->open("form_reg","form","","news_insert_news.php","");
    echo $lbheadnews.$txtheadnews;
    echo $selecttypenews->selectFromTB('typeNews','typeNews_id','typeNews_name',$r['typeNews_typeNews_id']);
	echo $lbtime.$txttime;
	echo "วันและเวลา".DateThai($date)." ".$time;
	
    echo "ผู้เขียน : ".$txtname." ".$txtlast;
   if(!empty($_GET['user_id'])){
    echo "<input type='hidden' name='user_user_id' value='$_GET[user_id]'/>";
    }
   if(!empty($user_id)){
    echo "<input type='hidden' name='user_user_id' value='$user_id'/>";
     }
     echo "<input type='hidden' name='news_date' value='$datetime'/>";
    echo "<input type='hidden' name='id' value='$_GET[id]'/>";
    echo "<div class='newaddok'>".$button."</div>";
    echo $form->close();
	echo '</div>';
?>
