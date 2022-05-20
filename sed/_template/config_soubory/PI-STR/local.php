<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-STR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PISTR--garant';
$conf['manager'] = '@--PISTR--author, @--PISTR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-STR--';
$conf['edux']['subject']['code']['clean']='--PISTR--';