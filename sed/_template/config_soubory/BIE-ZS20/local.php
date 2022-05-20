<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-ZS20--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEZS20--garant';
$conf['manager'] = '@--BIEZS20--author, @--BIEZS20--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-ZS20--';
$conf['edux']['subject']['code']['clean']='--BIEZS20--';