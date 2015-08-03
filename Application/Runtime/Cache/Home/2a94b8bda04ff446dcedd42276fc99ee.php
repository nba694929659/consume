<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!--
	Eventually by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title> consume record</title>
    
<meta charset="UTF-8">
<script src="/thinkphp_3.2.3/Public/js/jquery-2.1.4.min.js"></script>
<script src = "/thinkphp_3.2.3/Public/bootstrap/js/bootstrap.min.js"></script>
<link href =  "/thinkphp_3.2.3/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>



    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!--[if lte IE 8]><script src="/thinkphp_3.2.3/Public/assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="/thinkphp_3.2.3/Public/assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="/thinkphp_3.2.3/Public/assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="/thinkphp_3.2.3/Public/assets/css/ie9.css" /><![endif]-->
</head>
<body>
<script>
    $( document ).ready(function() {
        console.log( "ready!" );
    });
</script>
<!-- Header -->
<header id="header">
    <h1>Welcome</h1>
    <p>加入我们，分析你的钱都花费在哪些方面<br />
         浏览好友们的消费动向<a href="#">网站首页</a>.</p>
</header>

<!-- Signup Form -->
<form id="signup-form" method="post" action="#">
   <!-- <input type="email" name="email" id="email" placeholder="Email Address" />-->
    <a href="<?php echo U('User/register');?>" class="btn btn-success" style="width: 120px;" id="regster">注册</a>
    <a href="<?php echo U('User/login_in');?>" class="btn btn-warning" style="width: 60px" id="login"/>登录</a>
<!--    <input type="submit" value="登录" />

    <input type="submit" value="注册用户" />-->
</form>

<!-- Footer -->
<footer id="footer">
    <ul class="icons">
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
        <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
    </ul>
    <ul class="copyright">

    </ul>
</footer>

<!-- Scripts -->
<!--[if lte IE 8]><script src="/thinkphp_3.2.3/Public/assets/js/ie/respond.min.js"></script><![endif]-->
<script src="/thinkphp_3.2.3/Public/assets/js/main.js"></script>

</body>
</html>

<!--    <h1>this is index page</h1>
<a href="<?php echo U('User/register');?>" class="btn btn-default">注册</a>
<a href="<?php echo U('User/login_in');?>" class="btn btn-warning"/>登录</a>-->