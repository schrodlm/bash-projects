<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-SI2.3--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIESI2.3--garant';
$conf['manager'] = '@--BIESI2.3--author, @--BIESI2.3--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-SI2.3--';
$conf['edux']['subject']['code']['clean']='--BIESI2.3--';