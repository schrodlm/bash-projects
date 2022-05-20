<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-BUI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIBUI--garant';
$conf['manager'] = '@--NIBUI--author, @--NIBUI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-BUI--';
$conf['edux']['subject']['code']['clean']='--NIBUI--';