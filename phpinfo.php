<?php 
    $title='PHP Info';
    require($_SERVER["DOCUMENT_ROOT"] . '/php/templates/header.php'); 
?>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
      <div class="container" style="padding: 60px 15px 60px;">

      <div class="mt-5 text-truncate">
      
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
    </main>
    
<?php require($_SERVER["DOCUMENT_ROOT"] . '/php/templates/footer.php'); ?>