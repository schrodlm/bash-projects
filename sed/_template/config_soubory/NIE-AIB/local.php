<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-AIB--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEAIB--garant';
$conf['manager'] = '@--NIEAIB--author, @--NIEAIB--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-AIB--';
$conf['edux']['subject']['code']['clean']='--NIEAIB--';