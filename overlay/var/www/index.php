<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta http-equiv="Content-Script-Type" content="text/javascript">

        <title>TurnKey ZoneMinder</title>
        
        <link rel="stylesheet" href="../css/ui.tabs.css" type="text/css" media="print, projection, screen"/>
        <link rel="stylesheet" href="../css/base.css" type="text/css"/>

        <script src="/js/jquery-1.2.6.js" type="text/javascript"></script>
        <script src="/js/ui.core.js" type="text/javascript"></script>
        <script src="/js/ui.tabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('#container-1 > ul').tabs({ fx: { opacity: 'toggle'} });
            });
        </script>
    </head>

    <body>
        <h1>TurnKey ZoneMinder</h1>
        
        <div id="container-1">
            <ul>
                <li><a href="#cp"><span>Control Panel</span></a></li>
            </ul>

            <div id="cp">
                <div class="fragment-content">
                    <div>
                        <a href="https://<?php print
                        $_SERVER['HTTP_HOST']; ?>/zm"><img
                        src="img/logo.png"/>ZoneMinder</a>
                    </div>
	            <div>
                        <a href="https://<?php print
                        $_SERVER['HTTP_HOST']; ?>:12320"><img
                        src="images/shell.png"/>Web Shell</a>
                    </div>
                    <div>
                        <a href="https://<?php print
                        $_SERVER['HTTP_HOST']; ?>:12321"><img
                        src="images/webmin.png"/>Webmin</a>
                    </div>
                    <div></div>
                    <div></div>
                <h2>Resources and references</h2>
                    <ul>
                        <li>
                          <a href="https://zoneminder.com">
			  ZoneMinder</a>
                        </li>
                        <li><a
                        href="https://github.com/turnkeylinux-apps/zoneminder">
                        TurnKey Zoneminder Repository</a>
			</li>
                    </ul>
		</div>
            </div>

        </div>
    </body>
</html>
