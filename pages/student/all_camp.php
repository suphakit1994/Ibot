<style>
    .h-text {
        text-align: center;
        margin-top: 5%;
        margin-bottom: 2%;
    }

    h2 {
        padding: 2% 0% 1% 0%;
    }
    div{}
    .p-text {
        text-align: left;
        margin: auto;
        padding-left: 10%;
    }

    .des-text {
        text-align: center;
        color: #DEDEDE;
        margin-bottom: 5%;
    }

    .download {
        text-align: center;
        margin: auto;
        padding: auto;

    }

    /* set card */
    .drop-box {
        text-align: center;
    }

    .center-box {
        margin: auto;
    }

    .box-space {
        margin: 1% 0% 1% 0%;

    }


    h2 {
        padding: 2% 0% 1% 0%;
    }
    .p-text {
        text-align: left;
        margin: auto;
        padding-left: 10%;
    }
    .des-text {
        text-align: center;
        color: #DEDEDE;
        margin-bottom: 5%;
    }
    .download {
        text-align: center;
        margin: auto;
        padding: auto;
    }
    /* set card */
    .drop-box {
        text-align: center;
    }
    .center-box {
        margin: auto;
    }
    .box-space {
        margin: 1% 0% 1% 0%;

    }
    /* set dropdown */
    .scal-box {
        width: 42%;
        height: 50%;
        text-align: left;
        color: #DEDEDE;
        background-color: white;
        padding: 1%;
    }

    .dropdown-text {
        padding: 3%;
        width: 480px;
        margin: auto;
        color: #DEDEDE;
    }

    /* Button */
    .btn-position {
        text-align: center;
        margin: auto;
    }
    .card{
        border-radius: 5px;
        border-style: solid;
        border-color: #DEDEDE;
        border-width: 1px;
        box-shadow:unset !important;
        width: ;
        padding-bottom: unset !important;
    }
    button:disabled,
    button[disabled]{
        background-color: #DEDEDE !important;
        color: #FFFFFF !important;
    }
</style>
<body>
    <div class="container">
        <div class="col-md-12">
            <h1 class="h-text" style="text-align: center;">IBOT CAMP</h1>
        </div>
        <div>
            <p class="des-text">Loerm ipsum dolor sit amet.
                consectetuer adipiscing edit. sed diam<br>
                noummy nibh euismod tinciduct urt laoreet dolore mayna.
            </p>
        </div>
        <div>
            <h2>Camp</h2>
        </div>
        <div class="row">  

            <?php for($i = 0; $i< $arr; $i++){ ?>
                <form method="post" action="index.php?app=student&action=payment_camp">
                    <div class="card" style="padding-bottom: 0px; margin: 1% 0% 1% 0%;">
                        <div class="card-body">
                            <div class="row" style="display:flex; align-items: center; margin-bottom: 0 !important; ">
                                <div class="col-md-4">
                                    <p style="padding-left:10%; margin: auto; padding-top: 5%; padding-bottom: 5%;">
                                        <?php echo $cam[$i]['camp_program']; ?>(<?php echo $cam[$i]['camp_Age']; ?>)
                                    </p>
                                </div>
                                <div class="col-md-5" style="margin: auto !important;">
                                    <p style="text-align:center; margin: auto; ">
                                        <b>
                                            <a href="../camp_pdf/<?php echo $cam[$i]['camp_file']; ?>" download>
                                            Download rules </a>
                                        </b>
                                        <?php echo $i; ?>
                                    </p>
                                </div>
                                <div class="col-md-3 btn-position center-box">
                                    <button type="submit"  name="<?php echo $i ?>" class="Button" style="width:55% ;border-radius:28px;">Enroll</button>
                                </div>
                            </div>
                            <input type="hidden" name="camp_id" value="<?php echo $cam[$i]['camp_id']; ?>">
                        </div>
                    </div>
                </form>  
            <?php } ?>
        </div>   
    </div>
</body>

