<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-KRY--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEKRY--garant';
$conf['manager'] = '@--NIEKRY--author, @--NIEKRY--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-KRY--';
$conf['edux']['subject']['code']['clean']='--NIEKRY--';