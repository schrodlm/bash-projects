<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--MIE-NUR.16--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--MIENUR.16--garant';
$conf['manager'] = '@--MIENUR.16--author, @--MIENUR.16--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--MIE-NUR.16--';
$conf['edux']['subject']['code']['clean']='--MIENUR.16--';