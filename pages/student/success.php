<style type="text/css" media="screen">

</style>
<body>
  <form>
    <input type="hidden" name="course_id" value="<?php echo $_POST['course_id']; ?>">
    <div class="container-fluid" style="padding-right:80px ;padding-right:100px ;padding-left:100px ;">

     <div class="col-md-7" style="padding-top: 5%;"> 
       <h1 style="margin-bottom: 20px;"><b>Please check the information.</b></h1>
       <div class="row">
        <a type="submit" href="index.php?app=student&action=student&action=success_camp"class="Button" style="width: 80%">Confirm</a></div>
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
             <p><?php echo $student['student_name_eng'];  ?></p>
             <p><?php echo $student['student_nickname_eng'];  ?></p>
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
            <p><?php echo $student['parents_name_eng'];  ?></p> 
            <p><?php echo $student['parents_related'];  ?></p>
            <p><?php echo $student['parents_phonenumber'];  ?></p>
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
            <?php
            $startdate=strtotime("Sunday");
            $enddate=strtotime("+8 weeks", $startdate);
            ?>
            <p> <?php $date = date("d M Y"); echo $date ." - ".date("d M Y", $enddate) ;?></p> 

            <?php 
            $week=strtotime("Monday");
            $nextweek=strtotime("+1 weeks", $week); 
            ?>
            <p> <?php  echo date("d M Y", $week) ." - ". date("d M Y", $nextweek-1);   ?></p> 
            <p><?php echo $class['class_date']."  ".$class['class_start_time']." - ".$class['class_end_time'];  ?></p>

          </div>
        </div>
      </div>

    </div> 
    <div >

    </div> 
  </div>  
</form>  
</body>