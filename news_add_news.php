<?php
    $form = new form();
    $lbheadnews = new label('หัวข้อข่าว : ');
    $lbdetail = new label('รายละเอียด : ');
    $lbtime = new label('เวลา : ');
    $txtheadnews = new textfield('news_head','','form-control','','');
    $txtdetail = new textarea('news_detail','ckeditor','','');
    $txttime = new textfield('news_date','','form-control css-require','','');
    $txttime->value = date("Y-m-d H:i");
    $submit = new buttonok("ยืนยัน","","btn btn-success newaddbutton");

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
    echo $lbdetail.$txtdetail;
	echo $lbtime.$txttime;
    echo("ผู้เขียน : ".$txtname." ".$txtlast);
   if(!empty($_GET['user_id'])){
    echo "<input type='hidden' name='user_user_id' value='$_GET[user_id]'/>";
    }
   if(!empty($user_id)){
    echo "<input type='hidden' name='user_user_id' value='$user_id'/>";
     }
    echo "<input type='hidden' name='id' value='$_GET[id]'/>";
    echo "<div class='newaddok'>".$submit."</div>";
    echo $form->close();
	echo '</div>';
?>
