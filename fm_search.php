<?php
	$host = 'localhost';
		 $user = 'root';
		 $pass = 'root';//เปลี่ยน
		 $db_name = 'intranet';
		 $link = mysqli_connect($host, $user, $pass, $db_name);
		 mysqli_set_charset($link, "UTF8");
		 if($link){
			$sql = "SELECT * FROM files JOIN folder ON files.folder_folder_id = folder.folder_id WHERE files_name LIKE '%{$_POST['searchall']}%'";
			$query = mysqli_query($link,$sql);

?>
<div class="boxrightup col-md-12">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-12">
				<center>
				<input type="radio" name="type" class="type" value="1"><label>ค้นหาไฟล์</label>
				<input type="radio" name="type" class="type" value="2"><label>ค้นหาโฟลเดอร์</label>
				</center></div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-3"><center><label class="col-md-12 mt-2" for="searchall">ระบบค้นหา​ :</label></center></div>
			<div class="col-md-7">
				<input type="text" id="searchall" name="searchall" class="form-control" placeholder="ค้นหาไฟล์ที่ต้องการใช้ !" autocomplete="off">
			</div>
			<div class="col-md-2">
				<button type="button" class="btn btn-primary" id="btnSearch">ค้นหา</button>
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="row">
			<div class="loading"></div>
			<div class="col-md-12" id="list-data" style="margin-top: 20px;">
			<?php
	 if(!empty($_POST['searchall'])){
	?>
			<div class="col-md-12" id="datadialog">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ชื่อไฟล์</th>
							<th>อยู่ในโฟลเดอร์</th>
							<th>เรียกดู</th>
							<th>ดาวโหลด</th>
			 			</tr>
			 		</thead>
			 		<tbody>
			 			<?php
			 		while ($result = mysqli_fetch_assoc($query)) {
						?>
						<tr>
							<td><?php echo $result['files_name']; ?></td>
							<td><?php echo $result['folder_name']; ?></td>
							<td><a href="source/<?php echo $result['folder_name']."/".$result['files_name'];?>">View</a></td>
							<td><a href="source/<?php echo $result['folder_name'].'/'.$result['files_name'];?>" download="<?php echo $result['files_name'];?>">download</a></td>
						</tr>
		<?php
					}
				?>
					</tbody>
				</table>
			</div>
			<?php
		}
	}
?>			</div>
	</div>
</div>
<script>
$( document ).ready( function () {
	$('input[name=type]').on("change",function(e) {
 		var typesearch = $('input[name=type]:checked').val();
	 	console.log(typesearch);
	 	$("#btnSearch").click(function () {
		 	if(typesearch == 1){
			 	$.ajax({
			 		url: "showsearch.php",
			 		type: "post",
			 		data: {searchall: $("#searchall").val(), typesearch:typesearch},
			 		beforeSend: function () {
			 			$(".loading").show();
			 		},
			 		complete: function () {
			 			$(".loading").hide();
			 		},
			 		success: function (data) {
			 			$("#list-data").html(data);
			 		}
			 	});
			 }
			 else{
		 	$.ajax({
		 		url: "showsearch.php",
		 		type: "post",
		 		data: {searchall: $("#searchall").val(),typesearch:typesearch},
		 		beforeSend: function () {
		 			$(".loading").show();
		 		},
		 		complete: function () {
		 			$(".loading").hide();
		 		},
		 		success: function (data) {
		 			$("#list-data").html(data);
		 		}
		 	});
	 }

 	});
 	$("#searchform").on("keyup keypress",function(e){
 		var code = e.keycode || e.which;
 		if(code==13){
 			$("#btnSearch").click();
 			return false;
 		}
 	});


   });
});
 </script>
