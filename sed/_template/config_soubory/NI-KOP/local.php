<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-KOP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIKOP--garant';
$conf['manager'] = '@--NIKOP--author, @--NIKOP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-KOP--';
$conf['edux']['subject']['code']['clean']='--NIKOP--';