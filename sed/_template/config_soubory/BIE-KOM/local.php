<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-KOM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEKOM--garant';
$conf['manager'] = '@--BIEKOM--author, @--BIEKOM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-KOM--';
$conf['edux']['subject']['code']['clean']='--BIEKOM--';