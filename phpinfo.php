<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PHP Info</title>

    <!-- Bootstrap CSS and Theme -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-dark.css" rel="stylesheet">

  </head>
  <body class="d-flex flex-column h-100">
        
  <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">COMW-282</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" href="/mysqlstatus.php">MySQL Status</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/phpinfo.php">PHP Info</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/phpmyadmin">phpMyAdmin</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

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

    <footer class="footer fixed-bottom mt-auto py-3 bg-light">
      <div class="container">
        <span class="lead">This site was created for educational purposes only.</span>
      </div>
    </footer>

    <!-- Bootstrap Bundled Javascript -->
    <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
