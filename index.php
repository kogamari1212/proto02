<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>プロトタイプ</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script src="script.js"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <h1>VISION RUNNER</h1>
      <div class="col-sm-12">
        <ul class="tabs">
          <li><a href="#" id="1">ログイン</a></li>
          <li><a href="#" id="2">新規登録</a></li>
        </ul>
      </div>
      <div class="col-sm-12">
        <div class="form row" id="login">
          <div class="col-sm-12 container">
            <div class="input">
              <input class="main-form animated bounceInDown" type="text" name="usrname" placeholder=" メールアドレス"/>
            </div>
            <div class="input">
              <input class="main-form animated bounceInDown" type="password" name="password" placeholder=" パスワード"/>
            </div>
            <div class="input">
              <input class="main-form btn animated bounceInDown" type="button" name="usrname" value = "ログイン"/>
            </div>
            <div class="input">
              <label class="pull-left">
                <input type="checkbox">
              </label>
              <label class="pull-right">
                <a href="#" id="3" class="forget-password">パスワードをお忘れの方はこちら</a>
              </label>
            </div>
          </div>
        </div>
        <div class="form row" id="register" style="display: none;">
          <div class="col-sm-12 container">
            <div class="input">
              <input class="main-form animated bounceInDown" type="text" name="name" placeholder=" NAME"/>
            </div>
            <div class="input">
              <input class="main-form animated bounceInDown" type="text" name="usrname" placeholder=" EMAIL ADDRESS"/>
            </div>
            <div class="input">
              <input class="main-form animated bounceInDown" type="password" name="password" placeholder=" PASSWORD"/>
            </div>
            <div class="input">
            <input class="main-form btn animated bounceInDown" type="button" name="usrname" value = "SIGN UP"/>
            </div>
            
          </div>
        </div>
          <div class="form row" id="forgetP" style="display: none;">
          <div class="col-sm-12 container">
            <div class="input">
              <p>To reset your password enter your email we'll send you a link to reset your password.</p>
            </div>
            <div class="input">
              <input class="main-form animated bounceInDown" type="text" name="usrname" placeholder=" EMAIL ADDRESS"/>
            </div>
            <div class="input">
              <input class="main-form btn reset animated bounceInDown" type="button" name="" value="RESET PASSWORD"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>