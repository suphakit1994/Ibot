
<style>
</style>
<body>
  <form>
    <input type="hidden" name="student_id" value="<?php echo $cus['student_id']; ?>">
    <input type="hidden" name="course_id" value="<?php echo $_POST['course_id']; ?>">

    <?php echo $cus['student_id']; ?>
    <?php echo $_POST['course_id']; ?>
    <?php echo $_POST['calender_id']; ?>
    <?php echo $paym['payment_id']; ?>

    <!--  หน้า student -->
    <input type="hidden" name="student_name_th" value="<?php echo $_POST['student_name_th'];  ?>">
    <input type="hidden" name="student_name_eng" value="<?php echo $_POST['student_name_eng'];  ?>">
    <input type="hidden" name="student_nickname_eng" value="<?php echo $_POST['student_nickname_eng'];  ?>">
    <input type="hidden" name="student_brithday" value="<?php echo $_POST['student_brithday'];  ?>">
    <input type="hidden" name="student_school" value="<?php echo $_POST['student_school'];  ?>">
    <input type="hidden" name="student_grade" value="<?php echo $_POST['student_grade'];  ?>">
    
    <!-- หน้า parent -->
    <input type="hidden" name="parents_name_th" value="<?php echo $_POST['parents_name_th'];  ?>">
    <input type="hidden" name="parents_name_eng" value="<?php echo $_POST['parents_name_eng'];  ?>">
    <input type="hidden" name="parents_related" value="<?php echo $_POST['parents_related'];  ?>">
    <input type="hidden" name="parents_phonnumber" value="<?php echo $_POST['parents_phonenumber'];  ?>">
    <input type="hidden" name="parents_email" value="<?php echo $_POST['parents_email'];  ?>">
    <input type="hidden" name="parents_line" value="<?php echo $_POST['parents_line'];  ?>">

    <input type="hidden" name="payment_type" value="<?php echo $_POST['payment_type'];  ?>">  
    <div class="container-fluid" style="padding-right:80px ;padding-right:100px ;padding-left:100px ;">

      <div class="col-md-7" style="padding-top: 5%;"> 
       <h1 style="margin-bottom: 20px;"><b>The information has been saved.</b></h1>
       <img class="card-img-top" src="../images/112.png" alt="Card image cap" style="width: 600px;">  
     </div>

     <div class="col-md-5" style=" padding-top: 5%;">
      <div class="card" style="padding-left: 13%;padding-top: 8%;padding-bottom: 8%;">
        <h3 style="margin-bottom: 20px;"><b>STUDENT INFORMATION</b></h3>
        <div class="row">
          <div class="col-md-6"> 
            <p>Name</p>
            <p>Nickname</p>
          </div>
          <div class="col-md-6"> 
            <p><?php echo $_POST['student_name_eng'];  ?></p>
            <p><?php echo $_POST['student_nickname_eng'];  ?></p>
          </div>
        </div>

        <h3 style="margin-bottom: 5%;margin-top: 8%;"><b>PARENT INFORMATION</b></h3>
        <div class="row">
          <div class="col-md-6"> 
            <p>Name</p>
            <p>Relation</p>
            <p>Phone number</p>
          </div>
          <div class="col-md-6"> 
            <p><?php echo $_POST['parents_name_eng'];  ?></p> 
            <p><?php echo $_POST['parents_related'];  ?></p>
            <p><?php echo $_POST['parents_phonenumber'];  ?></p>
          </div>
        </div>

        <h3 style="margin-bottom: 5%;margin-top: 8%;"><b>ORDER SUMMARY</b></h3>
        <div class="row">
          <div class="col-md-6"> 
            <p>Course</p> 
            <p>Course Expansion</p>
            <p>class schedule</p>
            <p>Make-up class</p>
            <p>Study time</p>
          </div>
          <div class="col-md-6"> 
            <p><?php echo $pri['course_category'];  ?></p>
            <p><?php echo $pri['course_expension'];  ?></p>
            <p><?php echo $pri['course_category'];  ?></p>
            <p><?php echo $pri['course_category'];  ?></p>
            <p><?php echo $pri['course_category'];  ?></p>
          </div>
        </div>
      </div>
    </div> 
    <div>
    </div> 
  </div>  
</form>  
</body>