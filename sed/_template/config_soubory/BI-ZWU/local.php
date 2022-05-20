<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ZWU--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIZWU--garant';
$conf['manager'] = '@--BIZWU--author, @--BIZWU--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ZWU--';
$conf['edux']['subject']['code']['clean']='--BIZWU--';