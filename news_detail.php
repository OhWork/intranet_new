<?php
      $id = $_GET['id'];
      $r = $db->findByPK('news','news_id',$id)->executeRow();
      echo '<div class="col-md-9 , newbg">','<div class="col-md-3 , newhead"><h4>หัวข้อข่าว  :</h4></div>','<div class="col-md-9 , headdetial">'.$r['news_head'].'</div>','</div>';
	  echo '<div class="col-md-9 , newdetial"><h4>รายละเอียด</h4>'.$r['news_detail'].'</div>';
	  echo '<div class="col-md-9">','<div class="col-md-3 , newdate"><h4>วันที่ :</h4></div>','<div class="col-md-9 , headdetial">'.$r['news_date'].'</div>','</div>';
	  $user = $r['user_user_id'];
	  $r2 = $db->findByPK('user','user_id',$user)->executeRow();
	  echo '<div class="col-md-9">','<div class="col-md-3 , newname"><h4>ผู้เขียน :</h4></div>','<div class="col-md-9 , headdetial">'.$r2['user_name'].' '.$r2['user_last'].'</div>','</div>';
	  echo '<div class="col-md-9 , newbt"><button type="button" class="btn btn-danger newbt2">Back</button></div>'
  ?>
