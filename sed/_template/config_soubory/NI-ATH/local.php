<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-ATH--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIATH--garant';
$conf['manager'] = '@--NIATH--author, @--NIATH--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-ATH--';
$conf['edux']['subject']['code']['clean']='--NIATH--';