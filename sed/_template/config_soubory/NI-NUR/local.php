<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-NUR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NINUR--garant';
$conf['manager'] = '@--NINUR--author, @--NINUR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-NUR--';
$conf['edux']['subject']['code']['clean']='--NINUR--';