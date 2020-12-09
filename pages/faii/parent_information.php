<style>
.form-control{
   
    border-left-width: 0px !important;
    border-right-width: 0px !important;
    border-bottom-width: 0px !important; 
}

 .progressbar li{
      float: left;
      width: 20%;
      position: relative;
      text-align: center;
    }
 /* .progressbar li:before{
    content:"1";
    width: 30px;
    height: 30px;
    } */
    .progressbar li:first-child:after{
      /* content: none; */
    }
    .progressbar{
      counter-reset: step;
    }
    .progressbar li:before{
      content:counter(step);
      counter-increment: step;
      width: 30px;
      height: 30px;
      border: 2px solid #bebebe;
      display: block;
      margin: 0 auto 10px auto;
      border-radius: 50%;
      line-height: 27px;
      background: white;
      color: #bebebe;
      text-align: center;
      font-weight: bold;
    }
    .progressbar li:after{
      content: '';
      position: absolute;
      width:100%;
      height: 3px;
      background: #979797;
      top: 15px;
      left: -50%;
      z-index: -1;
    }
    .active {
      background-color: unset !important; 
    }
    ul li::marker {
      color: red;
      font-size: 0em;
    }
    .progressbar li.active:after{
      background: <?php if($_SESSION['administrator_user']['layer']=='SuperAdmin'||$_SESSION['administrator_user']['layer']=='Admin'){echo " #fa7d09  !important;";}else{echo " #1473e6  !important;";} ?>
      border-color: <?php if($_SESSION['administrator_user']['layer']=='SuperAdmin'||$_SESSION['administrator_user']['layer']=='Admin'){echo "color: #fa7d09  !important;";}else{echo " #1473e6  !important;";} ?>
      color: white ;
    }
    .progressbar li.active::before{
      border-color: <?php if($_SESSION['administrator_user']['layer']=='SuperAdmin'||$_SESSION['administrator_user']['layer']=='Admin'){echo " #fa7d09  !important;";}else{echo " #1473e6  !important;";} ?>
      background: <?php if($_SESSION['administrator_user']['layer']=='SuperAdmin'||$_SESSION['administrator_user']['layer']=='Admin'){echo "#fa7d09  !important;";}else{echo " #1473e6  !important;";} ?>
      color: white!important;
    }

 
</style>

<body>
<div class="container-fluid" style="padding-right:80px ;padding-right:100px ;padding-left:100px ;">
    <div class="col-md-7" style="padding-top: 5%;">
    <h2 style=" margin-top: 0px; margin-bottom: 20px;"><b>Your account is being verified</b></h2> 
        <form>
            <div  class="form-card" >
                <ul class="progressbar">
                    <li class="active">student information</li>
                    <li >Parent information</li>
                    <li>Enroll </li>
                    <li>Payment</li>
                    <li>Success</li>
                </ul>
            </div>
            <div class="col-md-9" style="padding:0px">
            <div class="form-card" style=" padding-top: 10%;">   
                <p>ชื่อ-นามสกุล (Thai)</p> 
                <input type="text" class="form-control" >  
                <p >Parent's name (Eng)</p> 
                <input type="text" class="form-control" >  
                <p > Related to the applicant</p> 
                <select   name="related" id="" class="form-control" style="height: 70%;border-left-width: 0px;border-right-width: 0px;border-bottom-width: 0px;">
                                        <p> <option value="1"> </option></p>
                                        <p> <option value="2">2</option></p>
                                        <p> <option value="3">3</option></p>
                                        <p> <option value="4">4</option></p>
                                        <p> <option value="5">5</option></p>                                           
                                    </select> 
                <p >Phone number</p> 
                <input type="text" class="form-control" style="width: 224px;">  
                <p >E-mail</p> 
                <input type="text" class="form-control" style="width: 224px;">  
                <p >ID Line</p> 
                <input type="text" class="form-control" style="width: 224px;">  
            </div>
            <a  href="index.php?app=faii&action=enroll" type="button" name="next" class="Button" style="border-radius:28px; width: 120px;">Next</a>
            </div>
        </form>
    </div>
    
    <div class="col-md-5" style="padding-top: 5%;padding-bottom: 8%;">
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
                    <p>555555555</p>
                </div>
            </div>
        </div>
       
    </div>
</div>  
  



</body>