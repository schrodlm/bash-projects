<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-ESW--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIESW--garant';
$conf['manager'] = '@--NIESW--author, @--NIESW--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-ESW--';
$conf['edux']['subject']['code']['clean']='--NIESW--';