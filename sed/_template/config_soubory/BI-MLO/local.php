<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-MLO--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIMLO--garant';
$conf['manager'] = '@--BIMLO--author, @--BIMLO--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-MLO--';
$conf['edux']['subject']['code']['clean']='--BIMLO--';