<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-SZ2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BISZ2--garant';
$conf['manager'] = '@--BISZ2--author, @--BISZ2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-SZ2--';
$conf['edux']['subject']['code']['clean']='--BISZ2--';