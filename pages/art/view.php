<style type="text/css">
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
    .dropbtn {
      background-color: #3498DB;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
      cursor: pointer;
  }

  .dropbtn:hover, .dropbtn:focus {
      background-color: #2980B9;
  }

  .dropdown {
      position: relative;
      display: inline-block;
  }

  .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
  }

  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
  }

  .dropdown a:hover {background-color: #ddd;}

  .show {display: block;}
</style>
</style>
<body>
    <div class="container">
        <form action="index.php?app=art&action=insert" method="post">
            <!-- row1 -->
            <div class="row" style="padding-top: 3%; padding-bottom:4%">
                <h1 style="font-weight: bold; text-align: center;">IBOT COMPITITIONS</h1>
                <div class="main sup-topic" style="padding-top: 1%; color: #A8A5A5; text-align: center; width: 65%; margin-left: 18%;   ">
                    <p>Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diam nonummy nibh euismod tinciduct urt laoreet dolore mayna</p>
                </div>
            </div>
            <!-- row2 -->
            <div class="row">
                <h2 style="font-weight: bold; margin-bottom:2%;">Payment methods</h2>
            </div>
            <div class="row">
                <div class="col-lg-8" >
                    <div class="row">
                        <div class="col-md-6" style="margin-top: 2%; text-align: end;">
                            <img src="../images/bank1.jpg" style="width: 300px; height: 150px;" alt="">
                        </div>
                        <div class="col-md-6" style="margin-top: 2%;">
                            <p>XXX-XXXX-XXX</p>
                            <p>IE Thai Software</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-top: 2%; text-align: end;">
                            <img src="../images/bank2.jpeg" style="width: 300px; height: 150px;" alt="">
                        </div>
                        <div class="col-md-6" style="margin-top: 2%;">
                            <p>XXX-XXXX-XXX</p>
                            <p>IE Thai Software</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style="margin-top: 2%; text-align: end;">
                            <img src="../images/bank3.jpg" style="width: 300px; height: 150px;" alt="">
                        </div>
                        <div class="col-md-6" style="margin-top: 2%;">
                            <p>XXX-XXXX-XXX</p>
                            <p>IE Thai Software</p>
                        </div>
                    </div>
                </div>
                <!-- Information -->
                <div class="col-lg-4" style="border: 1px solid #D5D0D0; padding:2%;">
                    <div class="container" style="width: 100%;">
                        <div class="row">
                            <h2>ORDER SUMMARY</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p>IBOT Competitions</p>
                            </div>
                            <div class="col-md-4">
                                <p>11111</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12" style="padding-right: 10%; margin-top:1%;">
                                <p style="font-weight: lighter; color: #A8A5A5;">Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diam nonummy nibh euismod tinciduct urt laoreet dolore mayna</p>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 10%;">
                            <div class="col-md-5">
                                <p>Competitions</p>
                            </div>
                            <div class="col-md-7">
                                <p style="font-weight: lighter; color: #A8A5A5;">Regular Category</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <p>Program</p>
                            </div>
                            <div class="col-md-7">
                                <div class="row"></div>
                                <p style="font-weight: lighter; color: #A8A5A5;">Elementtary<br>(less than 12 years old)</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <p>Competition Date</p>
                            </div>
                            <div class="col-md-7">
                                <p style="font-weight: lighter; color: #A8A5A5;">26 Oct 2020 - 30 Oct 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <label>Bank</label>
                <div class="dropdown">
                  <button onclick="myFunction()" class="dropbtn">Dropdown</button>
                  <div id="myDropdown" class="dropdown-content">
                    <a href="#home">Home</a>
                    <a href="#about">About</a>
                    <a href="#contact">Contact</a>
                </div>
            </div>

            <label>Ref. No.</label>

        </div>
        <label>Amount</label>
        <label>Transaction Date</label>
    </div>
    <!-- Button -->
    <div class="row" style=" margin-top:1%; padding-bottom:2%;">
        <div class="col-md-2" style="padding-left:0%;">
            <input name="insert" class="Button" type="submit" style="padding: 4px;  margin: 0px; width: 100%; padding-left:0%;  ">
        </div>
        <div class="col-md-2">
            <a href="" class="ButtonBack" style="padding: 4px;  margin: 0px; width: 70%;  ">BACK</a>
        </div>
        <div class="col-md-2">
            <a href="index.php?app=art&action=view_2" class="ButtonBack" style="padding: 4px;  margin: 0px; width: 70%;  ">Page2</a>
            <a href="index.php?app=art&action=view_3" class="ButtonBack" style="padding: 4px;  margin: 0px; width: 70%;  ">Page3</a>
        </div>
    </div>
</form>
</div>
</body>