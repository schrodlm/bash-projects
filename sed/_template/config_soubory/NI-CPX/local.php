<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-CPX--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NICPX--garant';
$conf['manager'] = '@--NICPX--author, @--NICPX--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-CPX--';
$conf['edux']['subject']['code']['clean']='--NICPX--';