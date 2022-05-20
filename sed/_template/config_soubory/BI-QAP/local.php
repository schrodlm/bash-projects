<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-QAP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIQAP--garant';
$conf['manager'] = '@--BIQAP--author, @--BIQAP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-QAP--';
$conf['edux']['subject']['code']['clean']='--BIQAP--';