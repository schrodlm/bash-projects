<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-MTI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIMTI--garant';
$conf['manager'] = '@--NIMTI--author, @--NIMTI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-MTI--';
$conf['edux']['subject']['code']['clean']='--NIMTI--';