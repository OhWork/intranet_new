if(isset($term))
{
  
$sql = select * from tb where label like ='%$term%';
$qry = mysql_query($sql);

/*while ($arr = mysql_fetch_array($qry))
{
      $data['label'] = $arr[label''];
      $data['id'] = $arr[id''];
      $row[] = $data;
}*/



$menu = array(
    'id' => array(),
	'parent' => array(),
);

while($items = $db1->fetchAssoc($qry))
	{
			$menu['id'][$items['id']] = $items;
			$menu['parent'][$items['id']][] = $items['id'];
	}	

function tree($parent, $menu)
{

	if (isset($menu['parent'][$parent]))
	{
		foreach($menu['parent'][$parent] as $itemId)
       {
		   echo "3";
          if(!isset($menu['parent'][$itemId]))
          {
			  echo $menu['id'][$itemId]['label']."\r\n";
		  }
		  if(isset($menu['parent'][$itemId]))
          {
			  echo $menu['id'][$itemId]['label']."\r\n";
			  echo tree($itemId, $menu)."- -"."\r\n";;
		  }
		  
	   }
	}
}
echo tree(0, $menu);


สมมุติค่าส่งมาเป็น "CODE"  
ก้จะ  echo CODE

ถ้าส่งมาเป็น "PHP"

ก็จะแสดง CODE > PHP (ชื่อหมวดหมู่  = CODE)


หรือ ถ้าส่งมาเป็น "CSS"

ก็จะแสดง CODE > CSS(ชื่อหมวดหมู่  = CODE)
}

echo json_encode($row);