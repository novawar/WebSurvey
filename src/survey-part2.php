<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>แบบสอบถามออนไลน์</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css"  rel="stylesheet">
    <!-- custom css -->
    <link href="css/navbar.css"  rel="stylesheet">
    <link href="css/slide.css"  rel="stylesheet">
    <link href="css/style.css"  rel="stylesheet">
    <link href="css/footer.css"  rel="stylesheet">
    <!-- font css -->
    <link href="css/font-face.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css" >
    <!-- Owl Carousel Assets -->
    
    
</head>

<body>
  
    <div class="container">
        <div class="inside-text">
            <h1>แบบสอบถาม</h1>
            <div class="line"></div>            		
        </div>
    </div>

	<div class="container">
        <div class="inside-text">
            <span style="cursor:pointer"><div class="flip-02"><h2>แบบสอบถามการใช้ Social ของนักศึกษามหาวิทยาลัยขอนแก่นวิทยาเขตหนองคาย</h2><i class="fa fa-angle-down" style="font-size:48px" ></i></div></span>
			<div class="panel-02">						
			<h2>ส่วนที่ 2 : ข้อมูลทางลักษณะทางประชากรของผู้ตอบแบบสอบถาม</h2>
             <form action="ins_surveyP2.php" name="inputDataSC" method="post" enctype="multipart/form-data">
              <h3 align="left">4.ประสบการณ์ในการใช้ Social Media ของท่าน </h3><br>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="exp-year" value="year-1" onchange="check_1(this)"> น้อยกว่า 6 เดือน</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="exp-year" value="year-2" onchange="check_1(this)"> 6 เดือน - 1 ปี</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="exp-year" value="year-3" onchange="check_1(this)"> 1 - 2 ปี</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="exp-year" value="year-4" onchange="check_1(this)"> 2 - 3 ปี</p>  
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="exp-year" value="year-5" onchange="check_1(this)"> 3 - 4 ปี</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="exp-year" value="year-6" onchange="check_1(this)"> 4 ปีขึ้นไป</p>     

			  
                <h3 align="left">5. Social Media ที่ท่านมีบัญชีผู้ใช้ (ตอบได้มากกว่า  1 ข้อ) </h3><br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="app[]" value="app-1" onchange="check_2(this)"> Facebook</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="app[]" value="app-2" onchange="check_2(this)"> Twitter</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="app[]" value="app-3" onchange="check_2(this)"> Instagram</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="app[]" value="app-4" onchange="check_2(this)"> Youtube</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="app[]" value="app-5" onchange="check_2(this)"> Line</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="app[]" value="app-6" onchange="check_2(this)"> WhatsApp</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="app[]" value="app-7" onchange="check_2(this)"> นอกเหนือจากตัวเลือกที่ให้มา</p>

			
                <h3 align="left">6. จากข้อ 5.  Social Media ที่ท่านใช้บ่อยที่สุดคือ</h3><br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="app-same" value="app-same1" onchange="check_3(this)"> Facebook</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="app-same" value="app-same2" onchange="check_3(this)"> Twitter</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="app-same" value="app-same3" onchange="check_3(this)"> Instagram</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="app-same" value="app-same4" onchange="check_3(this)"> Youtube</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="app-same" value="app-same5" onchange="check_3(this)"> Line</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="app-same" value="app-same6" onchange="check_3(this)"> WhatsApp</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="app-same" value="app-same7" onchange="check_3(this)"> นอกเหนือจากตัวเลือกที่ให้มา</p>

			
                <h3 align="left">7.ช่องทางในการใช้ Social Media ของท่าน (ตอบได้มากกว่า 1 ข้อ)</h3><br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="platfrom[]" value="platfrom-1" onchange="check_4(this)"> Smartphone</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="platfrom[]" value="platfrom-2" onchange="check_4(this)"> Laptop/Notebook</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="platfrom[]" value="platfrom-3" onchange="check_4(this)"> PC/MAC</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="platfrom[]" value="platfrom-4" onchange="check_4(this)"> iPad/Tablet</p>

			
                <h3 align="left">8. ความถี่ในการใช้ Social Media ของท่านในแต่ละวัน </h3><br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="play" value="play1" onchange="check_5(this)"> 1 - 2 ครั้ง</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="play" value="play2" onchange="check_5(this)"> 3 - 4 ครั้ง</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="play" value="play3" onchange="check_5(this)"> 5 - 6 ครั้ง</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="play" value="play4" onchange="check_5(this)"> เปิดตลอดทั้งวัน</p>

			
                <h3 align="left">9. ช่วงเวลาที่ท่านใช้ Social Media บ่อยที่สุด  </h3><br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="timeplay" value="timeplay1" onchange="check_6(this)"> 6:00 น. - 9:00 น.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="timeplay" value="timeplay2" onchange="check_6(this)"> 9:00 น. - 12:00 น.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="timeplay" value="timeplay3" onchange="check_6(this)"> ช่วงพักกลางวัน</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="timeplay" value="timeplay4" onchange="check_6(this)"> 13:00 น. - 16:00 น.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="timeplay" value="timeplay5" onchange="check_6(this)"> 16:00 น. - 18:00 น.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="timeplay" value="timeplay6" onchange="check_6(this)"> 18:00 น. - 21:00 น.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="timeplay" value="timeplay7" onchange="check_6(this)"> 21:00 น. - 00:00 น.</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="timeplay" value="timeplay8" onchange="check_6(this)"> 00:00 น. เป็นต้นไป</p>

			
                <h3 align="left">10. ระยะเวลาการใช้ Social Media ของท่านในแต่ละวัน   </h3><br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="time-social" value="time-social1" onchange="check_7(this)"> น้อยกว่า 30 นาที </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="time-social" value="time-social2" onchange="check_7(this)"> 30 นาที – 1 ช.ม. </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="time-social" value="time-social3" onchange="check_7(this)"> 1 – 2 ช.ม.  </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="time-social" value="time-social4" onchange="check_7(this)"> 2 – 3 ช.ม. </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="time-social" value="time-social5" onchange="check_7(this)"> 3 - 4 ช.ม. </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="time-social" value="time-social6" onchange="check_7(this)"> 4 – 5 ช.ม.  </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="time-social" value="time-social7" onchange="check_7(this)"> มากกว่า 5 ช.ม.</p>

			
                <h3 align="left">11. วัตถุประสงค์ฝนการใช้ Social Media ของท่าน (ตอบได้มากกว่า 1 ข้อ) </h3><br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="want[]" value="want-1" onchange="check_8(this)"> โพสข้อความ/รูปภาพ</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="want[]" value="want-2" onchange="check_8(this)">  เช็คอิน </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="want[]" value="want-3" onchange="check_8(this)"> เล่นเกม </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="want[]" value="want-4" onchange="check_8(this)"> ติดตามเพื่อน/คนอื่นๆ </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="want[]" value="want-5" onchange="check_8(this)"> ติดตามข่าวสาร/งาน </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="want[]" value="want-6" onchange="check_8(this)"> แลกเปลี่ยนข้อมูลสิ่งสนใจร่วมกัน </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="want[]" value="want-7" onchange="check_8(this)"> พูดคุยกับเพื่อน  </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="want[]" value="want-8" onchange="check_8(this)"> ประชาสัมพันธ์สินค้า/บริการ/บริษัท </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="want[]" value="want-9" onchange="check_8(this)"> ซื้อสินค้าออนไลน์ </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="want[]" value="want-10" onchange="check_8(this)"> หาเพื่อนใหม่ </p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="want[]" value="want-11" onchange="check_8(this)"> นอกเหนือจากตัวเลือกที่ให้มา</p>
            
			<input type="hidden" name="idGet" value="<?php echo $_GET['idGl'];?>">
			<input type="submit" class="sendButton" name="submit" value="หน้าถัดไป (สุดท้ายแล้ว >< ) "></a> 
			</form>
		
			</div>
	    </div>
	</div>

	
	
	
	
	
    <!------------------------------------- empty ---------------------------------------------------->
     <div id="index-banner" class="parallax-container">
        <div class="parallax">
            <img src="bg-1.jpg"  alt="">
        </div>
    </div>
	
    <!--******************************* developer section start *******************************-->
   
    <!--******************************* footer section start *******************************-->
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- owl script -->
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/check-radio2.js"</script>
    <script>      
    $(document).ready(function(){
	
        $("h1").show(function(){
            $(".panel-03").slideDown(1000);
			
        });
    });
    </script>
	
	<script>
    $(document).ready(function(){
	
        $(".flip-02").show(function(){
            $(".panel-02").slideToggle(1000);
			
        });
    });
    </script>

	<script>
        $(document).ready(function() {
            $(".sendButton").hide();
        });
    </script>

    <!-- parallax script -->
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>

</html>
