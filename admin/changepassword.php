
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
    <link href="css/admin_login.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="admin_login_wrap">
    <h1>修改密码</h1>
    <div class="adming_login_border">
        <div class="admin_input">
            <form action="admin/password.php" method="post">
                <ul class="admin_items">
                    <li>
                        <label for="user">密码：</label>
                        <input type="password" name="pwd3" value="" id="user" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <label for="pwd">重复密码：</label>
                        <input type="password" name="pwd2" value="" id="pwd" size="35" class="admin_input_style" />
                    </li>
                    <li>
                        <input type="submit" name="submit" tabindex="3" value="修改" class="btn btn-primary" />
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>
</body>
</html>