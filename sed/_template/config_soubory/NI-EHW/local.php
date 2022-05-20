<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-EHW--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEHW--garant';
$conf['manager'] = '@--NIEHW--author, @--NIEHW--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-EHW--';
$conf['edux']['subject']['code']['clean']='--NIEHW--';