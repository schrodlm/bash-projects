<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-SAP.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKSAP.21--garant';
$conf['manager'] = '@--BIKSAP.21--author, @--BIKSAP.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-SAP.21--';
$conf['edux']['subject']['code']['clean']='--BIKSAP.21--';