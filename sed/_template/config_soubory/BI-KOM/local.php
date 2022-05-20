<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-KOM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKOM--garant';
$conf['manager'] = '@--BIKOM--author, @--BIKOM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-KOM--';
$conf['edux']['subject']['code']['clean']='--BIKOM--';