<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--FI-HTE--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--FIHTE--garant';
$conf['manager'] = '@--FIHTE--author, @--FIHTE--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--FI-HTE--';
$conf['edux']['subject']['code']['clean']='--FIHTE--';