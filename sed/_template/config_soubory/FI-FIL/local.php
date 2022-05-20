<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--FI-FIL--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--FIFIL--garant';
$conf['manager'] = '@--FIFIL--author, @--FIFIL--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--FI-FIL--';
$conf['edux']['subject']['code']['clean']='--FIFIL--';