<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-MPP--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIMPP--garant';
$conf['manager'] = '@--BIMPP--author, @--BIMPP--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-MPP--';
$conf['edux']['subject']['code']['clean']='--BIMPP--';