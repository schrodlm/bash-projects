<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-JPO.21--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEJPO.21--garant';
$conf['manager'] = '@--BIEJPO.21--author, @--BIEJPO.21--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-JPO.21--';
$conf['edux']['subject']['code']['clean']='--BIEJPO.21--';