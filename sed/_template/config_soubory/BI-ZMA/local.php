<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ZMA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIZMA--garant';
$conf['manager'] = '@--BIZMA--author, @--BIZMA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ZMA--';
$conf['edux']['subject']['code']['clean']='--BIZMA--';