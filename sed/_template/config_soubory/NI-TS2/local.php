<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-TS2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NITS2--garant';
$conf['manager'] = '@--NITS2--author, @--NITS2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-TS2--';
$conf['edux']['subject']['code']['clean']='--NITS2--';