<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-BEK--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKBEK--garant';
$conf['manager'] = '@--BIKBEK--author, @--BIKBEK--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-BEK--';
$conf['edux']['subject']['code']['clean']='--BIKBEK--';