<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--MIE-HMI--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--MIEHMI--garant';
$conf['manager'] = '@--MIEHMI--author, @--MIEHMI--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--MIE-HMI--';
$conf['edux']['subject']['code']['clean']='--MIEHMI--';