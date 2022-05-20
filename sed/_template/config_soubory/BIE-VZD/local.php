<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-VZD--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEVZD--garant';
$conf['manager'] = '@--BIEVZD--author, @--BIEVZD--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-VZD--';
$conf['edux']['subject']['code']['clean']='--BIEVZD--';