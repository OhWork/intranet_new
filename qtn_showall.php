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
						  <div class="col-lg-4">
							<img class="img-thumbnail" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
							<h4>Heading</h4>
							<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
							<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
						  </div><!-- /.col-lg-4 -->
						  <div class="col-lg-4">
							<img class="img-thumbnail" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
							<h4>Heading</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
							<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
						  </div><!-- /.col-lg-4 -->
						  <div class="col-lg-4">
							<img class="img-thumbnail" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
							<h4>Heading</h4>
							<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egetas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
							<p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
						  </div><!-- /.col-lg-4 -->
						</div><!-- /.row -->
						</div>
					</div>
				</div>
