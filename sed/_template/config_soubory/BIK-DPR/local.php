<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-DPR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKDPR--garant';
$conf['manager'] = '@--BIKDPR--author, @--BIKDPR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-DPR--';
$conf['edux']['subject']['code']['clean']='--BIKDPR--';