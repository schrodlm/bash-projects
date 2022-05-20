<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-GPU--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEGPU--garant';
$conf['manager'] = '@--NIEGPU--author, @--NIEGPU--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-GPU--';
$conf['edux']['subject']['code']['clean']='--NIEGPU--';