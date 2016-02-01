<?php
$this_file = file("this.txt"); 
$that_file = file("that.txt"); 
$another_file = file("another.txt"); 
$_this = $this_file[rand(0, count($this_file) - 1)];
$_that = $that_file[rand(0, count($that_file) - 1)];
$_another = $another_file[rand(0, count($another_file) - 1)];
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">

        <title>This 4 That</title>

    </head>
    <body>
        <div id="outer"><div id="inner">
            <div class="container">
            <h1>You should make...</h1>
                <div id="content">
                <p style="padding: 80px;"><?php echo $_this ?> for <?php echo $_that ?></p>
                </div>
                <a id="bottom" href="/this4that"><?php echo $_another ?></a>
            </div>
        </div></div>
    </body>
</html>
