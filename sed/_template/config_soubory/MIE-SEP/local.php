<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--MIE-SEP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--MIESEP--garant';
$conf['manager'] = '@--MIESEP--author, @--MIESEP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--MIE-SEP--';
$conf['edux']['subject']['code']['clean']='--MIESEP--';