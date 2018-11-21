<?php
    # replace with your target MAC address
    $mac = B0:52:16:C3:18:A7';

    exec("wakeonlan $mac");
?>