<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ZIVS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIZIVS--garant';
$conf['manager'] = '@--BIZIVS--author, @--BIZIVS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ZIVS--';
$conf['edux']['subject']['code']['clean']='--BIZIVS--';