<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--MIE-ZS10--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--MIEZS10--garant';
$conf['manager'] = '@--MIEZS10--author, @--MIEZS10--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--MIE-ZS10--';
$conf['edux']['subject']['code']['clean']='--MIEZS10--';