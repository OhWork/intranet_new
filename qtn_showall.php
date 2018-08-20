<script type="text/javascript">
			$(function () {
				$('input#id_search').quicksearch('table#table_search tbody tr');
				});
</script>
<!--
<?php
            $columns = array('news_head','news_date','user_name');
            $searchnews = new textfield('searchipzpo','id_search','form-control','ค้นหา');
            echo $searchnews;
            if(empty($_GET["subpage"])){
                 $_GET["subpage"] = 1;
            }
            $page = (int) (!isset($_GET["subpage"]) ? 0 : $_GET["subpage"]);
			$limit = 20; //จำนวนแสดงต่อหน้า
			$startpoint = ($page * $limit) - $limit;

			$rs2 = "news,user where news.user_user_id = user.user_id";
			$rs = $db->findByPK2Limit('news','user','news.user_user_id','user.user_id',$startpoint,$limit)->execute();


			$grid = new gridView();
			$grid->pr = 'news_id';
			$grid->header = array('<b><center>หัวข้อข่าว</center></b>','<b><center>วันและเวลา</center></b>','<b><center>เขียนโดย</center></b>','<b><center>#</center></b>');
			$grid->width = array('50%','20%','20%','10%');
            $grid->view = "#";
            $grid->viewtxt = "รายละเอียด";
            $grid->name = 'table_search';
			$grid->renderFromDB($columns,$rs);
//    			echo pagination($rs2,$limit,$page,$url='index.php?url=news_show_main.php&');
  			include_once 'news_viewdetail.php';
		?>
-->
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	<div class="row">
		<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
		<div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10" style="background-color:#ffffff;border:1px solid #f5f5f5;border-radius:4px;">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3" style="border-bottom:1px solid #f5f5f5;">
					<h3>แบบสอบถาม</h3>
				</div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
					<?php
						$rs = $db->findAll('qtn')->execute();
						foreach($rs as $rsshow){?>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4" style="padding:16px;float:left;">
							<a class="btn btn-light col-12 qtnblock" href="<?php $rsshow['qtn_link'];?>" role="button"><?php echo $rsshow['qtn_name'];?></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
	</div>
</div>