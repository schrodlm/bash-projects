<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-OPJ--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIOPJ--garant';
$conf['manager'] = '@--BIOPJ--author, @--BIOPJ--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-OPJ--';
$conf['edux']['subject']['code']['clean']='--BIOPJ--';