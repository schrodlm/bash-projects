<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-ESC--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIESC--garant';
$conf['manager'] = '@--PIESC--author, @--PIESC--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-ESC--';
$conf['edux']['subject']['code']['clean']='--PIESC--';