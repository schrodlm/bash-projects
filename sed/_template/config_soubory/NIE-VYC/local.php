<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-VYC--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEVYC--garant';
$conf['manager'] = '@--NIEVYC--author, @--NIEVYC--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-VYC--';
$conf['edux']['subject']['code']['clean']='--NIEVYC--';