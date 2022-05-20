<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-MLO--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEMLO--garant';
$conf['manager'] = '@--BIEMLO--author, @--BIEMLO--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-MLO--';
$conf['edux']['subject']['code']['clean']='--BIEMLO--';