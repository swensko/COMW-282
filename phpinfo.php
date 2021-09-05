
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="mysqlstatus.php">MySQL Status</a>
  <a href="phpinfo.php">PHP Info</a>
  <a href="/phpmyadmin">phpMyAdmin</a>
</div>

<div class="main">
    <div>
    
    <?php

        ob_start () ;
        phpinfo () ;
        $pinfo = ob_get_contents () ;
        ob_end_clean () ;

        // the name attribute "module_Zend Optimizer" of an anker-tag is not xhtml valide, so replace it with "module_Zend_Optimizer"
        echo ( str_replace ( "module_Zend Optimizer", "module_Zend_Optimizer", preg_replace ( '%^.*<body>(.*)</body>.*$%ms', '$1', $pinfo ) ) ) ;

    ?>

    </div>
</div>

</body>
</html>
