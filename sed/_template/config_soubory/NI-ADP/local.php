<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-ADP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIADP--garant';
$conf['manager'] = '@--NIADP--author, @--NIADP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-ADP--';
$conf['edux']['subject']['code']['clean']='--NIADP--';