<html>
    <header>
        <title><?php print $config['title']; ?></title>
        <style>
            body{
                padding:0;
                margin:0;
                font-family: Arial, Helvetica, sans-serif
            }
            #container
            {
                margin: 0 30px;
                background: #fff;
            }

            #header
            {
                background: black;

            }

            #header h1 { margin: 0; }


            #content
            {
                clear: left;
                padding: 20px;
            }

            #content h1
            {
                color: #000;
                font-size: 160%;
                margin: 0 0 .5em;
            }

            #footer
            {
                background: black;
                color: white;
                text-align: right;
                padding: 20px;
              
            }
        </style>
    </header>
    <body>
        <div id="header">
            <a href="http://purencool.com.au">
                 <img src="logo.png" alt="logo">
            </a>
        </div>
        <div id="content">