<?php
	function DateThai($strDate)
	{
		$strYear = date("Y",strtotime($strDate))+543;
		$strMonth= date("n",strtotime($strDate));
		$strDay= date("j",strtotime($strDate));
		$strHour= date("H",strtotime($strDate));
		$strMinute= date("i",strtotime($strDate));
		$strSeconds= date("s",strtotime($strDate));
		$strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
		$strMonthThai=$strMonthCut[$strMonth];
		return "$strDay $strMonthThai $strYear";
	}
function num2wordsThai($num){   
    $num=str_replace(",","",$num);
    $num_decimal=explode(".",$num);
    $num=$num_decimal[0];
    $returnNumWord;   
    $lenNumber=strlen($num);   
    $lenNumber2=$lenNumber-1;   
    $kaGroup=array("","สิบ","ร้อย","พัน","หมื่น","แสน","ล้าน","สิบ","ร้อย","พัน","หมื่น","แสน","ล้าน");   
    $kaDigit=array("","หนึ่ง","สอง","สาม","สี่","ห้า","หก","เจ็ต","แปด","เก้า");   
    $kaDigitDecimal=array("ศูนย์","หนึ่ง","สอง","สาม","สี่","ห้า","หก","เจ็ต","แปด","เก้า");   
    $ii=0;   
    for($i=$lenNumber2;$i>=0;$i--){   
        $kaNumWord[$i]=substr($num,$ii,1);   
        $ii++;   
    }   
    $ii=0;   
    for($i=$lenNumber2;$i>=0;$i--){   
        if(($kaNumWord[$i]==2 && $i==1) || ($kaNumWord[$i]==2 && $i==7)){   
            $kaDigit[$kaNumWord[$i]]="ยี่";   
        }else{   
            if($kaNumWord[$i]==2){   
                $kaDigit[$kaNumWord[$i]]="สอง";        
            }   
            if(($kaNumWord[$i]==1 && $i<=2 && $i==0) || ($kaNumWord[$i]==1 && $lenNumber>6 && $i==6)){   
                if($kaNumWord[$i+1]==0){   
                    $kaDigit[$kaNumWord[$i]]="หนึ่ง";      
                }else{   
                    $kaDigit[$kaNumWord[$i]]="เอ็ด";       
                }   
            }elseif(($kaNumWord[$i]==1 && $i<=2 && $i==1) || ($kaNumWord[$i]==1 && $lenNumber>6 && $i==7)){   
                $kaDigit[$kaNumWord[$i]]="";   
            }else{   
                if($kaNumWord[$i]==1){   
                    $kaDigit[$kaNumWord[$i]]="หนึ่ง";   
                }   
            }   
        }   
        if($kaNumWord[$i]==0){   
            if($i!=6){
                $kaGroup[$i]="";   
            }
        }   
        $kaNumWord[$i]=substr($num,$ii,1);   
        $ii++;   
        @$returnNumWord.=$kaDigit[$kaNumWord[$i]].$kaGroup[$i];   
    }      
    if(isset($num_decimal[1])){
        $returnNumWord.="จุด";
        for($i=0;$i<strlen($num_decimal[1]);$i++){
                $returnNumWord.=$kaDigitDecimal[substr($num_decimal[1],$i,1)];  
        }
    }       
    return $returnNumWord;   
}
    

    echo num2wordsThai('25101111')."<br>";
	$strDate = "2008-08-14";
	echo DateThai($strDate);
?>

<!-- เขียนต่อจากนี้ -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body>
		<!--บรรทัดที่ 1-->
		<table>
    		<tr>
        		<td>ที่ ทส.๑๑๐๑/</td>
    		</tr>
		</table>
		<!--บรรทัดที่ 2-->
		<table>
    		<tr>
				<td><!-- ระบุวันที่ --></td>
			</tr>
		</table>
		<!--บรรทัดที่ 3-->
		<table>
    		<tr>
				<td>เรื่อง</td>
				<td>รับรองการมีสิทธิได้รับสวัสดิการค่ารักษาพยาบาล</td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table>
    		<tr>
				<td>เรื่อง</td>
				<td>โรงพยาบาล</td>
				<td><!--ใส่โค๊ตตรงนี้--></td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table>
    		<tr>
				<td>ด้วย</td>
				<td><!--ใส่โค๊ตตรงนี้ ญาติพนักงาน--></td>
				<td><!--ใส่โค๊ตตรงนี้ TYPE--></td>
				<td>ของ</td>
				<td><!--ใส่โค๊ตตรงนี้ พนักงาน--></td>
				<td>พนักงานองค์การ</td>
			</tr>
		</table>
		<!--บรรทัดที่ 5-->
		<table>
    		<tr>
				<td>สวนสัตว์</td>
				<td><!--ใส่โค๊ตตรงนี้ ตำแหน่ง--></td>
				<td>สังกัด</td>
				<td><!--ใส่โค๊ตตรงนี้ สังกัด--></td>
				<td>องค์การสวนสัตว์ ได้เข้ารับการรักษาพยาบาล</td>
			</tr>
		</table>
		<!--บรรทัดที่ 6-->
		<table>
    		<tr>
				<td>ณ สถานพยาบาลแห่งนี้ ตั้งแต่วันที่</td>
				<td><!--ใส่โค๊ตตรงนี้ วันที่เข้ารับการรับษา--></td>
				<td>ประเภทคนไข้ใน</td>
			</tr>
		</table>
		<!--บรรทัดที่ 7-->
		<table>
    		<tr>
				<td>องค์การสวนสัตว์ เป็นหน่วยงานรัฐวิสาหกิจ สังกัดกระทรวงทรัพยากรธรรมชาติ</td>
			</tr>
		</table>
		<!--บรรทัดที่ 8-->
		<table>
    		<tr>
				<td>และสิ่งแวดล้อม ขอรับรองว่า</td>
				<td><!--ใส่โค๊ตตรงนี้ ญาติพนักงาน--></td>
				<td>มีสิทธิได้รับสวัสดิการค่ารักษาพยาบาล</td>
			</tr>
		</table>
		<!--บรรทัดที่ 9-->
		<table>
    		<tr>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อโรงพยาบาล--></td>
				<td>เรียกเก็บเงินค่ารักษาพยาบาล</td>
			</tr>
		</table>
		<!--บรรทัดที่ 10-->
		<table>
    		<tr>
				<td>ของ</td>
				<td><!--ใส่โค๊ตตรงนี้ วันที่เข้ารับการรับษา--></td>
				<td>ได้โดยตรงกับองค์การสวนสัตว์ ๗๑ ถนนพระราม ๕ เขตดุสิต</td>
			</tr>
		</table>
		<!--บรรทัดที่ 11-->
		<table>
    		<tr>
				<td>กรุงเทพมหานคร ๑๐๓๐๐ จักขอบคุณยิ่ง</td>
			</tr>
		</table>
		<!--บรรทัดที่ 12-->
		<table>
    		<tr>
				<td>จึงเรียนมาเพื่อโปรดพิจารณา</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table>
    		<tr>
				<td>ของแสดงความนับถึอ</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table>
    		<tr>
				<td>(</td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อผอ.--></td>
				<td>)</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table>
    		<tr>
				<td><!--ใส่โค๊ตตรงนี้ ตำแหน่ง ผอ.--></td>
			</tr>
		</table>
    </body>
</html>
