<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-PON--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIPON--garant';
$conf['manager'] = '@--NIPON--author, @--NIPON--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-PON--';
$conf['edux']['subject']['code']['clean']='--NIPON--';