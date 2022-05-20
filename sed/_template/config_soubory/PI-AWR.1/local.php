<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-AWR.1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIAWR.1--garant';
$conf['manager'] = '@--PIAWR.1--author, @--PIAWR.1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-AWR.1--';
$conf['edux']['subject']['code']['clean']='--PIAWR.1--';