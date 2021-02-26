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
    .btn {
        color: #ffffff;
        background-color: #dedede ;
    }         
    .btn:hover {
        border-radius:28px;
        border:1px solid #18ab29;
        display:inline-block;
        cursor:pointer;
        color:#ffffff !important;
        font-size:14;
        text-decoration:none;
        text-align: center; 
        background: linear-gradient(90deg, #0050ef 0%, #ff5894 100%);    
        border: 1px solid #ffffff;
    }  
</style>
<body>
    <form method="post" action="index.php?app=student&action=payment_compeitition">
        <div class="container">
            <div class="col-md-12">
                <h1 class="h-text" style="text-align: center;">IBOT COMPEITITIONS</h1>
            </div>
            <div>
                <p class="des-text">Loerm ipsum dolor sit amet.
                    consectetuer adipiscing edit. sed diam<br>
                    noummy nibh euismod tinciduct urt laoreet dolore mayna.
                </p>
            </div>

            
            <div>
                <?php for ($i=0;$i<count($compitype);$i++ ){?>
                    <h2><?php echo $compitype[$i]['compi_name'] ?></h2>
                    
                    <?php for($j=0;$j<count($compi);$j++ ){?>
                     <form method="post" action="index.php?app=student&action=payment_compeitition">
                        <?php if($compi[$j]['com_type']==$compitype[$i]['compi_name']){?>
                            <div class="card" style="padding-bottom: 0px; margin: 1% 0% 1% 0%;">
                                <div class="card-body">
                                    <div class="row" style="display:flex; align-items: center; margin-bottom: 0 !important; ">
                                        <div class="col-md-4">

                                            <p style="padding-left:10%; margin: auto; padding-top: 5%; padding-bottom: 5%;">
                                                <?php echo $compi[$j]['com_program']; ?>
                                                (<?php echo $compi[$j]['com_age']; ?>)
                                            </p>
                                            
                                        </div>
                                        <div class="col-md-5" style="margin: auto !important;">
                                            <p style="text-align:center; margin: auto; ">
                                                <b>
                                                    <a href="../compitition_pdf/<?php echo $compi[$j]['com_file']; ?>" download>
                                                    Download rules </a>
                                                </b>
                                            </p>
                                        </div>

                                        <div class="col-md-3 btn-position center-box">
                                            <button type="submit"  name="<?php echo $j ?>" class="btn btn:hover" style="width:55% ;border-radius:28px;">Enroll</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="com_id" value="<?php echo $compi[$j]['com_id'];  ?>">
                                </div>
                            </div>
                        <?php }?> 
                    </form>
                <?php }?>
                
            <?php } ?>
        </div>
    </div>

</body>