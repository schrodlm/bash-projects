<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-SEP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BISEP--garant';
$conf['manager'] = '@--BISEP--author, @--BISEP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-SEP--';
$conf['edux']['subject']['code']['clean']='--BISEP--';