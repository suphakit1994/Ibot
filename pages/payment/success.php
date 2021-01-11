
<style>
</style>
<body>
  <form>
    <input type="hidden" name="student_id" value="<?php echo $cus['student_id']; ?>">
    <input type="hidden" name="course_id" value="<?php echo $_POST['course_id']; ?>">
    <?php echo $cus['student_id']; ?>
    <?php echo $_POST['course_id']; ?>

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
    <input type="hidden" name="parents_phonnumber" value="<?php echo $_POST['parents_phonnumber'];  ?>">
    <input type="hidden" name="parents_email" value="<?php echo $_POST['parents_email'];  ?>">
    <input type="hidden" name="parents_line" value="<?php echo $_POST['parents_line'];  ?>">
    
    <div class="container-fluid" style="padding-right:80px ;padding-right:100px ;padding-left:100px ;">
      
      <div class="col-md-7" style="padding-top: 5%;"> 
        
        <img class="card-img-top" src="../images/112.png" alt="Card image cap" style="padding-top: 20%;height: 900px;">  
      </div>

      <div class="col-md-5" style="padding-top: 5%;padding-bottom: 8%;">
        <h2><b>Thang you !</b></h2>
        <p style=" margin-bottom: 10%;">Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diam nonummy nibh 
        euismod tinciduct urt laoreet dolore mayna.</p>
        <div class="card" style="padding-left: 13%;padding-top: 8%;padding-bottom: 8%;">
          <h3 style="margin-bottom: 20px;"><b>STUDENT INFORMATION</b></h3>
          <div class="row">
            <div class="col-md-6"> 
              <p>Name</p>
            </div>
            <div class="col-md-6"> 
              <p>555555555</p>
            </div>
            <div class="col-md-6"> 
              <p>Nickname</p>
            </div>
            <div class="col-md-6"> 
              <p>555555555</p>
            </div>
          </div>
          
          <h3 style="margin-bottom: 5%;margin-top: 8%;"><b>PARENT INFORMATION</b></h3>
          <div class="row">
            <div class="col-md-6"> 
              <p>Name</p>
            </div>
            <div class="col-md-6"> 
              <p>555555555</p>
            </div>
            <div class="col-md-6"> 
              <p>Nickname</p>
            </div>
            <div class="col-md-6"> 
             <p>555555555</p>
           </div>
           <div class="col-md-6"> 
            <p>Phone number</p>
          </div>
          <div class="col-md-6"> 
            <p>555555555</p>
          </div>
        </div>

        <h3 style="margin-bottom: 5%;margin-top: 8%;"><b>ORDER SUMMARY</b></h3>
        <div class="row">
          <div class="col-md-6"> 
            <p>Course</p>
          </div>
          <div class="col-md-6"> 
            <p>555555555</p>
          </div>
          <div class="col-md-6"> 
            <p>Course Expansion</p>
          </div>
          <div class="col-md-6"> 
            <p>555555555</p>
          </div>
          <div class="col-md-6"> 
            <p>Total Course</p>
          </div>
          <div class="col-md-6"> 
            <p>555555555</p>
          </div>
          <div class="col-md-6"> 
            <p>class schedule</p>
          </div>
          <div class="col-md-6"> 
            <p>555555555</p>
          </div>
          <div class="col-md-6"> 
            <p>Make-up class</p>
          </div>
          <div class="col-md-6"> 
            <p>555555555</p>
          </div>
          <div class="col-md-6"> 
            <p>Study time</p>
          </div>
          <div class="col-md-6"> 
            <p>5555555555</p>
          </div>
        </div>
      </div>
      
    </div>
    <div >
      <a  href="index.php?app=home" type="button" name="next" class="Button" style="border-radius:28px; width: 150px;">Back to Home</a>
    </div> 
  </div>  
</form>  
</body>