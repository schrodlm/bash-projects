<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-EPC--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIEEPC--garant';
$conf['manager'] = '@--NIEEPC--author, @--NIEEPC--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-EPC--';
$conf['edux']['subject']['code']['clean']='--NIEEPC--';