<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-MIK--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEMIK--garant';
$conf['manager'] = '@--BIEMIK--author, @--BIEMIK--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-MIK--';
$conf['edux']['subject']['code']['clean']='--BIEMIK--';