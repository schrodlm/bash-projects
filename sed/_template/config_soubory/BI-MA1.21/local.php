<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-MA1.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIMA1.21--garant';
$conf['manager'] = '@--BIMA1.21--author, @--BIMA1.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-MA1.21--';
$conf['edux']['subject']['code']['clean']='--BIMA1.21--';