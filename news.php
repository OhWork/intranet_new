<!--
<div class="bg-success" style="padding:10px;">
    <i><img src="images/icons/glyphicons-609-newspaper.png" style="width: 17px; height: 15px;"></i>News
</div>
<?php
            $columns = array('news_head','news_date','user_name');
            if(empty($_GET["subpage"])){
                 $_GET["subpage"] = 1;
            }
            $page = (int) (!isset($_GET["subpage"]) ? 0 : $_GET["subpage"]);
			$limit = 4; //จำนวนแสดงต่อหน้า
			$startpoint = ($page * $limit) - $limit;

			$rs2 = "problem,subzoo,typetools,subtypetools  where problem.subzoo_subzoo_id = subzoo.subzoo_id && problem.subtypetools_typetools_typetools_id = subtypetools.subtypetools_id && subtypetools.typetools_typetools_id = typetools.typetools_id";
			$rs = $db->findByPK2LimitDESC('news','user','news.user_user_id','user.user_id',$startpoint,$limit,'news_date')->execute();


			$grid2 = new gridView();
			$grid2->pr = 'news_id';
// 			$grid2->sts = 'problem_status';
			$grid2->header = array('<b><center>หัวข้อข่าว</center></b>','<b><center>วันและเวลา</center></b>','<b><center>เขียนโดย</center></b>');
			$grid2->width = array('50%','20%','20%');
            $grid2->link = 'index.php?url=news_detail.php';//for click tr
			$grid2->renderFromDB($columns,$rs);
// 			echo pagination($rs2,$limit,$page,$url='cs_index.php?url=show_problem.php&');
//             include_once 'cs_viewdetail.php';
		?>
-->
<div class="col-xl-9 col-lg-8 col-md-7 col-sm-12 col-12">
      <div class="jumbotron">
        <h3>ข่าวสารภายในองค์การสวนสัตว์</h3>
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
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div>
    </div>
    </div>
<script>
$('tr[data-href]').on("click", function() {
    document.location = $(this).data('href');
});
</script>