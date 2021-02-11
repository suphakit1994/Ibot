
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
    <form action="index.php?app=student&action=success_compeitition" method="post" enctype="multipart/form-data">
      <input type="hidden" name="com_id" value="<?php echo $_POST['com_id'];?>">
      <?php echo $_POST['com_id'];  ?>

      <div class="container-fluid" style="padding-right:80px ;padding-right:100px ;padding-left:100px ; padding-bottom: 3%;">
        <h1 style="text-align: center; font-weight: bold; text-align: center; padding-top: 3%;">IBOT COMPEITITION</h1>

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
              <br>
              <div class="custom-select" style="width:200px; ">
                <select name="payment_bank" class="form-control">
                  <p><option value="กรุงไทย">กรุงไทย</option></p>
                  <p><option value="ไทยพาณิชย์">ไทยพาณิชย์</option></p>
                  <p><option value="กสิกร">กสิกร</option></p>
                </select>
                <br><label>Ref. No.</label>
                <br><input name="payment_no" class="form-control" style="width: 350%;">
                <br><label>Amount</label>
                <br><input name="payment_amount" class="form-control" style="width: 350%;" value="<?php echo $compiadd['com_price']; ?>" OnChange="JavaScript:chkNum(this)" >
                <br><label>Transaction Date</label>
                <input name="payment_date" class="form-control" style="width: 100%;width: 224px;" type="date"  required>
                <input type="time"  name="payment_time" required> 
                <br><label>Proof of payment</label><br>
                <input name="payment_img" type="file" accept="image/*" required>
              </div>
              <div style="padding-top: 20px;">
                <input type="radio" name="payment_type"  value="Add Compeitition"  required>
                <label >ยืนยันข้อมูล</label>
                <button  type="submit"  name="submit" class="Button" style="border-radius:28px; width: 120px;">Next</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5" style="padding-top: 12%;padding-bottom: 8%;">
        <div class="card" style="padding-left: 8%;padding-top: 8%;padding-bottom: 8%;">
          <h3 style="margin-bottom: 20px; font-weight: bold;"><h2>ORDER SUMMARY</h2></h3>
          <div class="row" style="padding-top: 50px">
            <div class="col-md-6"> 
              <p>IBOT Compeitition :</p>
            </div>
            <div class="col-md-6"> 
              <p><?php echo $compiadd['com_type'];  ?></p>
            </div>
          </div>
          <div class="row" style="text-align: start; padding: 10px 140px 0px 15px;">
            Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diam nonummy nibh euismod tinciduct urt laoreet dolore mayna.
          </div>
          <div class="row" style="padding-top: 15px;">
            <div class="col-md-6"> 
              <p>Compeitition :</p>
            </div>
            <div class="col-md-6"> 
              <p><?php echo $compiadd['com_type'];  ?></p>
            </div>
          </div>
          <div class="row" style="padding-top: 15px;">
            <div class="col-md-6"> 
              <p>Program :</p>
            </div>
            <div class="col-md-6"> 
              <p><?php echo $compiadd['com_program'];  ?></p>
            </div>
          </div>
          <div class="row" style="padding-top: 15px;">
            <div class="col-md-6"> 
              <p>Compeitition Date :</p>
            </div>
            <div class="col-md-6"> 
              <p> <?php 
              $time = strtotime($compiadd['com_start_date']);
              $newformat = date("d M Y", $time);
              $time1 = strtotime($compiadd['com_end_date']);
              $newformat1 = date("d M Y", $time1);
              echo $newformat." - ".$newformat1; 
              ?></p>

            </div>
          </div>
        </div>
      </div>
    </div>  
  </form>
</body> 
<script>
  $(document).ready(function() {
    var readURL = function(input) {
      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
          $('.profile-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $(".file-upload").on('change', function(){
      readURL(this);
    });

    $(".upload-button").on('click', function() {
      $(".file-upload").click();
    });
  });
</script>
<script language="JavaScript">

  function addCommas(nStr)
  {
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
        //x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
          x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 ;
      }

      function chkNum(ele)
      {
        var num = parseFloat(ele.value);
        ele.value = addCommas(num.toFixed(2));
      }
    </script>