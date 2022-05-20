<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-VES--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIVES--garant';
$conf['manager'] = '@--BIVES--author, @--BIVES--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-VES--';
$conf['edux']['subject']['code']['clean']='--BIVES--';