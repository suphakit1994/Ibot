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
      color: white!important;
    }

 
</style>

<body>
<form>
<div class="container-fluid" style="padding-right:80px ;padding-right:100px ;padding-left:100px ;">
            <div class="col-md-9" style="padding:0px">
            <div class="form-card" style=" padding-top: 10%;">   
                <p>ชื่อ-นามสกุล (Thai)</p> 
                <input type="text" class="form-control" >  
                <p >Parent's name (Eng)</p> 
                <input type="text" class="form-control" >  
                <p > Related to the applicant</p> 
                <select   name="related" id="" class="form-control" style="height: 70%;border-left-width: 0px;border-right-width: 0px;border-bottom-width: 0px;">
                                        <p> <option value="1"> </option></p>
                                        <p> <option value="2">2</option></p>
                                        <p> <option value="3">3</option></p>
                                        <p> <option value="4">4</option></p>
                                        <p> <option value="5">5</option></p>                                           
                                    </select> 
                <p >Phone number</p> 
                <input type="text" class="form-control" style="width: 224px;">  
                <p >E-mail</p> 
                <input type="text" class="form-control" style="width: 224px;">  
                <p >ID Line</p> 
                <input type="text" class="form-control" style="width: 224px;">  
            </div>
                <a  href="index.php?app=faii&action=student_information" type="button" name="next" class="Button" style="border-radius:28px; width: 120px;">Back</a>
                <a  href="index.php?app=faii&action=enroll" type="button" name="next" class="Button" style="border-radius:28px; width: 120px;">Next</a>
            </div>
       
</div>
    
</form>  

</body>