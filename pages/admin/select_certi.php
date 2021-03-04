<head>
  <meta charset="UTF-8">
  <style>
    .flex-head{
      display: flex;
      flex-direction: row;
      justify-content: space-between; 
    }
    .flex-subhead{
      display: flex;
      flex-direction: row;
      padding-top: 2%;
      padding-left: 2%;
    }
    .flex-content{
      margin: 2%;
      display: flex;
      flex-wrap: wrap;
      flex-direction: column;
    }
    .flex-subcontent{
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
      justify-content: flex-start;
    }
  </style>
</head>
<body>
  <div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

    <div class="flex-content">
      <div class="flex-head">
        <h1><b>Certificate</b></h1>
        <div style="display: flex;justify-content: flex-end;align-items: center;">
          <a class="btn btn-primary" type="" data-toggle="modal" data-target="#myModal">+ Add New Type</a>
        </div>
      </div>
      <?php for($typecert = 0; $typecert < count($select_cert); $typecert++){?>
        <div class="flex-subhead">
          <h1>Head: <?php echo $select_cert[$typecert]['name'];?></h1>
          <div style="display: flex;padding-left: 10px;align-items: center;">
            <a style="color: blue;" href="#" type="" data-toggle="modal" data-target="#addimg<?php echo $select_cert[$typecert]['id'];?>">+Add New</a>
          </div>
        </div>
        <div class="flex-subcontent" style="padding-left: 2%;">
          <?php for($cardcertificate = 0; $cardcertificate < count($select_img_cert); $cardcertificate++){?>
            <?php if($select_cert[$typecert]['id']==$select_img_cert[$cardcertificate]['id_cert']){?>
              <div class="card" style="width: 18rem; margin: 15px;padding-bottom: 0px !important;">
                <img class="card-img-top" src="../certificate_image/<?php echo $select_img_cert[$cardcertificate]['name_img'];?>" style="width: 270px;height: 180;" alt="Card image cap">
                <div class="card-body" style="padding: 5px;">
                  <a style="width: 100%;" href="index.php?app=admin&action=editcertificate<?php echo $select_img_cert[$cardcertificate]['id'];?>" class="btn btn-success">SELECT</a>
                </div>
              </div>
            <?php }?>
          <?php }?>
        </div>

        <div class="modal" id="addimg<?php echo $select_cert[$typecert]['id'];?>" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content" >

              <form action="index.php?app=admin&action=uploadcertificate<?php echo $select_cert[$typecert]['id'];?>" method="post" enctype="multipart/form-data" id="test">
                <div class="modal-body" style="margin: 25px 0px 0px 0px;">
                  <h3 style="text-align: center;"><b>Upload image </b></h3>
                  <label for="typecert">Upload File Image</label>

                  <input type="file" name="imagecert" accept="image/*" required >

                  <input id="typecert" type="hidden" name="typeofcert" value="<?php echo $select_cert[$typecert]['name'];?>">
                  <input id="typecert" type="hidden" name="idcert" value="<?php echo $select_cert[$typecert]['id'];?>">
                  <div style="display: flex;flex-direction: row;justify-content: space-around;">
                    <input class="btn btn-success" style="margin: 2%;width: 40%;" type="submit" name="" value="OK">
                    <button class="btn btn-danger" style="margin: 2%;width: 40%;" type="button" data-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </form>

            </div>
          </div>
        </div>
      <?php }?>
    </div>
  </div>
  <div class="modal" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content" >
        <form action="index.php?app=admin&action=uploadcertificate" method="post">
          <div class="modal-body" style="margin: 25px 0px 0px 0px;">
            <h3 style="text-align: center;"><b>Add Type of Certificate </b></h3>
            <label for="typecert">Name Type</label>
            <input id="typecert" type="text" name="typecert">
            <div style="display: flex;flex-direction: row;justify-content: space-around;">
              <input class="btn btn-success" style="margin: 2%;width: 40%;" type="submit" name="" value="OK">
              <button class="btn btn-danger" style="margin: 2%;width: 40%;" type="button" data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>


</body>
<script>
  $(document).ready(function(){
    $("#sidebarCollapse").click(function(event) {
      $(".flex-subcontent").css("justify-content", "space-between");
    });
  });
</script>