<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-ADM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIADM--garant';
$conf['manager'] = '@--NIADM--author, @--NIADM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-ADM--';
$conf['edux']['subject']['code']['clean']='--NIADM--';