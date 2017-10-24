<?php

require_once 'kuis.php';

  $biodata1 = new biodata('Ica Cahyani:)','Bandung','XI RPL1','Menikah')	  ;
  $biodata2 = new biodata('Candra Herdiansyah','Papua','XI RPL1','Jones') ;
  $biodata3 = new biodata('Mulki','Batam','XI RPL1','Duda') 			  ;
  $biodata4 = new biodata('Pirman','Medan','XI RPL1','Playboy') 		  ;
  $biodata5 = new biodata('Agung','Jakarta','XI RPL1','Matre') 			  ;

  $biodata1 ->set_nama('Ica Cahyani ');
  echo 'namanya .......:'.$biodata1->get_nama().''.'<br>';
  echo 'tempat lahir...:'.$biodata1->get_tempatlahir().''.'<br>';
  echo 'kelasnya .......:'.$biodata1->get_kelas().''.'<br>';
  echo 'statusnya ......:'.$biodata1->get_status().''.'<br><br><br>';

  
  echo 'namanya .......:'.$biodata2->get_nama().''.'<br>';
  echo 'tempat lahir...:'.$biodata2->get_tempatlahir().''.'<br>';
  echo 'kelasnya .......:'.$biodata2->get_kelas().''.'<br>';
  echo 'statusnya ......:'.$biodata2->get_status().''.'<br><br><br>';

  
  echo 'namanya .......:'.$biodata3->get_nama().''.'<br>';
  echo 'tempat lahir...:'.$biodata3->get_tempatlahir().''.'<br>';
  echo 'kelasnya .......:'.$biodata3->get_kelas().''.'<br>';
  echo 'statusnya ......:'.$biodata3->get_status().''.'<br><br><br>';

  
  echo 'namanya .......:'.$biodata4->get_nama().''.'<br>';
  echo 'tempat lahir...:'.$biodata4->get_tempatlahir().''.'<br>';
  echo 'kelasnya .......:'.$biodata4->get_kelas().''.'<br>';
  echo 'statusnya ......:'.$biodata4->get_status().''.'<br><br><br>';

  
  echo 'namanya .......:'.$biodata5->get_nama().''.'<br>';
  echo 'tempat lahir...:'.$biodata5->get_tempatlahir().''.'<br>';
  echo 'kelasnya .......:'.$biodata5->get_kelas().''.'<br>';
  echo 'statusnya ......:'.$biodata5->get_status().'';
?>
