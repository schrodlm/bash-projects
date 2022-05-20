<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-PSC--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIPSC--garant';
$conf['manager'] = '@--PIPSC--author, @--PIPSC--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-PSC--';
$conf['edux']['subject']['code']['clean']='--PIPSC--';