<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-KRY--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIKRY--garant';
$conf['manager'] = '@--NIKRY--author, @--NIKRY--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-KRY--';
$conf['edux']['subject']['code']['clean']='--NIKRY--';