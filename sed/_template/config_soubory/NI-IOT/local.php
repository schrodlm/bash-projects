<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-IOT--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIIOT--garant';
$conf['manager'] = '@--NIIOT--author, @--NIIOT--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-IOT--';
$conf['edux']['subject']['code']['clean']='--NIIOT--';