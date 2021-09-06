<?php 
    $title='MySQL Status';
    require($_SERVER["DOCUMENT_ROOT"] . '/php/templates/header.php'); 
?>

<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container" style="padding: 60px 15px 60px;">
    <h1 class="mt-5">MySQL Status:</h1>
    <p>
      <?php
        
        $database = "sys";
        require($_SERVER["DOCUMENT_ROOT"] . '/php/scripts/dbcon.php');

        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          exit;
        }

        echo('<p>' . mysqli_stat($con) . '</p>');
        echo('<p>Server Version: ' . mysqli_get_server_info($con) . '</p>'); 
        echo('<p>Client library version: ' . mysqli_get_client_info($con) . '</p>'); 
        mysqli_close($con);
      ?>
    </p>
  </div>
</main>

<?php require($_SERVER["DOCUMENT_ROOT"] . '/php/templates/footer.php'); ?>