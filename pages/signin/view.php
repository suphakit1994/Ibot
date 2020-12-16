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

    /* On mouse-over, add a grey background color */
    input[type=text] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: none;
      border-bottom: 2px solid #F1ECEC;
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row" style="text-align: center;">
        <h1 style="font-weight: bold; margin-top: 9%; font-size: 35px;">Sign in</h1>
        <form  name="login" method="POST" action="ibot/checklogin.php">
          <input type="text" class="w3-input fas" placeholder="&#xf406; username" aria-label="username" aria-describedby="basic-addon2" name="username"  style="margin-top: 5%; width: 35%; margin-left: 33%;"/>  
          <input type="password" class="w3-input material-icons" placeholder="&#xe0da; password" aria-label="password" aria-describedby="basic-addon2" name="password"  style="margin-top: 4%; width: 35%; margin-left: 33%; "/>
        </div>
        <div class="row" style="margin-top: 2%; margin-left:33%;">
          <label><input type="checkbox" />    Stay signed in</label>
        </div>
        <div>
         <input class="Button" name="btnlogin" type="submit" style="width: 12%; padding-top: 0.7%; padding-bottom: 0.7%; margin-left: 44%;">
       </div>
     </form>
   </body>
   </html> 