
<style type="text/css">
@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);

html body {
	margin-top: 50px !important;
}

#factual-proxy-header {
	position: fixed;
	top:0;
	left:0;
	width: 100%;
	
	margin:0;
	
	z-index: 2100000000;
	-moz-user-select: none; 
	-khtml-user-select: none; 
	-webkit-user-select: none; 
	-o-user-select: none; 
	
	background: #f1f2f2;
	color: #404041;
	font-weight: 400;
	font-family: 'Raleway', Arial, sans-serif;

	border-bottom: 1px solid rgb(35, 37, 41);
	
	height:49px;
	line-height:49px;

	display: flex;
  flex: 1;
}

#factual-proxy-facts {
	flex: 0 0 50px;
}

#factual-proxy-urlbar {
	flex: 1;
}

#factual-proxy-urlbar-form {
	display: flex;
}

#factual-proxy-header input[name=url] {
	height: 40px;
	font-family: 'Raleway', Arial, sans-serif;
	margin: 5px 10px 0 20px;
	padding: 0;
	border: none;
	border-bottom: 2px solid rgba(0,0,0,0.2);
	background-color: transparent;
	color: #2F302F;
	text-overflow: ellipsis;
	font-weight: bold;
	font-size: 14px;
	border-radius: 0;
	flex-grow: 1;
}

#factual-proxy-header input[type=submit] {
	font-family: 'Raleway', Arial, sans-serif;
	padding: 5px 10px;
	border: 2px solid #232529;
	border-radius: 40px;
	font-weight: 700;
	font-size: 16px;
	color: rgba(0,0,0,0.4);
	background: none;
	margin: 6px 0 0 20px;
	line-height: 22px;
}

#factual-proxy-header input[type=submit]:hover {
	background: #232529;
	color: #fff;
}

#factual-proxy-logo {
   position:relative;
}

#factual-proxy-logo img {
	height: 36px !important;
	margin-left: 10px;
}

#factual-proxy-logo[data-badge]:after {
   content: attr(data-badge);
   position: absolute;
   top: -5px;
   right: -10px;
   font-size: 11px;
   background: #3E3E3F;
   color: #fff;
   width: 18px;
	 height: 18px;
   text-align: center;
   line-height: 18px;
   border-radius: 50%;
   box-shadow: 0 0 1px #333;
}
</style>

<div id="factual-proxy-header">
	<div id="factual-proxy-facts">
		<a id="factual-proxy-logo" href="index.php">
			<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACYAAAAmCAYAAACoPemuAAAAAXNSR0IArs4c6QAAAAlwSFlzAAALEwAACxMBAJqcGAAABCRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDUuNC4wIj4KICAgPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICAgICAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgICAgICAgICAgeG1sbnM6dGlmZj0iaHR0cDovL25zLmFkb2JlLmNvbS90aWZmLzEuMC8iCiAgICAgICAgICAgIHhtbG5zOmV4aWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vZXhpZi8xLjAvIgogICAgICAgICAgICB4bWxuczpkYz0iaHR0cDovL3B1cmwub3JnL2RjL2VsZW1lbnRzLzEuMS8iCiAgICAgICAgICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyI+CiAgICAgICAgIDx0aWZmOlJlc29sdXRpb25Vbml0PjI8L3RpZmY6UmVzb2x1dGlvblVuaXQ+CiAgICAgICAgIDx0aWZmOkNvbXByZXNzaW9uPjU8L3RpZmY6Q29tcHJlc3Npb24+CiAgICAgICAgIDx0aWZmOlhSZXNvbHV0aW9uPjcyPC90aWZmOlhSZXNvbHV0aW9uPgogICAgICAgICA8dGlmZjpPcmllbnRhdGlvbj4xPC90aWZmOk9yaWVudGF0aW9uPgogICAgICAgICA8dGlmZjpZUmVzb2x1dGlvbj43MjwvdGlmZjpZUmVzb2x1dGlvbj4KICAgICAgICAgPGV4aWY6UGl4ZWxYRGltZW5zaW9uPjM4PC9leGlmOlBpeGVsWERpbWVuc2lvbj4KICAgICAgICAgPGV4aWY6Q29sb3JTcGFjZT4xPC9leGlmOkNvbG9yU3BhY2U+CiAgICAgICAgIDxleGlmOlBpeGVsWURpbWVuc2lvbj4zODwvZXhpZjpQaXhlbFlEaW1lbnNpb24+CiAgICAgICAg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" />
		</a>
	</div>

	<div id="factual-proxy-urlbar">	
		<form method="post" action="index.php" target="_top">
			<div id="factual-proxy-urlbar-form">
				<input type="text" name="url" value="<?php echo $url; ?>" autocomplete="off">
				<input type="submit" value="Verifică">
				<input type="hidden" name="form" value="1">
			</div>
		</form>		
	</div>
	
</div>