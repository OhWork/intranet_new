
<?php
            $columns = array('news_head','news_date','user_name');
            if(empty($_GET["subpage"])){
                 $_GET["subpage"] = 1;
            }
            $page = (int) (!isset($_GET["subpage"]) ? 0 : $_GET["subpage"]);
			$limit = 8; //จำนวนแสดงต่อหน้า
			$startpoint = ($page * $limit) - $limit;
			?>
			            <div class="col-md-12" style="float: left;margin-top: 10px;">
                <div class="col-md-2" style="float: left;"><a href="admin_index.php?url=news_add_news.php" class="btn btn-success">เพิ่มเมนูย่อย</a>
                </div>
			<?php

			$rs2 = "problem,subzoo,typetools,subtypetools  where problem.subzoo_subzoo_id = subzoo.subzoo_id && problem.subtypetools_typetools_typetools_id = subtypetools.subtypetools_id && subtypetools.typetools_typetools_id = typetools.typetools_id";
			$rs = $db->findByPK2Limit('news','user','news.user_user_id','user.user_id',$startpoint,$limit)->execute();


			$grid2 = new gridView();
			$grid2->pr = 'news_id';
			$grid2->header = array('<b><center>หัวข้อข่าว</center></b>','<b><center>วันและเวลา</center></b>','<b><center>เขียนโดย</center></b>','<b><center>#</center></b>');
			$grid2->width = array('50%','21%','21%','8%');
//  			$grid2->view = '#';
 			$grid2->edittxt = 'แก้ไข';
 			$grid2->edit ='admin_index.php?url=admin_news_index.php&url2=news_add_news.php';
//  			$grid2->viewtxt =' รายละเอียด';
			$grid2->renderFromDB($columns,$rs);
			echo pagination($rs2,$limit,$page,$url='cs_index.php?url=show_problem.php&');
//             include_once 'cs_viewdetail.php';
		?>