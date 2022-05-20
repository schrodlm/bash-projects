<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-TS2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BITS2--garant';
$conf['manager'] = '@--BITS2--author, @--BITS2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-TS2--';
$conf['edux']['subject']['code']['clean']='--BITS2--';