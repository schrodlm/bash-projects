<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-SCN--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PISCN--garant';
$conf['manager'] = '@--PISCN--author, @--PISCN--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-SCN--';
$conf['edux']['subject']['code']['clean']='--PISCN--';