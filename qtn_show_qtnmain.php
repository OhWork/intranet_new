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
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="padding-left:150px;">
					<div class="jumbotron">
						<h3>แบบสอบถาม</h3>
						<div class="container marketing">

						<!-- Three columns of text below the carousel -->
						<div class="row">
							<?php
								$rs = $db->findAll('qtn')->execute();
								foreach($rs as $rsshow){?>
						  <div class="col-lg-4">
							<p><a class="btn btn-secondary" href="<?php $rsshow['qtn_link'];?>" role="button"><?php echo $rsshow['qtn_name'];?></a></p>
						  </div><!-- /.col-lg-4 -->
						<?php } ?>
						</div><!-- /.row -->
						</div>
					</div>
				</div>
