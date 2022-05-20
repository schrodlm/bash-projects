<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-PKM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEPKM--garant';
$conf['manager'] = '@--BIEPKM--author, @--BIEPKM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-PKM--';
$conf['edux']['subject']['code']['clean']='--BIEPKM--';