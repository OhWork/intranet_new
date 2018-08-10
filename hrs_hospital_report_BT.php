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
		<table align="left">
    		<tr>
                <td><img style='width:90px;' src='images/Logo/ZPO.png'></td>
			</tr>
		</table>
		<table>
    		<tr>
        		<td style="font-size: 24px;"><b>บันทึกข้อความ</b></td>
    		</tr>
		</table>
		<!--บรรทัดที่ 2-->
		<table>
    		<tr>
				<td><b>หน่วยงาน</b></td>
				<td>องค์การสวนสัตว์  สำนักบริหารทรัพยากรบุคคล ฝ่ายสวัสดิการและแรงงานสัมพันธ์</td>
			</tr>
		</table>
		<!--บรรทัดที่ 3-->
		<table>
    		<tr>
				<td>ที่</td>
				<td>ทส ๑๑๑๙ /</td>
				<td>วันที่</td>
				<td><!--ใส่โค๊ตตรงนี้--></td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table style="border-bottom: solid 1px #000000;">
    		<tr>
				<td>เรื่อง</td>
				<td>รับรองการมีสิทธิรับเงินช่วยเหลือค่ารักษาพยาบาล</td>
			</tr>
		</table>
		<!--บรรทัดที่ 4-->
		<table>
    		<tr>
				<td><b>เรียน</b></td>
				<td><b>ผู้อำนวยการองค์การสวนสัตว์</b></td>
			</tr>
		</table>
		<!--บรรทัดที่ 5-->
		<table>
    		<tr>
				<td>ด้วย</td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อ--></td>
				<td><!--ใส่โค๊ตตรงนี้ ตำแหน่ง--></td>
				<td>สังกัด</td>
				<td><!--ใส่โค๊ตตรงนี้ สังกัด--></td>
			</tr>
		</table>
		<!--บรรทัดที่ 6-->
		<table>
    		<tr>
				<td>มีความประสงค์ขอหนังสือรับรองการมีสิทธิรับเงินช่วยเหลือค่ารักษาพยาบาลซึ่ง</td>
				<td><!--ใส่โค๊ตตรงนี้ ผู้ที่เข้ารับการรับษา--></td>
			</tr>
		</table>
		<!--บรรทัดที่ 7-->
		<table>
    		<tr>
				<td><!--ใส่โค๊ตตรงนี้ TYPE--></td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อ--></td>
				<td>จะเข้ารับการรักษาพยาบาลที่</td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อสถานพยาบาล--></td>
				<td>ในวันที่</td>
				<td><!--ใส่โค๊ตตรงนี้ วันที่--></td>
				<td>นั้น</td>
			</tr>
		</table>
		<!--บรรทัดที่ 8-->
		<table>
    		<tr>
				<td>สำนักบริหารทรัพยากรบุคคล ได้จัดทำหนังสือรับรองการมีสิทธิรับเงินช่วยเหลือค่ารักษาพยาบาลบิดาของ </td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อ--></td>
				<td>เรียบร้อยแล้ว</td>
			</tr>
		</table>
		<!--บรรทัดที่ 9-->
		<table>
    		<tr>
				<td>จึงเรียนมาเพื่อโปรดพิจารณา หากเห็นชอบเพื่อโปรดลงนามในหนังสือรับรองที่แนบมาพร้อมนี้</td>
			</tr>
		</table>
		<!--บรรทัดที่ 10-->
		<table>
    		<tr>
				<td>(</td>
				<td><!--ใส่โค๊ตตรงนี้ ชื่อผอ.HR--></td>
				<td>)</td>
			</tr>
		</table>
		<!--บรรทัดที่ 13-->
		<table>
    		<tr>
				<td><!--ใส่โค๊ตตรงนี้ ตำแหน่ง ผอ.HR--></td>
			</tr>
		</table>
    </body>
</html>
