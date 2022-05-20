<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-MIK--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIMIK--garant';
$conf['manager'] = '@--BIMIK--author, @--BIMIK--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-MIK--';
$conf['edux']['subject']['code']['clean']='--BIMIK--';