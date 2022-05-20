<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--MIE-DSV.16--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--MIEDSV.16--garant';
$conf['manager'] = '@--MIEDSV.16--author, @--MIEDSV.16--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--MIE-DSV.16--';
$conf['edux']['subject']['code']['clean']='--MIEDSV.16--';