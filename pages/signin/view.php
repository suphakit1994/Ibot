<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">

    /* Hide the browser's default checkbox */
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: #eee;
    }

    input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid #F1ECEC;
    }

    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid #F1ECEC;
    }

  </style>
</head>


<body>
  <div class="container">

    <div class="row" style=" padding-top: 190px;">

      <h1 style="text-align: center; ">Sign in</h1>
      <form  name="login" method="POST" action="signin/checklogin.php">
        <input type="text" class="w3-input fas fa-user" placeholder="&#xf007; username" aria-hidden="true" aria-describedby="basic-addon2" name="username" style="width: 50%; margin-left: 26%; margin-top: 3%" >  
        <input type="password" id="myInput" class="w3-input fa fa-key" placeholder="&#xf084; password" a
        ria-label="password" aria-describedby="basic-addon2" name="password" style=" width: 50%; margin-left: 26%; margin-top: 3%" >
      </div>
      <div>
        <input class="Button" style="padding: 0.5% 3%; margin-top: 3%; margin-left:45%;" name="btnlogin" type="submit">
      </div>
    </form>

  </div>
</body>
</html>
<script>
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>