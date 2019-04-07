<?php
	class form{
		public $method = "POST";
		function open($id,$name,$cass=null,$url,$java){
			return "<form id='{$id}'name='{$name}'class='{$cass}' method='{$this->method}' enctype='multipart/form-data' action='{$url}' onSubmit='{$java}' role='form'>";
		}
		function close(){
			return "</form>";
		}
	}
#---------------Hidden-------------------#
class hiddenfield{
		public $name,$id = null,$cass = null,$hold = null;
		public $value=null,$functions=null;

		function __construct($name,$id,$cass,$value){
			$this->name = $name;
			$this->cass = $cass;
			$this->id = $id;
			$this->value = $value;

		}
		function __toString(){
			return "<input type='hidden'
			        id='{$this->id}'
					class='{$this->cass}'
					name='{$this->name}'
					value='{$this->value}'
					{$this->functions}
					placeholder='{$this->hold}'/>";
		}
}
#---------------End Hidden-------------------#
#---------------Text-------------------#
	class textfield{
		public $name,$id = null,$cass = null,$hold = null;
		public $value=null,$functions=null;

		function __construct($name,$id,$cass,$hold){
			$this->name = $name;
			$this->cass = $cass;
			$this->id = $id;
			$this->hold = $hold;

		}
		function __toString(){
			return "<input type='text'
			        id='{$this->id}'
					class='{$this->cass}'
					name='{$this->name}'
					value='{$this->value}'
					{$this->functions}
					placeholder='{$this->hold}'/>";
		}
	}
class textfieldreadonly{
		public $name,$id = null,$hold = null;
		public $value=null,$functions=null;

		function __construct($name,$id,$hold){
			$this->name = $name;
			$this->id = $id;
			$this->hold = $hold;

		}
		function __toString(){
			return "<input type='text'
			        id='{$this->id}'
					class='form-control disabledTextInput'
					name='{$this->name}'
					value='{$this->value}'
					{$this->functions}
					placeholder='{$this->hold}' readonly/>";
		}
	}
class textfieldcalendarreadonly{
		public $name,$id = null,$hold = null,$classinput=null,$classlabel=null,$labelfor=null;
		public $value=null,$functions=null;

		function __construct($name,$id,$hold,$classinput,$classlabel,$labelfor){
			$this->name = $name;
			$this->id = $id;
			$this->hold = $hold;
			$this->classinput = $classinput;
			$this->classlabel = $classlabel;
			$this->labelfor = $labelfor;


		}
		function __toString(){
			return "<input type='text'
			        id='{$this->id}'
					class='{$this->classinput}'
					name='{$this->name}'
					value='{$this->value}'
					{$this->functions}
					placeholder='{$this->hold}' readonly/>
					<label for='{$this->labelfor}'
					class='{$this->classlabel}'>
					<img src='images/icons/calendar.png'/>
					</label>";
		}
	}
class datetimepicker{
		public $nameinput,$id = null,$hold = null,$classinput=null,$classdivoutermost=null,$classdivsub=null,$iddivsub=null,$datatarget = null;
		public $value=null,$functions=null;

		function __construct($nameinput,$id,$hold,$classinput,$classdivoutermost,$classdivsub,$iddivsub,$datatarget,$labelfor,$value){
			$this->nameinput = $nameinput;
			$this->id = $id;
			$this->hold = $hold;
			$this->classinput = $classinput;
			$this->classdivoutermost = $classdivoutermost;
			$this->classdivsub = $classdivsub;
			$this->iddivsub = $iddivsub;
			$this->datatarget = $datatarget;
			$this->value = $value;


		}
		function __toString(){
			return "<div class='{$this->classdivoutermost}'>
						<div class='{$this->classdivsub}' id ='{$this->iddivsub}' data-target-input='nearest'>
							<input type='text' class='{$this->classinput}' name='{$this->nameinput}' id='{$this->id}' placeholder='{$this->hold}' value='{$this->value}' readonly/>
							<div class='input-group-append' data-target='{$this->datatarget}' data-toggle='datetimepicker'>
					            <div class='input-group-text'><i class='fa fa-calendar'></i></div>
					        </div>
						</div>
					</div>";
		}
	}
	class textfielddisabled{
		public $name,$id = null,$cass = null,$hold = null;
		public $value=null,$functions=null,$disbled;

		function __construct($name,$id,$cass,$hold,$disbled){
			$this->name = $name;
			$this->cass = $cass;
			$this->id = $id;
			$this->disbled = $disbled;
			$this->hold = $hold;

		}
		function __toString(){
			return "<input type='text'
			        id='{$this->id}'
					class='{$this->cass}'
					name='{$this->name}'
					value='{$this->value}'
					{$this->functions}
					{$this->disbled}
					placeholder='{$this->hold}'/>";
		}
	}
#---------------Text Area---------------#
	class textArea{
		public $rows,$cols,$idtf,$name,$value;

		function __construct($name,$cass,$idtf,$hold,$cols,$rows,$value){
			$this->name = $name;
			$this->cass = $cass;
			$this->idtf = $idtf;
			$this->hold = $hold;
			$this->cols = $cols;
			$this->rows = $rows;
			$this->value = $value;

		}

		function __toString(){
			return "<textarea cols='{$this->cols}'rows='{$this->rows}'id='{$this->idtf}'name='{$this->name}'class='{$this->cass}'>{$this->value}</textarea>";
		}
	}
	class textAreareadonly{
		public $rows,$cols,$idtf,$name,$value;

		function __construct($name,$cass,$idtf,$hold,$cols,$rows,$value){
			$this->name = $name;
			$this->cass = $cass;
			$this->idtf = $idtf;
			$this->hold = $hold;
			$this->cols = $cols;
			$this->rows = $rows;
			$this->value = $value;

		}
		function __toString(){
			return "<textarea cols='{$this->cols}'rows='{$this->rows}'id='{$this->idtf}'name='{$this->name}'class='{$this->cass}' readonly>{$this->value}</textarea>";
		}
	}
	class textAreaCf{
		public $rows,$cols,$id,$name,$value;

		function __construct($cols,$rows,$name,$cass,$id,$hold){
			$this->cols = $cols;
			$this->rows = $rows;
			$this->name = $name;
			$this->cass = $cass;
			$this->id = $id;
			$this->hold = $hold;

		}

		function __toString(){
			return "<textarea cols='{$this->cols}'rows='{$this->rows}'id='{$this->id}'name='{$this->name}'class='{$this->cass}'>{$this->value}</textarea>";
		}
	}
#---------------File---------------#
	class inputFile{
		public $id,$name,$cass;

		function __construct($name,$cass,$id){
			$this->name = $name;
			$this->cass = $cass;
			$this->id = $id;

		}

		function __toString(){
			return "<input type='file' class='{$this->cass}'id='{$this->id}'name='{$this->name}'>";
		}
	}

#---------------Label-------------------#
	class label{
		public $text;
		function __construct($text){
			$this->text = $text;
		}
		function __toString(){
			return "<label>{$this->text}</label>";
		}
	}
	class labelforcheck{
		public $text,$name;
		function __construct($text,$name){
			$this->text = $text;
			$this->name = $name;
		}
		function __toString(){
			return "<label name='{$this->name}'>{$this->text}</label>";
		}
	}
#---------------Password-------------------#
	class pass{
		public $name,$id = null,$cass=null,$hold = null;


		function __construct($name,$cass,$hold,$id){
			$this->name = $name;
			$this->id = $id;
			$this->cass = $cass;
			$this->hold = $hold;
		}

		function __toString(){
			return "<input type='password'
							class='{$this->cass}'
							name='{$this->name}'
							id='{$this->id}'
							placeholder='{$this->hold}'/>";
		}
	}
#--------------radioGroup----------------#
	class radioGroup{
		private $items = array();
		public $name;
		function __toString(){
			$html ='';
			foreach($this->items as $item){
			$html.="<div style='float:left;padding-right: 20px;'><input type='radio'
					name='$this->name'
					$item[checked]
					value='$item[value]' $item[readonly]";
			$html.=	"/>$item[label]</div>";
		}
		return $html;
	}
		function add($label,$value,$checked){

			$this->items[count($this->items)] = array(
			'label'=>$label,
			'value'=>$value,
			'checked'=>$checked,
			);
		}
		function edit($key,$label,$value,$checked){

			$this->items[$key] = array(
				'label'=>$label,
				'value'=>$value,
				'checked'=>$checked,
			);
		}
}
class radio{
		public $name,$check,$id,$value,$cass=null,$realname = null;

		function __construct($name,$cass,$id,$value,$check,$realname){
			$this->name = $name;
			$this->cass = $cass;
			$this->id = $id;
			$this->value = $value;
			$this->realname = $realname;
			$this->check = $check;
		}

		function __toString(){
			return "<input type='radio'
							class='{$this->cass}'
							name='{$this->name}'
							value='{$this->value}'
							id='{$this->id}' {$this->check}
							>{$this->realname}";
		}
	}
#-------------------------addday------------------#
#-----------------labeladdday-----------------#


class labeladdday{
		public $text,$id,$forr,$cass=null;
		function __construct($cass,$forr){
			$this->cass = $cass;
			$this->forr = $forr;
		}

		function __toString(){
			return "<label class='{$this->cass}' for='{$this->forr}'></label>";
		}
	}

#--------------------Endaddday---------------#
#--------------SelectMenu----------------#

	class selectMenu{
		public $name,$items;

		function __construct(){
			$this->items = array();
		}

		function addItem($label,$value){
			$index = count($this->items);
			$this->items[$index] = array($label,$value);
		}

		function __toString(){
			$html = "<select class='form-control' name ='{$this->name}'>";

			if(count($this->items)>0){
				$length = count($this->items);

				for($i = 0; $i<$length; $i++){
					$label = $this->items[$i][0];
					$value = $this->items[$i][1];

				$html.= "<option value='{$value}'>{$label}</option>";
				}
			}

			$html.="</select>";
			return $html;
		}
	}


	class SelectFromDB{
	public $name,$lists,$idtf,$value = null;
	function selectFromTB($table,$value,$label,$result){
		include_once 'database/db_tools.php';
		$db = new db_tools();
		$rs = $db->findAll($table)->execute();
		$html = "<select id='{$this->idtf}' class='form-control css-require' name='{$this->name}' >
			<option value='$this->value'>
			-----{$this->lists}-----
			</option>
			";

		while($r = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
			$html.="<option value= '{$r[$value]}'";
		if($r[$value]==$result){
				$html.='selected';
			};
			$html.=">
			{$r[$label]}
			</option>";
			}
		$html.="</select>";
		return $html;
		}

     function selectFromTBinDB($table,$value,$label,$type,$id,$result){
		include_once 'database/db_tools.php';
		$db = new db_tools();
		$rs = $db->findbyPK($table,$type,$id)->execute();
		$html = "<select class='form-control css-require' name='{$this->name}' id='{$this->idtf}'>
			<option value=''>
			-----{$this->lists}-----
			</option>
			";

		while($r = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
			$html.="<option value= '{$r[$value]}'";
		if($r[$value]==$result){
				$html.='selected';
			};
			$html.=">
			{$r[$label]}
			</option>";
			}
		$html.="</select>";
		return $html;
		}
// 	function selectFromTBinDBZootype($table,$value,$label,$type,$id,$result){
// 		include_once 'database/db_tools.php';
// 		$db = new db_tools();
// 		$rs = $db->findbyPK($table,$type,$id)->execute();
// 		$html = "<select class='form-control css-require' name='{$this->name}' id='{$this->idtf}'>
// 			<option value=''>
// 			-----{$this->lists}-----
// 			</option>
// 			";
//
// 		while($r = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
// 			$html.="<option value= '{$r[$value]}'";
// 		if($r[$value]==$result){
// 				$html.='selected';
// 			};
// 			$html.=">
// 			{$r[$label]}
// 			 </option>";
// 			}
// 		$html.="</select>";
// 		return $html;
// 		}

	function selectFromTBinDB2($table,$table2,$value,$label,$label2,$type,$id,$zoo,$idzoo,$sysallow,$idsysallow,$user,$iduser,$result){
		include_once 'database/db_tools.php';
		$db = new db_tools();
		$rs = $db->findbyPK24($table,$table2,$type,$id,$zoo,$idzoo,$user,$iduser,$sysallow,$idsysallow)->execute();
		$html = "<select class='form-control css-require' name='{$this->name}' id='{$this->idtf}'>
			<option value=''>
			-----{$this->lists}-----
			</option>
			";

		while($r = mysqli_fetch_array($rs,MYSQLI_ASSOC)){
			$html.="<option value= '{$r[$value]}'";
		if($r[$value]==$result){
				$html.='selected';
			};
			$html.=">
			{$r[$label]} ";
			$html.=" {$r[$label2]}";

			$html.="</option>";
			}
		$html.="</select>";
		return $html;
		}
	}

#---------------Upload-------------------#
	class uploadPic{
		public $name;
		function __construct($name){
			$this->name = $name;
		}
		function __toString(){
			return "<input type='file' name='{$this->name}' />";
		}
	}
#---------------Link-------------------#
	class link{
		public $url,$label,$params;
		function __toString(){
			return "
			<a href='{$this->url}?{$this->params}'>{$this->label}
			</a>";
		}
	}
#---------------Botton-------------------#
	class buttonok{
		public $text,$cass=null,$id=null;

		function __construct($text,$id,$cass,$value){
			$this->text = $text;
			$this->cass	 = $cass;
			$this->value = $value;
			$this->id = $id;
		}
		function __toString(){
			return "<input type='submit' id='{$this->id}' class='{$this->cass}' name='{$this->value}'value='{$this->text}'/>";
		}
	}
	class buttoncheck{
		public $text,$cass=null;

		function __construct($text,$cass,$value,$onclick){
			$this->text = $text;
			$this->cass	 = $cass;
			$this->value = $value;
			$this->onclick = $onclick;
		}
		function __toString(){
			return "<input type='button' class='{$this->cass}' name='{$this->value}'value='{$this->text}' onClick='{$this->onclick}'/>";
		}
	}
?>
