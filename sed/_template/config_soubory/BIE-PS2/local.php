<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-PS2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEPS2--garant';
$conf['manager'] = '@--BIEPS2--author, @--BIEPS2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-PS2--';
$conf['edux']['subject']['code']['clean']='--BIEPS2--';