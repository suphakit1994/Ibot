<style type="text/css">
</style>
<body>
    <div class="container">
        <div class="row" style="padding-top: 3%; padding-bottom:4%">
            <h1 style="font-weight: bold; text-align: center;">IBOT COMPITITIONS</h1>
            <div class="main sup-topic" style="padding-top: 1%; color: #A8A5A5; text-align: center;   ">
                <p>Loerm ipsum dolor sit amet. consectetuer adipiscing edit. sed diam <br> nonummy nibh euismod tinciduct urt laoreet dolore mayna</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-4 " style="border: 1px solid #F1EAEA; padding:2%;">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-8">
                            <p>Credit Card</p>
                        </div>
                    </div>
                    <div class="col-md-4 " style="border: 1px solid #F1EAEA; padding:2%;">
                    <div class="col-sm-4"></div>
                        <div class="col-sm-8">
                            <p>Mobile Payment</p>
                        </div>
                    </div>
                    <div class="col-md-4 " style="border: 1px solid #F1EAEA; padding:2%">
                    <div class="col-sm-4"></div>
                        <div class="col-sm-8">
                            <p>Other method</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon2" style="margin-top: 1%;">
                <input type="text" class="form-control" placeholder="Surname" aria-label="Surname" aria-describedby="basic-addon2" style="margin-top: 1%;">
                <input type="text" class="form-control" placeholder="Email Address" aria-label="Email" aria-describedby="basic-addon2" style="margin-top: 1%;">
                <input type="text" class="form-control" placeholder="Thailand" aria-label="Thailand" aria-describedby="basic-addon2" style="margin-top: 1%;">
                <input type="text" class="form-control" placeholder="City" aria-label="City" aria-describedby="basic-addon2" style="margin-top: 1%;">
                <input type="text" class="form-control" placeholder="Address" aria-label="Address" aria-describedby="basic-addon2" style="margin-top: 1%;">
                <input type="text" class="form-control" placeholder="Zip or postal code" aria-label="postal" aria-describedby="basic-addon2" style="margin-top: 1%;">
                <input type="text" class="form-control" placeholder="Card number" aria-label="card" aria-describedby="basic-addon2" style="margin-top: 1%;">

                    <div class="row" style="margin-top: 1%; margin-left: 0%;">
                        <?Php
                        echo "<select name=month>";
                        for($i=0;$i<=11;$i++){
                        $month=date('F',strtotime("first day of -$i month"));
                        echo "<option value=$month>$month</option> ";
                        }
                        echo "</select>";

                        echo "<select name=year>";
                        for($i=0;$i<=100;$i++){
                        $year=date('Y',strtotime("last day of -$i year"));
                        echo "<option name='$year'>$year</option>";
                        }
                        echo "</select>";
                        ?>
                    </div>

                </div>
                <div class="row" style="padding-top: 2%;"></div>
            </div>
            <div class="col-lg-4" style="border: 1px solid #F1EAEA; padding:2%;" >
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
        <a href=""  class="Button" style="padding: 4px;  margin: 20px; width: 15%; text-align: center; background: linear-gradient(90deg, #0056f7 0%, #ff3ee7 100%);    border: 1px solid #ffffff; margin-left:0px;" >PURCHASE NOW</a>
        </div>
    </div>

</body>
