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
			<h2><p>***แบบสอบถามมีทั้งหมด 3 ส่วน ขอความกรุณาตอบข้อมูลของตัวท่านเองตามความเป็นจริง</p></h2>
			<h2>ส่วนที่ 1 : ข้อมูลทางลักษณะทางประชากรของผู้ตอบแบบสอบถาม</h2>
            <form action="ins_GlData.php" name="inputDataGL" method="post" enctype="multipart/form-data"> 
			  <h3 align="left">1. เพศ</h3><br>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male" onchange="check_1(this)"> ชาย</p>
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female" onchange="check_1(this)"> หญิง</p>   
           
                <h3 align="left">2. อายุ </h3><br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="old" value="old-1" onchange="check_2(this)"> 18-20 ปี</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="old" value="old-2" onchange="check_2(this)"> 21-23 ปี</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="old" value="old-3" onchange="check_2(this)"> 24 ปีขึ้นไป</p>
          
                <h3 align="left">3. คณะที่กำลังศึกษาอยู่</h3><br>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="fac" value="fac-1" onchange="check_3(this)"> คณะวิทยาศาสตร์ประยุกต์และวิศวกรรมศาสตร์</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="fac" value="fac-2" onchange="check_3(this)"> คณะสังคมบูรณาการณ์</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="fac" value="fac-3" onchange="check_3(this)"> คณะบริหารธุรกิจ</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="fac" value="fac-4" onchange="check_3(this)"> คณะศิลปศาสตร์</p>
           <br><br><br><br><br><br><br>
        
            <input type="submit" class="sendButton" name="submit" value="หน้าถัดไป ">
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
    <script src="js/check-radio.js"</script>
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
