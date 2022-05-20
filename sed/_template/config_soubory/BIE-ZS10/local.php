<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-ZS10--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEZS10--garant';
$conf['manager'] = '@--BIEZS10--author, @--BIEZS10--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-ZS10--';
$conf['edux']['subject']['code']['clean']='--BIEZS10--';