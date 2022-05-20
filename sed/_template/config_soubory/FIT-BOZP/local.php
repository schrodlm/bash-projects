<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--FIT-BOZP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--FITBOZP--garant';
$conf['manager'] = '@--FITBOZP--author, @--FITBOZP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--FIT-BOZP--';
$conf['edux']['subject']['code']['clean']='--FITBOZP--';