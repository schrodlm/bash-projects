<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NIE-TES--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIETES--garant';
$conf['manager'] = '@--NIETES--author, @--NIETES--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NIE-TES--';
$conf['edux']['subject']['code']['clean']='--NIETES--';