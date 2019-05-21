
   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SignUp</title>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" type="text/css" href="sty.css">
    <style>
        body {
            background: url(books.jpg);
            filter: alpha(opacity=10);
            background-color: #7d5fff;
            background-image: url(books.jpg);
            background-blend-mode: lighten;
            height: 600px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
  <div>

    <svg height="130" width="500">
  <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%"
      style="stop-color:rgb(7,13,96);stop-opacity:1" />
      <stop offset="100%"
      style="stop-color:rgb(40,149,211);stop-opacity:1" />
    </linearGradient>
  </defs>
  <ellipse cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
  <text fill="orange" font-size="45" font-family="Verdana" 
  x="50" y="86">BookManiac!!</text>
</svg>
<a href="1.html" style="float:right; padding-top: 60px; padding-right: 40px; color: black;"><b><u>Back home</u></b></a>

</div>
    
       
    <div class="login-wrap">
        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
            <div class="login-form">
                <form class="sign-in-htm" action="config.php" method="POST">
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="uname"  name="uname" type="text" class="input"  required="required" method="POST">
                    </div>
                    <div class="group">
                        <label for="pass" class="label"  >Password</label>
                        <input id="pass" name="pass" type="password"  class="input" required="required" data-type="password" method="POST" >
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" value="SIGN-IN" id="butt" name="btnsubmit1"method="POST">
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Forgot Password?</a>
                    </div>
                </form>
                <form class="sign-up-htm" method="POST" action="config.php" >
                    <div class="group">
                        <label for="user" class="label">Username</label>
                        <input id="username2" name="username" type="text" class="input"  required="required" method="POST" >
                    </div>
                    
                    <div class="group">
                        <label for="pass" class="label">Password</label>
                        <input id="password2" name="password" type="password" onkeyup="sync()" class="input" required="required" data-type="password" method="POST" >
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Confirm Password</label>
                        <input id="pass" type="password" name="password1" class="input" required="true" data-type="password" method="POST" >
                    </div>
                    <div class="group">
                     <a href="category.php" onclick="a()"><button type="submit" id="butt1" name="btnsubmit" method="POST">SIGN-UP</button></a>

                    </div>
                    <div class="hr"></div>
                    
        </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
  {

function sync()
{
  var n1 = document.getElementById('password2');
  var n2 = document.getElementById('pass');
  n2.value = n1.value;
}
s
  }
  
</script>
</body>
</html>