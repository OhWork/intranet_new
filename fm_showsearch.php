<?php
	 $host = 'localhost';
	 $user = 'root';
	 $pass = 'root';//เปลี่ยน
	 $db_name = 'intranet';
	$link = mysqli_connect($host, $user, $pass, $db_name);
		mysqli_set_charset($link, "UTF8");
	if($link){
		$typesearch = $_POST['typesearch'];
		if($typesearch == 1){
			$sql = "SELECT * FROM files JOIN folder ON files.folder_folder_id = folder.folder_id WHERE files_name LIKE '%{$_POST['searchall']}%'";
			$query = mysqli_query($link,$sql);
			//print_r($resuit);
			?>
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ลำดับ</th>
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
				<td><?php echo $result['files_id']; ?> </td>
				<td><?php echo $result['files_name']; ?></td>
				<td><?php echo $result['folder_name']; ?></td>
				<td><a href="source/<?php echo $result['folder_name']."/".$result['files_name'];?>">View</a></td>
				<td><a href="source/<?php echo $result['folder_name'].'/'.$result['files_name'];?>" download="<?php echo $result['files_name'];?>">download</a></td>

		<?php
			}
		}
		else{
			$sql = "SELECT * FROM folder  WHERE folder_name LIKE '%{$_POST['searchall']}%'";
			$query = mysqli_query($link,$sql);
			//print_r($resuit);
			?>
			<div class="col-md-12">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>ลำดับ</th>
							<th>โฟลเดอร์</th>
		 				</tr>
		 			</thead>
		 			<tbody>
			<?php
			 while ($result = mysqli_fetch_assoc($query)) {
			?>
			<tr>
				<td><?php echo $result['folder_id']; ?> </td>
				<td><a href="filemanager/dialog.php?editor=0&type=0&lang=en_EN&popup=0&crossdomain=0&field_id=&relative_url=0&akey=key&fldr=<?php echo $result['folder_name']?>"><?php echo $result['folder_name']; ?></a></td>
		<?php
			}
		}

	}
?>
