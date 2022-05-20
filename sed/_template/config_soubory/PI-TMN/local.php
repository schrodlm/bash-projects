<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-TMN--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PITMN--garant';
$conf['manager'] = '@--PITMN--author, @--PITMN--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-TMN--';
$conf['edux']['subject']['code']['clean']='--PITMN--';