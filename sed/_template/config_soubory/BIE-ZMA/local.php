<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-ZMA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEZMA--garant';
$conf['manager'] = '@--BIEZMA--author, @--BIEZMA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-ZMA--';
$conf['edux']['subject']['code']['clean']='--BIEZMA--';