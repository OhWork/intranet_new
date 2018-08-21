<?php
    $form = new form();
    $lbheadnews = new label('หัวข้อข่าว : ');
    $lbdetail = new label('รายละเอียด : ');
        $lbdatestart = new label('วันเริ่ม : ');
    $lbdateend = new label('วันสิ้นสุด : ');
     $selecttypenews = new SelectFromDB();
     $selecttypenews->name = 'typeNews_typeNews_id';
     $selecttypenews->lists = 'โปรดระบุ ชนิดของข่าวสาร';
     $txtdatestart = new textfieldcalendarreadonly('qtn_datestart','datetimepicker1','','form-control','input-group-addon btn calen','datetimepicker1');
    $txtdateend = new textfieldcalendarreadonly('qtn_dateend','datetimepicker2','','form-control','input-group-addon btn calen','datetimepicker2');
    $txtheadnews = new textfield('news_head','','form-control','','');
    $button = new buttonok("ต่อไป","","btn btn-success btn-lg btn-block bt3success col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12","");
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
    $user_id = $r['user_user_id'];
    $r2 = $db->findByPK('user','user_id',$user_id)->executeRow();
    $txtname= $r2['user_name'];
	$txtlast= $r2['user_last'];
    }
	echo '<div class="newaddbox">';
    echo $form->open("form_reg","form","","news_insert_news.php","");
    echo $lbheadnews.$txtheadnews;
    echo $selecttypenews->selectFromTB('typeNews','typeNews_id','typeNews_name',$r['typeNews_typeNews_id']);
    echo $lbdatestart.$txtdatestart;
    echo $lbdateend.$txtdateend;
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
