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
    .progressbar li.active:after {
      background: #0050ef;
      border-color: #0050ef;
      color: white ;
    }
    .progressbar li.active::before {
      border-color: #0050ef  !important;
      background: #0050ef  !important;
      color: white !important;
    }

 
</style>

<body>
<form href="..faii_ft.php" method="post" action="index.php?app=faii&action=parent_information" >
<div class="container-fluid" style="padding-right:80px ;padding-right:100px ;padding-left:100px ;">
    <div class="col-md-7" style="padding-top: 5%;">
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
            
            <div class="col-md-9" style="padding:0px">
            <fieldset class="show">
              <div class="form-card" style=" padding-top: 10%;">    
                <p>ชื่อ-นามสกุล (Thai)</p> 
                <input name="name_th" type="text" class="form-control"  >  
                <p >Name-Surname (Eng)</p> 
                <input name="name_eng" type="text" class="form-control" >  
                <p >Nickname (Eng)</p> 
                <input name="nickname_eng" type="text" class="form-control" >  
                <p >Birthday</p> 
                <input name="birthday" class="form-control" style="width: 100%;width: 224px;border-left-width: 0px;border-right-width: 0px;border-bottom-width: 0px;" type="date" id="start" name="start_time">
                <p >School</p> 
                <input name="school" type="text" class="form-control" style="width: 224px;">  
                <p >Grade</p> 
                <input name="grade" type="text" class="form-control" style="width: 224px;">  
            </div>
            <button  type="submit"  name="next" class="Button" style="border-radius:28px; width: 120px;">Next</button>
          </fieldset>
          </div>
        
    </div>

    <div class="col-md-5" style="padding-top: 5%;padding-bottom: 8%;">
        <div class="card" style="padding-left: 13%;padding-top: 8%;padding-bottom: 8%;">
            <h3 style="margin-bottom: 20px;"><b>STUDENT INFORMATION</b></h3>
            <div class="row">
                <div class="col-md-6"> 
                    <p>Name</p>
                    <p>Nickname</p>
                </div>
                <div class="col-md-6"> 
                    <p> </p>
                    <p></p>
                </div>
               
                <div class="col-md-6"> 
                    
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
                    <p></p> 
                    <p></p>
                    <p></p>
                </div>               
            </div>

            <h3 style="margin-bottom: 5%;margin-top: 8%;"><b>ORDER SUMMARY</b></h3>
            <div class="row">
                <div class="col-md-6"> 
                    <p>Course</p> 
                    <p>Course Expansion</p>
                    <p>Total Course</p>
                    <p>class schedule</p>
                    <p>Make-up class</p>
                    <p>Study time</p>
                </div>
                <div class="col-md-6"> 
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    <p></p>
                    
                </div>
                
            </div>
        </div>
       
    </div>
</div>
</form>  
</body>

<script>
	function myFunction() {
		document.getElementById("demo").innerHTML = '<iframe src="fa/oil.pdf"   width="100%" height="500px"></iframe>';
	}
</script>

