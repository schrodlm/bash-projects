<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-TGR--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PITGR--garant';
$conf['manager'] = '@--PITGR--author, @--PITGR--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-TGR--';
$conf['edux']['subject']['code']['clean']='--PITGR--';