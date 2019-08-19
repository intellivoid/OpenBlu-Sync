<?php

    use OpenBlu\OpenBlu;

    set_time_limit(0);
    include_once(__DIR__ . DIRECTORY_SEPARATOR . 'OpenBlu' . DIRECTORY_SEPARATOR . 'OpenBlu.php');

    $OpenBlu = new OpenBlu();
    $OpenBlu->getRecordManager()->sync();