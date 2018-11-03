<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>结果页</title>
	<!--SyntaxHighlighter的基本脚本-->
	<script type="text/javascript" src="src/shCore.js"></script>

	<script type="text/javascript" src="scripts/shBrushCSharp.js"></script>
	<script type="text/javascript" src="scripts/shCore.js"></script>
	<script type="text/javascript" src="scripts/shBrushJScript.js"></script>
	<script type="text/javascript" src="scripts/shBrushPhp.js"></script>
	<script type="text/javascript" src="scripts/shBrushJava.js"></script>
	<script type="text/javascript" src="scripts/shBrushCSharp.js"></script>
	<script type="text/javascript" src="scripts/shBrushCpp.js"></script>
	<script type="text/javascript" src="scripts/shBrushAS3.js"></script>
	<script type="text/javascript" src="scripts/shBrushPython.js"></script>
	<script type="text/javascript" src="scripts/shBrushVb.js"></script>
	<script type="text/javascript" src="scripts/shBrushSql.js"></script>
	<script type="text/javascript" src="scripts/shBrushXml.js"></script>
	<script type="text/javascript" src="scripts/shBrushPlain.js"></script>
	
	<link type="text/css" rel="stylesheet" href="styles/shCoreDefault.css"/><!-- 可更换主题 -->
	<script type="text/javascript">SyntaxHighlighter.all();</script>
	<script type="text/javascript">SyntaxHighlighter.defaults['toolbar'] = false;</script>
</head>

<body>

    <p><b>标题：</b><?php echo $_POST["title"]?></p>
    <p><b>内容：</b><?php echo $_POST["content"]?></p>
    <p><a href="demo.html">返回</a></p>
</body>
</html>
<?php
var_dump($_POST["title"]);
?>