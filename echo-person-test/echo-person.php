   <?php
       header('Content-Type: application/xml');
       $dataPOST = trim(file_get_contents('php://input'));
       print($dataPOST);
       if(empty($dataPOST)){
           $output = "<person><name>kevin</name></person>";
          print($output);
       } else {
           print($xmlData);
      }
  
  ?>

