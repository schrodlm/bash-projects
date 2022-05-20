<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-SCR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NISCR--garant';
$conf['manager'] = '@--NISCR--author, @--NISCR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-SCR--';
$conf['edux']['subject']['code']['clean']='--NISCR--';