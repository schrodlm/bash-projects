<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-AKD--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIAKD--garant';
$conf['manager'] = '@--PIAKD--author, @--PIAKD--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-AKD--';
$conf['edux']['subject']['code']['clean']='--PIAKD--';