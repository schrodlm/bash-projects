<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-IVS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIIVS--garant';
$conf['manager'] = '@--NIIVS--author, @--NIIVS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-IVS--';
$conf['edux']['subject']['code']['clean']='--NIIVS--';