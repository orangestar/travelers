<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Travelers</title>
	<!-- stylesheets -->
  	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  	<link rel="stylesheet" href="css/slide.css" type="text/css" media="screen" />
    <!-- PNG FIX for IE6 -->
  	<!-- http://24ways.org/2007/supersleight-transparent-png-in-ie6 -->
	<!--[if lte IE 6]>
		<script type="text/javascript" src="js/pngfix/supersleight-min.js"></script>
	<![endif]-->
    <!-- jQuery - the core -->
	<script src="js/jquery.js" type="text/javascript"></script>
	<!-- Sliding effect -->
	<script src="js/slide.js" type="text/javascript"></script>
</head>

<body>
<!-- Panel -->
<div id="toppanel">
	<div id="panel">
		<div class="content clearfix">
			<div class="left">
				<h1>欢迎来到 Travelers！</h1>
				<h2>Sliding login panel Demo with jQuery</h2>		
				<p class="grey">You can put anything you want in this sliding panel: videos, audio, images, forms... The only limit is your imagination!</p>
				<h2>Download</h2>
				<p class="grey">To download this script go back to <a href="http://web-kreation.com/index.php/tutorials/nice-clean-sliding-login-panel-built-with-jquery" title="Download">article &raquo;</a></p>
			</div>
			<div class="left">
				<!-- Login Form -->
				<form class="clearfix" action="#" method="post">
					<h1>会员登录</h1>
					<label class="grey" for="log">用户名:</label>
					<input class="field" type="text" name="log" id="log" value="" size="23" />
					<label class="grey" for="pwd">密码:</label>
					<input class="field" type="password" name="pwd" id="pwd" size="23" />
	            	<label><input name="rememberme" id="rememberme" type="checkbox" checked="checked" value="forever" /> &nbsp;记住我</label>
        			<div class="clear"></div>
					<input type="submit" name="submit" value="登录" class="bt_login" />
					<a class="lost-pwd" href="#">忘记密码？</a>
				</form>
			</div>
			<div class="left right">			
				<!-- Register Form -->
				<form action="#" method="post">
					<h1>还不是会员？马上注册！</h1>				
					<label class="grey" for="signup">用户名:</label>
					<input class="field" type="text" name="signup" id="signup" value="" size="23" />
					<label class="grey" for="email">Email:</label>
					<input class="field" type="email" name="email" id="email" size="23" />
					<label>我们将向此邮箱发送包含随机密码的邮件。请认真填写。</label>
					<input type="submit" name="submit" value="注册" class="bt_register" />
				</form>
			</div>
		</div>
	</div> <!-- /login -->	

	<!-- The tab on top -->	
	<div class="tab">
		<ul class="login">
			<li class="left">&nbsp;</li>
			<li>用户您好！</li>
			<li class="sep">|</li>
			<li id="toggle">
				<a id="open" class="open" href="#">登录 | 注册</a>
				<a id="close" style="display: none;" class="close" href="#">关闭面板</a>			
			</li>
			<li class="right">&nbsp;</li>
		</ul> 
	</div> <!-- / top -->
</div> <!--panel -->

    <div id="container">
		<div id="content" style="padding-top:50px;">
			<h1>Web-Kreation Demos</h1>
			<h2>Sliding login panel with jQuery - Demo</h2>	
			<p>This script is based on my previous script "<a href="http://web-kreation.com/demos/login_form_mootools_1.2/" title="">Show/Hide Login Panel with Mootools 1.2</a>" but now works with jQuery 1.3.2 instead of Mootools 1.2.</p>
			
			<p class="highlight">Click "<strong>Log In | Register</strong>" on top to open the demo. Download this script <a href="http://web-kreation.com/index.php/tutorials/nice-clean-sliding-login-panel-built-with-jquery" title="Download">here &raquo;</a></p>
				
			<p class="highlight">Please note the Login and Register forms in this demo <strong>will not work "out of the box"</strong> without a user login system pre-installed on your site (e.g. PHP/MySQL user login system)! However, most of the CMS such as Joomla, Drupal, Wordpress, etc have a login system integrated in their platform. So if you are using one, read their documentation to see how you could implement this script into your CMS.</p>
			
			<p>This page is valid <a href="http://validator.w3.org/check?uri=referer">(X)HTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" target="blank" rel="nofollow" title="Valid HTML">CSS</a>.</p>		
			
			<h2>What's new in this version?</h2>
			<ul>
				<li>Panel has been redesigned to be "slicker".</li>
				<li>Panel overlaps content instead of "pushing" it.</li>
				<li>Images are transparent... and work in IE6! (Thanks to <b>24Ways</b> for their <a href="http://24ways.org/2007/supersleight-transparent-png-in-ie6" target="blank" rel="nofollow" title="Transparent PNGs in Internet Explorer 6">IE PNG Fix</a>.) This means, you can change the background color of the body as you wish or even set a background image.</li>
				<li>Login button that slides the panel down changes from "Log In | Register" to "Close Panel" on click and I have added some nice rollover images:</li>
			</ul>
			
			<h2>Known Bugs</h2>
			<ul>
				<li>Rollover effect for the login button doesn't work in IE6 because of <b>24Ways'</b> script. Knowing alpha transparency works perfectly in this browser I think we can disregard that minor bug. </li>
			</ul>
				
			
			<h2>And now some Lorem Ipsum to fill the page</h2>
			
			<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent scelerisque commodo massa. Ut volutpat. Maecenas luctus augue quis velit. Nulla tincidunt pede in erat. Vivamus tellus. Maecenas lacinia, arcu sed scelerisque posuere, dui massa gravida enim, a vehicula erat quam et risus. Etiam scelerisque. Vivamus et ipsum. Nulla facilisi. Nullam elementum fringilla enim. Nulla facilisi. Praesent sem arcu, porttitor ac, cursus sed, fringilla vitae, nisi. Nam sollicitudin eros id ante. Nunc nisi augue, lobortis a, rhoncus quis, gravida nec, tortor. Sed sollicitudin. Nulla facilisi.</p>
			
			<p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent scelerisque commodo massa. Ut volutpat. Maecenas luctus augue quis velit. Nulla tincidunt pede in erat. Vivamus tellus. Maecenas lacinia, arcu sed scelerisque posuere, dui massa gravida enim, a vehicula erat quam et risus. Etiam scelerisque. Vivamus et ipsum. Nulla facilisi. Nullam elementum fringilla enim. Nulla facilisi. Praesent sem arcu, porttitor ac, cursus sed, fringilla vitae, nisi. Nam sollicitudin eros id ante. Nunc nisi augue, lobortis a, rhoncus quis, gravida nec, tortor. Sed sollicitudin. Nulla facilisi.</p>
		</div><!-- / content -->		
	</div><!-- / container -->
</body>
</html>
