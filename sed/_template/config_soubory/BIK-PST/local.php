<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-PST--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKPST--garant';
$conf['manager'] = '@--BIKPST--author, @--BIKPST--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-PST--';
$conf['edux']['subject']['code']['clean']='--BIKPST--';