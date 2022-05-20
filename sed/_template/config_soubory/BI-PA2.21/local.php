<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PA2.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPA2.21--garant';
$conf['manager'] = '@--BIPA2.21--author, @--BIPA2.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PA2.21--';
$conf['edux']['subject']['code']['clean']='--BIPA2.21--';