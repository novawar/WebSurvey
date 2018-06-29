<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>แบบสอบถามออนไลน์</title>
    <!-- Bootstrap -->
    <link href="bootstrap.min.css"  rel="stylesheet">
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
			<h2>ส่วนที่3 : ข้อมูลความคิดเห็นเกี่ยวกับผลที่ได้จากการใช้เครือข่ายสังคมออนไลน์ (Social Media) ของผู้ตอบแบบสอบคำถาม</h2>
            
            <form action="ins_surveyP3.php" name="inputDataSC" method="post" enctype="multipart/form-data">
              <h2>1. ด้านสังคม</h2><br>

              <h3 align="left">1.1 ช่วยให้ท่านติดต่อสื่อสารได้สะดวกรวดเร็วขึ้น</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment1_1" value="comment1_1-1" onchange="check_1(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment1_1" value="comment1_1-2" onchange="check_1(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment1_1" value="comment1_1-3" onchange="check_1(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment1_1" value="comment1_1-4" onchange="check_1(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment1_1" value="comment1_1-5" onchange="check_1(this)"> ไม่เห็นด้วยที่สุด</p> 
              
               <h3 align="left">1.2 ช่วยให้ท่านทราบข้อมูลข่าวสารได้รวดเร็ว</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment1_2" value="comment1_2-1" onchange="check_2(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment1_2" value="comment1_2-2" onchange="check_2(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment1_2" value="comment1_2-3" onchange="check_2(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment1_2" value="comment1_2-4" onchange="check_2(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment1_2" value="comment1_2-5" onchange="check_2(this)"> ไม่เห็นด้วยที่สุด</p>                               
            <br><br><br><br><br><br>

            
              <h2>2. ด้านการแสดงออกถึงตัวตน</h2><br>

              <h3 align="left">2.1 เป็นที่ระบายอารมณ์/แสดงความคิดเห็น</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment2_1" value="comment2_1-1" onchange="check_3(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment2_1" value="comment2_1-2" onchange="check_3(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment2_1" value="comment2_1-3" onchange="check_3(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment2_1" value="comment2_1-4" onchange="check_3(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment2_1" value="comment2_1-5" onchange="check_3(this)"> ไม่เห็นด้วยที่สุด</p>   

              <h3 align="left">2.2 เป็นสื่อในการนำเสนอรูปภาพ/ผลงานตนเอง</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment2_2" value="comment2_2-1" onchange="check_4(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment2_2" value="comment2_2-2" onchange="check_4(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment2_2" value="comment2_2-3" onchange="check_4(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment2_2" value="comment2_2-4" onchange="check_4(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment2_2" value="comment2_2-5" onchange="check_4(this)"> ไม่เห็นด้วยที่สุด</p>                                     
            <br><br><br><br><br><br>

           
              <h2>3. ด้านเวลา</h2><br>

              <h3 align="left">3.1 เป็นที่ระบายอารมณ์/แสดงความคิดเห็น</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_1" value="comment3_1-1" onchange="check_5(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_1" value="comment3_1-2" onchange="check_5(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_1" value="comment3_1-3" onchange="check_5(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_1" value="comment3_1-4" onchange="check_5(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_1" value="comment3_1-5" onchange="check_5(this)"> ไม่เห็นด้วยที่สุด</p>   

              <h3 align="left">3.2 เป็นสื่อในการนำเสนอรูปภาพ/ผลงานตนเอง</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_2" value="comment3_2-1" onchange="check_6(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_2" value="comment3_2-2" onchange="check_6(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_2" value="comment3_2-3" onchange="check_6(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_2" value="comment3_2-4" onchange="check_6(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_2" value="comment3_2-5" onchange="check_6(this)"> ไม่เห็นด้วยที่สุด</p>    

              <h3 align="left">3.3 เป็นสื่อในการนำเสนอรูปภาพ/ผลงานตนเอง</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_3" value="comment3_3-1" onchange="check_7(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_3" value="comment3_3-2" onchange="check_7(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_3" value="comment3_3-3" onchange="check_7(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_3" value="comment3_3-4" onchange="check_7(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment3_3" value="comment3_3-5" onchange="check_7(this)"> ไม่เห็นด้วยที่สุด</p>                                  
           <br><br><br><br><br><br>

            
              <h2>4. ด้านผลกระทบต่อสังคม</h2><br>

              <h3 align="left">4.1 เป็นแหล่งเผยแพร่สื่อที่ไม่เหมาะสม</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment4_1" value="comment4_1-1" onchange="check_8(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment4_1" value="comment4_1-2" onchange="check_8(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment4_1" value="comment4_1-3" onchange="check_8(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment4_1" value="comment4_1-4" onchange="check_8(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment4_1" value="comment4_1-5" onchange="check_8(this)"> ไม่เห็นด้วยที่สุด</p>   

              <h3 align="left">4.2 ก่อให้เกิดอาชญากรรมได้ง่าย</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment4_2" value="comment4_2-1" onchange="check_9(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment4_2" value="comment4_2-2" onchange="check_9(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment4_2" value="comment4_2-3" onchange="check_9(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment4_2" value="comment4_2-4" onchange="check_9(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment4_2" value="comment4_2-5" onchange="check_9(this)"> ไม่เห็นด้วยที่สุด</p>                                            
           <br><br><br><br><br><br>

            
              <h2>5. ด้านผลกระทบต่อสังคม</h2><br>

              <h3 align="left">5.1 ช่วยให้ท่านผ่อนคลายจากความเครียด</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_1" value="comment5_1-1" onchange="check_10(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_1" value="comment5_1-2" onchange="check_10(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_1" value="comment5_1-3" onchange="check_10(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_1" value="comment5_1-4" onchange="check_10(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_1" value="comment5_1-5" onchange="check_10(this)"> ไม่เห็นด้วยที่สุด</p>   

              <h3 align="left">5.2 เป็นแหล่งให้เป็นความบันเทิง</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_2" value="comment5_2-1" onchange="check_11(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_2" value="comment5_2-2" onchange="check_11(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_2" value="comment5_2-3" onchange="check_11(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_2" value="comment5_2-4" onchange="check_11(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_2" value="comment5_2-5" onchange="check_11(this)"> ไม่เห็นด้วยที่สุด</p>

              <h3 align="left">5.3 ทำให้ท่านมีเพื่อนมากขึ้น</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_3" value="comment5_3-1" onchange="check_12(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_3" value="comment5_3-2" onchange="check_12(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_3" value="comment5_3-3" onchange="check_12(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_3" value="comment5_3-4" onchange="check_12(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_3" value="comment5_3-5" onchange="check_12(this)"> ไม่เห็นด้วยที่สุด</p>   

              <h3 align="left">5.4 เป็นแหล่งพูดคุยกับกลุ่มเพื่อน</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_4" value="comment5_4-1" onchange="check_13(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_4" value="comment5_4-2" onchange="check_13(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_4" value="comment5_4-3" onchange="check_13(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_4" value="comment5_4-4" onchange="check_13(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_4" value="comment5_4-5" onchange="check_13(this)"> ไม่เห็นด้วยที่สุด</p>   

              <h3 align="left">5.5 เป็นแหล่งเพิ่มพูนความรู้/ข่าวสารต่างๆ</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_5" value="comment5_5-1" onchange="check_14(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_5" value="comment5_5-2" onchange="check_14(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_5" value="comment5_5-3" onchange="check_14(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_5" value="comment5_5-4" onchange="check_14(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_5" value="comment5_5-5" onchange="check_14(this)"> ไม่เห็นด้วยที่สุด</p>   

             <h3 align="left">5.6 แบ่งปันความคิดเห็นกับผู้อื่นได้ง่าย</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_6" value="comment5_6-1" onchange="check_15(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_6" value="comment5_6-2" onchange="check_15(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_6" value="comment5_6-3" onchange="check_15(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_6" value="comment5_6-4" onchange="check_15(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment5_6" value="comment5_6-5" onchange="check_15(this)"> ไม่เห็นด้วยที่สุด</p>                                                        
            <br><br><br><br><br><br>

           
              <h2>6. ด้านธุรกิจ</h2><br>

              <h3 align="left">6.1 ช่วยในการค้นหาสินค้าหรือบริการที่ต้องการ</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_1" value="comment6_1-1" onchange="check_16(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_1" value="comment6_1-2" onchange="check_16(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_1" value="comment6_1-3" onchange="check_16(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_1" value="comment6_1-4" onchange="check_16(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_1" value="comment6_1-5" onchange="check_16(this)"> ไม่เห็นด้วยที่สุด</p>   

              <h3 align="left">6.2 ช่วยในการตัดสินใจซื้อ</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_2" value="comment6_2-1" onchange="check_17(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_2" value="comment6_2-2" onchange="check_17(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_2" value="comment6_2-3" onchange="check_17(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_2" value="comment6_2-4" onchange="check_17(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_2" value="comment6_2-5" onchange="check_17(this)"> ไม่เห็นด้วยที่สุด</p>

              <h3 align="left">6.3 มีอิทธิพลทำให้ซื้อสินค้าหรือบริการนั้น</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_3" value="comment6_3-1" onchange="check_18(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_3" value="comment6_3-2" onchange="check_18(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_3" value="comment6_3-3" onchange="check_18(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_3" value="comment6_3-4" onchange="check_18(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_3" value="comment6_3-5" onchange="check_18(this)"> ไม่เห็นด้วยที่สุด</p>   

              <h3 align="left">6.4 เป็นช่องทางติดต่อบริษัท</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_4" value="comment6_4-1" onchange="check_19(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_4" value="comment6_4-2" onchange="check_19(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_4" value="comment6_4-3" onchange="check_19(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_4" value="comment6_4-4" onchange="check_19(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_4" value="comment6_4-5" onchange="check_19(this)"> ไม่เห็นด้วยที่สุด</p>   

              <h3 align="left">6.5 ช่วยให้ซื้อสินค้าได้ง่าย</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_5" value="comment6_5-1" onchange="check_20(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_5" value="comment6_5-2" onchange="check_20(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_5" value="comment6_5-3" onchange="check_20(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_5" value="comment6_5-4" onchange="check_20(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_5" value="comment6_5-5" onchange="check_20(this)"> ไม่เห็นด้วยที่สุด</p>   

             <h3 align="left">6.6 ประหยัดค่าใช้จ่ายในการซื้อ</h3><br>             
              <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_6" value="comment6_6-1" onchange="check_21(this)"> เห็นด้วยที่สุด
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_6" value="comment6_6-2" onchange="check_21(this)"> เห็นด้วย
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_6" value="comment6_6-3" onchange="check_21(this)"> เฉยๆ
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_6" value="comment6_6-4" onchange="check_21(this)"> ไม่เห็นด้วย  
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="comment6_6" value="comment6_6-5" onchange="check_21(this)"> ไม่เห็นด้วยที่สุด</p>                                                        
           <br><br><br><br><br><br>
		   <input type="hidden" name="idGet" value="<?php echo $_GET['idGl'];?>">
			<input type="submit" class="sendButton" name="submit" value="ส่งแบบสอบถาม (เย้!! เสร็จซะที :P )"> 
		   </form>
	
			</div>
	    </div>
	</div>

	
	
	
	
	
    <!------------------------------------- empty ---------------------------------------------------->
     <div id="index-banner" class="parallax-container">
        <div class="parallax">
        
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
    <script src="js/check-radio3.js"</script>
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
