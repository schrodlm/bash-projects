<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-HMI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIHMI--garant';
$conf['manager'] = '@--BIHMI--author, @--BIHMI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-HMI--';
$conf['edux']['subject']['code']['clean']='--BIHMI--';