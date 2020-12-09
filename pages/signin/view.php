<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    .container:hover input ~ .checkmark {
      background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container input:checked ~ .checkmark {
      background-color: #2196F3;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    /* Show the checkmark when checked */
    .container input:checked ~ .checkmark:after {
      display: block;
    }

    /* Style the checkmark/indicator */
    .container .checkmark:after {
      left: 9px;
      top: 5px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }
    input[type=text] {
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
    <div class="row" style="text-align: center;">
      <h1 style="font-weight: bold;">Signin</h1>
      <input type="username" class="form-control" placeholder="username" aria-label="username" aria-describedby="basic-addon2" name="username"  style="margin-top: 1%;"/>  
      <input type="text" class="form-control" placeholder="password" aria-label="password" aria-describedby="basic-addon2" name="password"  style="margin-top: 1%;"/>  
      <label class="container">Stay signed in
        <input type="checkbox" checked="checked">
        <span class="checkmark"></span>
      </label>
      <div class="Button">Sign in</div>
    </div>
  </div>
</body>
</html>