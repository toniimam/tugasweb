<script type="text/javascript" src="js/jquery-1.4.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".text").val('');
	$("#username").focus();
});
function validasi(form){
  if (form.username.value == ""){
    alert("Anda belum mengisikan Username.");
    form.username.focus();
    return (false);
  }
     
  if (form.password.value == ""){
    alert("Anda belum mengisikan Password.");zz
    form.password.focus();
    return (false);
  }
  return (true);
}
</script>
<head>
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.css" rel="stylesheet">
  <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
<title>.::Halaman Administrator::.</title>
</head>
<body>
  <div class="container">
      <form name="login" class="form-signin" method="post" action="cek_login.php" onSubmit="return validasi(this)">
      <h2 class="form-signin-heading">Please Sign in</h2>
      <input type="text" name="username" class="input-block-level" placeholder="Username" required>
      <input type="password" name="password" class="input-block-level" placeholder="Password" required>
      <button class="btn btn-large btn-primary" name="submit" value="LOGIN">Sign in</button>
      </form>
      
       <hr>
      <footer>
        <p align="center">&copy; 2015</p>
      </footer>
     </div>
</div>

</body>
</html>
