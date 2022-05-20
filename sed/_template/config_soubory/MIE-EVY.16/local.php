<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--MIE-EVY.16--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--MIEEVY.16--garant';
$conf['manager'] = '@--MIEEVY.16--author, @--MIEEVY.16--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--MIE-EVY.16--';
$conf['edux']['subject']['code']['clean']='--MIEEVY.16--';