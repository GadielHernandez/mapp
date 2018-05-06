<?php

function selectView(int $privileges) {
    switch ($privileges) {
      //solo lectura
      case 1:
        $page = 'adminView';
        break;
      //solo edicion
      case 2:
        $page = 'readView';
        break;
      //admin
      case 3:
        $page = 'writeView';
        break;
    }
    return $page;
}

?>
