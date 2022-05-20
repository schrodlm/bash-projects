<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-TNN--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NITNN--garant';
$conf['manager'] = '@--NITNN--author, @--NITNN--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-TNN--';
$conf['edux']['subject']['code']['clean']='--NITNN--';