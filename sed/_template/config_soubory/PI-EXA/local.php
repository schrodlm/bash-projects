<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-EXA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIEXA--garant';
$conf['manager'] = '@--PIEXA--author, @--PIEXA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-EXA--';
$conf['edux']['subject']['code']['clean']='--PIEXA--';