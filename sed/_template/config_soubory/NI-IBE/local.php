<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-IBE--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIIBE--garant';
$conf['manager'] = '@--NIIBE--author, @--NIIBE--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-IBE--';
$conf['edux']['subject']['code']['clean']='--NIIBE--';