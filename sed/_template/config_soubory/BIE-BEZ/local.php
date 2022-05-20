<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-BEZ--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEBEZ--garant';
$conf['manager'] = '@--BIEBEZ--author, @--BIEBEZ--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-BEZ--';
$conf['edux']['subject']['code']['clean']='--BIEBEZ--';