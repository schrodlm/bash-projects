<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-SP2.1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BISP2.1--garant';
$conf['manager'] = '@--BISP2.1--author, @--BISP2.1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-SP2.1--';
$conf['edux']['subject']['code']['clean']='--BISP2.1--';