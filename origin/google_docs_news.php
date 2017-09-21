<?php

  $spreadsheet_url="https://docs.google.com/spreadsheets/export?id=1o-724iaKiV-tc4_04Tcj6lYa_-vryJ6XnYePWo4Q8JA&exportFormat=csv";

  if(!ini_set('default_socket_timeout',    15)) echo "<!-- unable to change socket timeout -->";

  if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) {
      while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $spreadsheet_data[]=$data;
      }
      fclose($handle);
      // print_r($spreadsheet_data);

      foreach ($spreadsheet_data as $row) {
        foreach ($row as $cell_data) {
          if (strlen($cell_data) > 0) {
            echo $cell_data.'<br/>';  
          }
        }
      }

  }
  else
      die("Problem reading csv");

?>