<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-BVS--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIBVS--garant';
$conf['manager'] = '@--NIBVS--author, @--NIBVS--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-BVS--';
$conf['edux']['subject']['code']['clean']='--NIBVS--';