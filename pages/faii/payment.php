<style>
.corners {
    border-radius: 10px;
    border: 1px solid #D3D3D3;
    padding: 20px; 
    width: 100%;
    height: 80px;  
    margin: 10px;  
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
    <div class="col-md-7" style="padding-top: 5%;">
    <h2 style=" margin-top: 0px; margin-bottom: 20px;"><b>Your account is being verified</b></h2> 
        
            <div  class="form-card" >
                <ul class="progressbar">
                    <li class="active">student information</li>
                    <li class="active">Parent information</li>
                    <li class="active">Enroll </li>
                    <li class="active">Payment</li>
                    <li>Success</li>
                </ul>
            </div>
            <div>
            
            <div class="form-card" style=" padding-top: 15%;">     
                <p >Name-Surname (Eng) </p> 
                <input type="text" class="form-control"  >  
                <p >Email Address</p> 
                <input type="text" class="form-control" >  
                <p >Thailand</p> 
                <input type="text" class="form-control" >   
                <p >City</p> 
                <input type="text" class="form-control">  
                <p >Address</p> 
                <input type="text" class="form-control" >  
                <p >Zip or postal code</p> 
                <input type="text" class="form-control" >  
                <p >Card number</p> 
                <input type="text" class="form-control" >   
                
                    <select   name="related" id="" class="form-control" style="width: 20%;">
                        <option selected>Month</option>
                        <option value="1"> </option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>                                           
                    </select> 
                    <select   name="related" id="" class="form-control" style="width: 20%;">
                        <option selected>Month</option>
                        <option value="1"> </option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>                                           
                    </select>
                
            </div>
            <div>
                <a  href="index.php?app=faii&action=parent_information" type="button" name="next" class="Button" style="border-radius:28px; width: 120px;">Next</a>
            </div> 
        </div>
        
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
</form>  



</body>