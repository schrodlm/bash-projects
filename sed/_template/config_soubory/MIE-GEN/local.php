<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--MIE-GEN--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--MIEGEN--garant';
$conf['manager'] = '@--MIEGEN--author, @--MIEGEN--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--MIE-GEN--';
$conf['edux']['subject']['code']['clean']='--MIEGEN--';