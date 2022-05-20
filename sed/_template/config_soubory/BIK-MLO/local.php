<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-MLO--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKMLO--garant';
$conf['manager'] = '@--BIKMLO--author, @--BIKMLO--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-MLO--';
$conf['edux']['subject']['code']['clean']='--BIKMLO--';