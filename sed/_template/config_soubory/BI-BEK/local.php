<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-BEK--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIBEK--garant';
$conf['manager'] = '@--BIBEK--author, @--BIBEK--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-BEK--';
$conf['edux']['subject']['code']['clean']='--BIBEK--';