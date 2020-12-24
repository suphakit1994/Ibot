
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
        <h1 style="text-align: center; font-weight: bold; text-align: center; padding-top: 3%;">IBOT COMPITITION</h1>
        <div class="col-md-7" style="padding-top: 2%;">

          <h2 style=" margin-top: 7%; margin-bottom: 20px;"><b>Your account is being verified</b></h2>     
          <div>
            <div class="form-card" > 
             <div class="col-md-12"style="padding-left: 5px;padding-right: 5px;">
              <div class="row" style="margin-top: 5%;">
                <div class="col-sm-6" style="margin-top: 0%; text-align: end;">
                  <img src="../images/bank1.jpg" style="width: 275px; height: 125px;" alt="">
                </div>
                <div class="col-sm-6" style="margin-top: 2%;">
                  <p>XXX-XXXX-XXX</p>
                  <p>IE Thai Software</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6" style="margin-top: 2%; text-align: end;">
                  <img src="../images/bank2.jpeg" style="width: 275px; height: 125px;" alt="">
                </div>
                <div class="col-sm-6" style="margin-top: 2%;">
                  <p>XXX-XXXX-XXX</p>
                  <p>IE Thai Software</p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6" style="margin-top: 2%; text-align: end;">
                  <img src="../images/bank3.jpg" style="width: 275px; height: 125px;" alt="">
                </div>
                <div class="col-sm-6" style="margin-top: 2%;">
                  <p>XXX-XXXX-XXX</p>
                  <p>IE Thai Software</p>
                </div>
              </div>
            </div> 
          </div>
          <div class="form-card" style=" padding-top: 15%;">    

            <div class="row" >
              <label style="margin-top: 5%; ">Bank</label>
              <br><div class="custom-select" style="width:200px; ">
                <select>
                  <option value="0">กรุงไทย</option>
                  <option value="1">ไทยพาณิชย์</option>
                  <option value="2">กสิกร</option>
                  <option value="3">พร้อมเพย์</option>
                </select>
                <br><label>Ref. No.</label>
                <br><input name="Ref" style="width: 350%;">
                <br><label>Amount</label>
                <br><input name="Amount" style="width: 350%;">
                <br><label>Transaction Date</label>
                <br><input name="Transactiondate" style="width: 350%;">
                <br><label>Proof of payment</label>
                <b  r><form action="/action_page.php">
                  <input type="file" id="myFile" name="filename">
                </form>
              </div>
              <div style="padding-top: 20px;">
                <a  href="index.php?app=student&action=success_compitition" type="button" name="next" class="Button" style="border-radius:28px; margin-top: 15px; width: 150px; ">Purchase now</a>
              </div> 
            </div>

          </div>
        </div>

      </div>

      <div class="col-md-5" style="padding-top: 12%;padding-bottom: 8%;">
        <div class="card" style="padding-left: 13%;padding-top: 8%;padding-bottom: 8%;">
          <h3 style="margin-bottom: 20px; font-weight: bold;"><h2>ORDER SUMMARY</h2></h3>
          <div class="row" style="padding-top: 50px">
            <div class="col-md-6"> 
              <p>IBOT Compitition :</p>
            </div>
            <div class="col-md-6"> 
              <p><?php echo $_POST['name_eng'];  ?></p>
            </div>
          </div>
          <div class="row" style="text-align: start; padding: 10px 140px 0px 15px;">
            Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diam nonummy nibh euismod tinciduct urt laoreet dolore mayna.
          </div>
          <div class="row" style="padding-top: 15px;">
            <div class="col-md-6"> 
              <p>Compitition :</p>
            </div>
            <div class="col-md-6"> 
              <p><?php echo $_POST['name_eng'];  ?></p>
            </div>
          </div>
          <div class="row" style="padding-top: 15px;">
            <div class="col-md-6"> 
              <p>Program :</p>
            </div>
            <div class="col-md-6"> 
              <p><?php echo $_POST['name_eng'];  ?></p>
            </div>
          </div>
          <div class="row" style="padding-top: 15px;">
            <div class="col-md-6"> 
              <p>Compitition Date :</p>
            </div>
            <div class="col-md-6"> 
              <p><?php echo $_POST['name_eng'];  ?></p>
            </div>
          </div>
        </div>

      </div>
    </div>  
  </form>
</body> 