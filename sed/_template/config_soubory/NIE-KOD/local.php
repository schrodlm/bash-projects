<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-KOD--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEKOD--garant';
$conf['manager'] = '@--NIEKOD--author, @--NIEKOD--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-KOD--';
$conf['edux']['subject']['code']['clean']='--NIEKOD--';