<style>

.rcorners {
    border-radius: 10px;
    border: 1px solid #D3D3D3;
    padding: 20px; 
    width: 100%;
    height: 80px;  
    margin: 10px;  
}
.card-body{
    /* box-shadow: 0 4px 10px 0 rgb(0 0 0), 0 4px 20px 0 rgba(0,0,0,0.19);  */
    width: 100%;
    height: 100px;
    padding-bottom: 10px;
    border-radius:10px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-size:14;
	text-decoration:none;
	padding-top: 10px; 
    padding-left: 30px; 
	margin: 10px;
	background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);    
	border:0px solid #ffffff;
  }

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
    .progressbar li.active:after {
      background: <?php if($_SESSION['administrator_user']['layer']=='SuperAdmin'||$_SESSION['administrator_user']['layer']=='Admin'){echo " #fa7d09  !important;";}else{echo " #1473e6  !important;";} ?>
      border-color: <?php if($_SESSION['administrator_user']['layer']=='SuperAdmin'||$_SESSION['administrator_user']['layer']=='Admin'){echo "color: #fa7d09  !important;";}else{echo " #1473e6  !important;";} ?>
      color: white ;
    }
    .progressbar li.active::before {
      border-color: <?php if($_SESSION['administrator_user']['layer']=='SuperAdmin'||$_SESSION['administrator_user']['layer']=='Admin'){echo " #fa7d09  !important;";}else{echo " #1473e6  !important;";} ?>
      background: <?php if($_SESSION['administrator_user']['layer']=='SuperAdmin'||$_SESSION['administrator_user']['layer']=='Admin'){echo "#fa7d09  !important;";}else{echo " #1473e6  !important;";} ?>
      color: white!important;
    }

 
</style>

<body>
<form>
<div class="container-fluid" style="padding-right:80px ;padding-right:100px ;padding-left:100px ;">
<div class="row">
    <div class="col-md-7">
    <h2 style=" margin-top: 0px; margin-bottom: 20px;"><b>Your account is being verified</b></h2> 
    
            <div  class="form-card" >
                <ul class="progressbar">
                    <li class="active">student information</li>
                    <li >Parent information</li>
                    <li>Enroll </li>
                    <li>Payment</li>
                    <li>Success</li>
                </ul>
            </div>
           
            <div class="form-card" style=" padding-top: 10%;">    
                <div class="card-body"  >
                    <span>
                        <b>imagination 1st course</b>                        
                    </span>  
                </div>
                <div>
                    <input type="radio" name="my-input" id="no">
                    <label for="yes">I agree the <label style="color:blue";>Terms and Conditions</label></label>   
                </div>
                
                <div class="rcorners" >
                    <div class="row">
                    <div class="col-md-3" style="padding-top: 10px;">
                    </div>
                    <div class="col-md-3" style="padding-top: 10px;">

                    </div>
                    <div class="col-md-3">
                        <a  href="#" type="button" name="next" class="Button" style="border-radius:28px; width: 120px;">Next</a>
                    </div>
                    </div>
                </div>
            </div>
            
                <div class="form-card" style=" padding-top: 10%;">
                    <a  href="index.php?app=faii&action=student" type="button" name="next" class="Button" style="border-radius:28px; width: 120px;">Next</a>
                </div>    
     
    </div>
       
    <div class="col-md-5" >
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
        </form>
    </div>
</div>  
</div>
</body>