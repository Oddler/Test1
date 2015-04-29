<?

  require_once('core.php');
  

  echo $o->go();
  
  if($o->doTest())
  {
    echo 'OK<br />';
  }
  else
  {
    echo 'NO<br />';
  }
  
  
  