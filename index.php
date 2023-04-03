<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/index.css" />
    <title>登录界面</title>
  </head>

  <body>
    <div class="box">
      <div class="left"></div>
      <div class="right">
        <h4>登 录</h4>
        <form action="index.php" method="post">
          <input class="acc" type="text" name="username" placeholder="用户名" />
          <input class="acc" type="password" name="passwd" placeholder="请输入密码" />
          <input class="submit" type="submit" value="登录" />
        </form>
        <div class="fn">
          <a href="javascript:;">注册账号</a>
          <a href="javascript:;">找回密码</a>
          <a href="javascript:;">你好</a>
          <a href="javascript:;">找回密码</a>
        </div>
      </div>
    </div>
  </body>
</html>
