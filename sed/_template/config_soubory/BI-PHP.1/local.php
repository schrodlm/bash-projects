<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PHP.1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPHP.1--garant';
$conf['manager'] = '@--BIPHP.1--author, @--BIPHP.1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PHP.1--';
$conf['edux']['subject']['code']['clean']='--BIPHP.1--';