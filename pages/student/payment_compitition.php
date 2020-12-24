
<style>
  select[name=month]{
    border-color: #ffffff;
    border-bottom: 2px solid #F1ECEC ;
    color: #A8A5A5;
    font-weight: lighter;
    font-size: 17px;
  }
  select[name=year]{
    border-color: #ffffff;
    border-bottom: 2px solid #F1ECEC;
    font-weight: lighter;
    color: #A8A5A5;
    font-size: 17px;
  }
  input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid #F1ECEC;
  }
  .corners {
    border-radius: 10px;
    border: 1px solid #D3D3D3;
    padding: 10%; 
    width: 100%;
    height: 80px;  
    margin: 10px;  
  }
  .form-control{
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
      color: white!important;
    }


  </style>

  <body>
    <form  method="post" action="index.php?app=success_compitition">
      <div class="container-fluid" style="padding-right:80px ;padding-right:100px ;padding-left:100px ; padding-bottom: 3%;">
        <div class="col-md-7" style="padding-top: 2%;">
          <h1 style="text-align: center;">IBOT COMPITITION</h1>
          <h2 style=" margin-top: 7%; margin-bottom: 20px;"><b>Your account is being verified</b></h2>     
          <div>
            <div class="form-card" > 
             <div class="col-md-12"style="padding-left: 5px;padding-right: 5px;">
               <div class="row">
                <div class="col-sm-6" style="margin-top: 0%; text-align: end;">
                  <img src="../images/bank1.jpg" style="width: 300px; height: 150px;" alt="">
                </div>
                <div class="col-sm-6" style="margin-top: 2%;">
                  <p>XXX-XXXX-XXX</p>
                  <p>IE Thai Software</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6" style="margin-top: 2%; text-align: end;">
                  <img src="../images/bank2.jpeg" style="width: 300px; height: 150px;" alt="">
                </div>
                <div class="col-sm-6" style="margin-top: 2%;">
                  <p>XXX-XXXX-XXX</p>
                  <p>IE Thai Software</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6" style="margin-top: 2%; text-align: end;">
                  <img src="../images/bank3.jpg" style="width: 300px; height: 150px;" alt="">
                </div>
                <div class="col-sm-6" style="margin-top: 2%;">
                  <p>XXX-XXXX-XXX</p>
                  <p>IE Thai Software</p>
                </div>
              </div>
            </div> 
          </div>
          <div class="form-card" style=" padding-top: 15%;">    

            <div class="row" style="margin-left:8%; margin-top:2%;">
              <label>Bank</label>
              <br><div class="custom-select" style="width:200px;">
                <select>
                  <option value="0">กรุงไทย</option>
                  <option value="1">ไทยพาณิชย์</option>
                  <option value="2">กสิกร</option>
                  <option value="3">พร้อมเพย์</option>
                </select>
                <br><label>Ref. No.</label>
                <br><input name="Ref" >
                <br><label>Amount</label>
                <br><input name="Amount" >
                <br><label>Transaction Date</label>
                <br><input name="Transactiondate" >
                <br><label>Proof of payment</label>
                <b  r><form action="/action_page.php">
                  <input type="file" id="myFile" name="filename">
                </form>
              </div>
            </div>    
          </div>

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
              <p><?php echo $_POST['name_eng'];  ?></p>
              <p><?php echo $_POST['nickname_eng'];  ?></p>
            </div>

            <div class="col-md-6"> 

            </div>
          </div>

          <h3 style="margin-bottom: 5%;margin-top: 8%;"><b>PARENT INFORMATION</b></h3>
          <div class="row">
            <div class="col-md-6"> 
              <p>Name</p>
              <p>Nickname</p>
              <p>Phone number</p>
            </div>
            <div class="col-md-6"> 
              <p><?php echo $_POST['namep_eng'];  ?></p> 
              <p><?php echo $_POST['related'];  ?></p>
              <p><?php echo $_POST['phonenumber'];  ?></p>
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
              <p><?php echo $data[2]['Course_Expension']; ?></p>
              <p></p>
              <p></p>
              <p></p>
              <p></p>
              <p></p>              
            </div>
          </div>
        </div> 
      </div>
      <div>
        <a  href="index.php?app=student&action=success_compitition" type="button" name="next" class="Button" style="border-radius:28px; width: 150px;">Purchase now</a>
      </div> 
    </div>  
  </form>
</body> 