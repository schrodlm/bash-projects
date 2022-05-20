<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-KOP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEKOP--garant';
$conf['manager'] = '@--NIEKOP--author, @--NIEKOP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-KOP--';
$conf['edux']['subject']['code']['clean']='--NIEKOP--';