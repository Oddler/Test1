<?

  require_once('core.php');
  
  $o = new soCore1();
  echo $o->go();
  
  if($o->doTest())
  {
    echo 'OK<br />';
  }
  else
  {
    echo 'NO<br />';
    echo 'NO<br />';
  }
  
  
  