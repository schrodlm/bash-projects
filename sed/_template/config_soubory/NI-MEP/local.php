<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-MEP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIMEP--garant';
$conf['manager'] = '@--NIMEP--author, @--NIMEP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-MEP--';
$conf['edux']['subject']['code']['clean']='--NIMEP--';