<?php
    date_default_timezone_set('Asia/Bangkok');
	class db_tools{
		var $host = 'localhost';
		var $user = 'root';
		var $pass = '';//เปลี่ยน
		var $db_name = 'intranet';
		var $sql;
		//คำสั่งเพื่อเชื่อมต่อฐานข้อมูลโดยเลือกเทเบิ้ล
		function connect(){
            @$con = mysqli_connect($this->host,$this->user,$this->pass,$this->db_name);

			if(!empty($con)){
			   mysqli_set_charset($con,'utf8');
			}else{
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			return $con;
		}
		//คำสั่งเพื่อดำเนินการจัดการกับฐานข้อมูล
		function execute(){
			$con = $this->connect();
			if(!empty($con)){
				return mysqli_query($con,$this->sql);
			}
			return null;
		}
		function insert($table,$data){
    		$con = $this->connect();
			$field = "";
			$val = "";
			$i = 0;
			foreach($data as $k => $v){
				$field.=$k;
				$val .="'$v'";

				if($i<count($data)-1){
					$field.=',';
					$val.=',';
				}
				$i++;
			}
			$this->sql = "INSERT INTO $table($field) VALUES($val)";
			return mysqli_query($con,$this->sql);
		}

		function delete($table,$field,$value){
    		$con = $this->connect();
			$this->sql = "DELETE FROM $table WHERE $field = $value";
			return mysqli_query($con,$this->sql);
		}
		function deletefolder($table,$field,$value,$field2,$value2){
    		$con = $this->connect();
			$this->sql = "DELETE FROM $table WHERE $field = $value AND $field2 = $value2";
			return mysqli_query($con,$this->sql);
		}

		function update($table, $data, $field, $value){
    		$con = $this->connect();
			$rows ="";
			$i=0;
			foreach($data as $k => $v){
				if($k!=$field){
					$rows.="$k ='$v'";
					if($i<count($data)-1){
						$rows.=',';
					}
					$i++;
				}
			}
			$this->sql = "UPDATE $table SET $rows WHERE $field = $value";
			return mysqli_query($con,$this->sql);
		}
		function update2con($table, $data, $field, $value ,$field2 ,$value2){
    		$con = $this->connect();
			$rows ="";
			$i=0;
			foreach($data as $k => $v){
				if($k!=$field){
					$rows.="$k ='$v'";
					if($i<count($data)-1){
						$rows.=',';
					}
					$i++;
				}
			}
			$this->sql = "UPDATE $table SET $rows WHERE $field = $value && $field2 = $value2";
			return mysqli_query($con,$this->sql);
		}

        function update2tb($table, $table2, $data, $field, $data2, $field2, $value, $value2){
    		$con = $this->connect();
			$rows ="";
			$rows2 ="";
			$i=0;
			foreach($data as $k => $v){
				if($k!=$field){
					$rows.="$k ='$v'";
					if($i<count($data)-1){
						$rows.=',';
					}
					$i++;
				}
			}
			foreach($data2 as $k => $v){
				if($k!=$field2){
					$rows2.="$k ='$v'";
					if($i<count($data2)-1){
						$rows2.=',';
					}
					$i++;
				}
			}
			$this->sql = "UPDATE $table,$table2 SET $rows,$rows2 WHERE $field = $value AND $field2 = $value2";
			return mysqli_query($con,$this->sql);
		}
		function updatefolder($table,$field1,$change,$field,$value,$field2,$value2){
			$con = $this->connect();
    		$this->sql = "UPDATE $table SET $field1 = $change  WHERE $field = $value AND $field2 = $value2";
			return mysqli_query($con,$this->sql);

		}
		function updateStatus($table, $change, $field, $value){
		    $con = $this->connect();
			$this->sql = "UPDATE $table SET $change WHERE $field = $value";
			return mysqli_query($con,$this->sql);
		}

		function orderDESC($table,$value){
    		$this->sql = "SELECT * FROM $table ORDER BY $value DESC";
    		return $this;
		}
		function orderASC($table,$value){
    		$this->sql = "SELECT * FROM $table ORDER BY $value ASC";
    		return $this;
		}
		function executeRow(){
			$con = $this->connect();
			if(!empty($con)){
				$rs = mysqli_query($con,$this->sql);
				if(!empty($rs)){
					$row = mysqli_fetch_array($rs,MYSQLI_ASSOC);
					return $row;
				}
			}
			return null;
		}
		function executeRowcount(){
			$con = $this->connect();
			if(!empty($con)){
				$rs = mysqli_query($con,$this->sql);
				if(!empty($rs)){
				while($row = mysqli_fetch_array($rs,MYSQLI_NUM)){
    				$countrow = $row[0];
    				}
					return $countrow;
				}
			}
			return null;
		}
		function executeAssoc(){
			$con = $this->connect();
			if(!empty($con)){
				$rs = mysqli_query($con,$this->sql);
				if(!empty($rs)){
					$row = mysqli_fetch_assoc($rs);
					return $row;
				}
			}
			return null;
		}
		function conditions($table,$condition){
			$this->sql = "SELECT * FROM $table WHERE $condition";
			return $this;
		}


		function specifytable($tablemain,$table,$condition){
			$this->sql = "SELECT $tablemain FROM $table WHERE $condition";
			return $this;
		}
		function specifytable2($tablemain,$table,$condition){
			$this->sql = "SELECT $tablemain FROM $table $condition";
			return $this;
		}
		function in($table,$field,$value){
			$_value ="";
			$count = 0;

			foreach($value as $v){
			$_value.="$v";

			//add comma
			if(count($value)!=$count +1){
				$_value.=",";
			}
			$count++;
		}
			$this->sql ="SELECT * FROM $table WHERE $field IN ($_value)";
			return $this;
	}
		function findAll($table){
			$con = $this->connect();
			if(!empty($con)){
				$this->sql = 'SELECT * FROM '.$table;
				return $this;
			}
			return null;
		}
		function findAllASC($table,$order){
			$con = $this->connect();
			if(!empty($con)){
				$this->sql = 'SELECT * FROM '.$table.' ORDER BY '.$order.' ASC';
				return $this;
			}
			return null;
		}
		function findPK1ASC($table,$column,$value,$order){
			$con = $this->connect();
			if(!empty($con)){
				$this->sql = "SELECT * FROM $table WHERE $column = $value ORDER BY $order ASC";
				return $this;
			}
			return null;
		}

		function findAllDESC($table,$order){
			$con = $this->connect();
			if(!empty($con)){
				$this->sql = 'SELECT * FROM '.$table.' ORDER BY '.$order.' DESC';
				return $this;
			}
			return null;
		}
		function findByPK($table,$column,$value){
			$this->sql = "SELECT * FROM $table WHERE $column = $value";
			return $this;
		}
		function findByPKLimit($table,$column,$value,$limit){
			$this->sql = "SELECT * FROM $table WHERE $column = $value LIMIT $limit";
			return $this;
		}
		function findByPKASC($table,$column,$value,$order){
			$this->sql = "SELECT * FROM $table WHERE $column = $value ORDER BY $order ASC";
			return $this;
		}
		function findByPKDESC($table,$column,$value,$order){
			$this->sql = "SELECT * FROM $table WHERE $column = $value ORDER BY $order DESC";
			return $this;
		}
		function findByPK21DESC($table,$table2,$column,$value,$order){
			$this->sql = "SELECT * FROM $table,$table2 WHERE $column = $value ORDER BY $order DESC";
			return $this;
		}
		function findByPKDESCLimit21($table,$table2,$column,$value,$order,$limit){
			$this->sql = "SELECT * FROM $table,$table2 WHERE $column = $value ORDER BY $order DESC LIMIT $limit";
			return $this;
		}
		function findByPK2($tablemain,$table1,$column1,$value1){
    		$this->sql = "SELECT * FROM $tablemain,$table1 WHERE $column1 = $value1";
			return $this;
		}
		function findByPK22($table1,$table2,$column1,$value1,$column2,$value2){
    		$this->sql = "SELECT * FROM $table1,$table2 WHERE $column1 = $value1 && $column2 = $value2";
			return $this;
		}
		function findByPK23($table1,$table2,$column1,$value1,$column2,$value2,$column3,$value3){
    		$this->sql = "SELECT * FROM $table1,$table2 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3";
			return $this;
		}
		function findByPK24($table1,$table2,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4){
    		$this->sql = "SELECT * FROM $table1,$table2 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4";
			return $this;
		}

		function findByPK12($table,$column1,$value1,$column2,$value2){
			$this->sql = "SELECT * FROM $table WHERE $column1 = $value1 && $column2 = $value2";
			return $this;
		}
		function findByPK32($table,$table2,$table3,$column1,$value1,$column2,$value2){
			$this->sql = "SELECT * FROM $table,$table2,$table3 WHERE $column1 = $value1 && $column2 = $value2";
			return $this;
		}
		function findByPK32DESC($table,$table2,$table3,$column1,$value1,$column2,$value2,$order){
			$this->sql = "SELECT * FROM $table,$table2,$table3 WHERE $column1 = $value1 && $column2 = $value2 ORDER BY $order DESC";
			return $this;
		}
        function findByPK33($table1,$table2,$table3,$column1,$value1,$column2,$value2,$column3,$value3){
			$this->sql = "SELECT * FROM $table1,$table2,$table3 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3";
			return $this;
		}
		function findByPK33DESC($table1,$table2,$table3,$column1,$value1,$column2,$value2,$column3,$value3,$order){
			$this->sql = "SELECT * FROM $table1,$table2,$table3 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 ORDER BY $order DESC";
			return $this;
		}
		 function findByPK34($table1,$table2,$table3,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4){
			$this->sql = "SELECT * FROM $table1,$table2,$table3 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4";
			return $this;
		}
		function findByPK35($table1,$table2,$table3,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5){
			$this->sql = "SELECT * FROM $table1,$table2,$table3 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4 && $column5 = $value5";
			return $this;
		}
		function findByPK43($table1,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3";
			return $this;
		}
		function findByPK44($table1,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4";
			return $this;
		}
		function findByPK45($table1,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4 && $column5 = $value5";
			return $this;
		}
		function findByPK46($table1,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$column6,$value6){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4 && $column5 = $value5 && $column6 = $value6";
			return $this;
		}
		function findByPK47($table1,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$column6,$value6,$column7,$value7){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4 && $column5 = $value5 && $column6 = $value6 && $column7 = $value7";
			return $this;
		}
		function findByPK54($table1,$table2,$table3,$table4,$table5,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4,$table5 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4";
			return $this;
		}
		function findByPK55($table1,$table2,$table3,$table4,$table5,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4,$table5 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4 && $column5 = $value5";
			return $this;
		}
		function findByPK34ASC($table,$table2,$table3,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$order){
    		$this->sql = "SELECT * FROM $table,$table2,$table3 WHERE $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 = $value4 ORDER BY $order ASC";
    		return $this;
		}
		function findByPK44ASC($table,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$order){
    		$this->sql = "SELECT * FROM $table,$table2,$table3,$table4 WHERE $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 = $value4 ORDER BY $order ASC";
    		return $this;
		}
		function findByPK44DESC($table,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$order){
    		$this->sql = "SELECT * FROM $table,$table2,$table3,$table4 WHERE $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 = $value4 ORDER BY $order DESC";
    		return $this;
		}
        function findByPK56DESC($table,$table2,$table3,$table4,$table5,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$column6,$value6,$order){
    		$this->sql = "SELECT * FROM $table,$table2,$table3,$table4,$table5 WHERE $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 = $value4 AND $column5 = $value5 AND $column6 = $value6 ORDER BY $order DESC";
    		return $this;
		}
		function findByPK66DESC($table,$table2,$table3,$table4,$table5,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$column6,$value6,$column7,$value7,$order){
    		$this->sql = "SELECT * FROM $table,$table2,$table3,$table4,$table5 WHERE $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 = $value4 AND $column5 = $value5 AND $column6 = $value6 AND $column7 = $value7 ORDER BY $order DESC";
    		return $this;
		}
		function findByPK11BETWEEN($table1,$column1,$value1){
			$this->sql = "SELECT * FROM $table1 WHERE $column1 $value1";
			return $this;
		}
		function findByPK12BETWEEN($table1,$column1,$value1,$column2,$value2){
			$this->sql = "SELECT * FROM $table1 WHERE $column1 = $value1 && $column2 $value2";
			return $this;
		}
		function findByPK35BETWEEN($table1,$table2,$table3,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5){
			$this->sql = "SELECT * FROM $table1,$table2,$table3 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4 && $column5 $value5";
			return $this;
		}
		function findByPK45BETWEEN($table1,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4 && $column5 $value5";
			return $this;
		}
		function findByPK46BETWEEN($table1,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$column6,$value6){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4 && $column5 = $value5 && $column6 $value6";
			return $this;
		}
        function findByPK4LimitBETWEENASC($table,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$order){
    		$this->sql = "SELECT * FROM $table,$table2,$table3,$table4 WHERE $column1 = $value1 AND $column2 $value2 AND $column3 = $value3 AND $column4 = $value4 ORDER BY $order ASC";
    		return $this;
		}
		function findByPK45LimitBETWEENASC($table1,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$order){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4 && $column5 $value5 ORDER BY $order ASC";
			return $this;
		}
		function findByPK46LimitBETWEENASC($table1,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$column6,$value6,$order){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4 && $column5 = $value5 && $column6 $value6 ORDER BY $order ASC";
			return $this;
		}
		function findByPK47LimitBETWEENASC($table1,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$column6,$value6,$column7,$value7,$order){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4 && $column5 = $value5 && $column6 = $value6 && $column7 $value7 ORDER BY $order ASC";
			return $this;
		}
			function findByPK48LimitBETWEENASC($table1,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$column6,$value6,$column7,$value7,$column8,$value8,$order){
			$this->sql = "SELECT * FROM $table1,$table2,$table3,$table4 WHERE $column1 = $value1 && $column2 = $value2 && $column3 = $value3 && $column4 = $value4 && $column5 = $value5 && $column6 = $value6 && $column7 = $value7 && $column8 $value8 ORDER BY $order ASC";
			return $this;
		}
        function findByPKOR24($table1,$table2,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4){
    		$this->sql = "SELECT * FROM $table1,$table2 WHERE $column1 = $value1 && $column2 = $value2 && ($column3 = $value3 OR $column4 = $value4)";
			return $this;
		}
// 		การนับ
        function countTable($table,$column1,$value1){
            $this->sql = "select count(*) from $table where $column1 = $value1";
            return $this;
		}
		function countTable23($table,$table2,$column1,$value1,$column2,$value2,$column3,$value3){
            $this->sql = "select count(*) from $table,$table2 where $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3" ;
            return $this;
		}
		function countTable24($table,$table2,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4){
            $this->sql = "select count(*) from $table,$table2 where $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 = $value4" ;
            return $this;
		}
		function countTable25($table,$table2,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5){
            $this->sql = "select count(*) from $table,$table2 where $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 = $value4 AND $column5 = $value5" ;
            return $this;
		}
		function countTable34($table,$table2,$table3,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4){
            $this->sql = "select count(*) from $table,$table2,$table3 where $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 = $value4" ;
            return $this;
		}
		function countTableBETWEEN($table,$column1,$value1,$column2,$value2){
            $this->sql = "select count(*) from $table where $column1 = $value1 AND $column2 $value2" ;
            return $this;
		}
		function countTableBETWEEN13($table,$column1,$value1,$column2,$value2,$column3,$value3){
            $this->sql = "select count(*) from $table where $column1 = $value1 AND $column2 = $value2 AND $column3 $value3" ;
            return $this;
		}
		function countTableBETWEEN24($table,$table2,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4){
            $this->sql = "select count(*) from $table,$table2 where $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 $value4" ;
            return $this;
		}
		function countTableBETWEEN45($table,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5){
            $this->sql = "select count(*) from $table,$table2,$table3,$table4 where $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 = $value4 AND $column5 $value5" ;
            return $this;
        }
		function countTableBETWEEN46($table,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$column6,$value6){
            $this->sql = "select count(*) from $table,$table2,$table3,$table4 where $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 = $value4 AND $column5 = $value5 AND $column6 $value6" ;
            return $this;
        }
        function countTableBETWEEN47($table,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$column6,$value6,$column7,$value7){
            $this->sql = "select count(*) from $table,$table2,$table3,$table4 where $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 = $value4 AND $column5 = $value5 AND $column6 = $value6 AND $column7 $value7" ;
            return $this;
		}
		 function countTableBETWEEN48($table,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$column6,$value6,$column7,$value7,$column8,$value8){
            $this->sql = "select count(*) from $table,$table2,$table3,$table4 where $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND $column4 = $value4 AND $column5 = $value5 AND $column6 = $value6 AND $column7 = $value7 AND $column8 $value8" ;
            return $this;
		}
// 		ใช้เฉพาะส่วน CS_totalservicemonthzoo
		function countTableBETWEENOR48($table,$table2,$table3,$table4,$column1,$value1,$column2,$value2,$column3,$value3,$column4,$value4,$column5,$value5,$column6,$value6,$column7,$value7,$column8,$value8){
            $this->sql = "select count(*) from $table,$table2,$table3,$table4 where $column1 = $value1 AND $column2 = $value2 AND $column3 = $value3 AND ($column4 = $value4 OR $column5 = $value5 OR $column6 = $value6) AND $column7 = $value7 AND $column8 $value8" ;
            return $this;
		}


		function findByAttributes($table,$attributes){
				$this->sql = "SELECT * FROM $table WHERE";
				$count = 0;

				foreach($attributes as $k => $v){
					if($count == 0){
						$this->sql.= " $k '$v'";
					}else{
						$this->sql.= " AND $k '$v'";
					}
					$count++;
				}
				return $this;
			}
	}
?>
