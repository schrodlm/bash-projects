<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-PSI.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKPSI.21--garant';
$conf['manager'] = '@--BIKPSI.21--author, @--BIKPSI.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-PSI.21--';
$conf['edux']['subject']['code']['clean']='--BIKPSI.21--';