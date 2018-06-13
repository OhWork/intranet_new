$(function(){  
      
    $("#form-signin").submit(function(){ // เมื่อมีการ submit ฟอร์ม ล็อกอิน  
        // ส่งข้อมูลไปตรวจสอบที่ไฟล์ check_login.php แบบ post ด้วย ajax  
        $.post("check_login.php",$("#form-signin").serialize(),function(data){  
            if(data==1){ // ตรวจสอบผลลัพธ์  
                // ถ้าล็อกอินผ่าน ให้ลิ้งค์ไปที่หน้า main_page.php  
                window.location='admin.php?url=home.php.php';  
            }else{  
                /// คำสั่งหรือแจ้งเตือนกรณีล็อกอินไม่ผ่าน  
                $("#form-signin")[0].reset(); 
                 
            }  
        });  
        return false;  
    });  
      
});  