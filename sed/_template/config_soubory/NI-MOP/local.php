<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-MOP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIMOP--garant';
$conf['manager'] = '@--NIMOP--author, @--NIMOP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-MOP--';
$conf['edux']['subject']['code']['clean']='--NIMOP--';