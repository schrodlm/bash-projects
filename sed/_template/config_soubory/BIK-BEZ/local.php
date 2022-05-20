<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-BEZ--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKBEZ--garant';
$conf['manager'] = '@--BIKBEZ--author, @--BIKBEZ--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-BEZ--';
$conf['edux']['subject']['code']['clean']='--BIKBEZ--';