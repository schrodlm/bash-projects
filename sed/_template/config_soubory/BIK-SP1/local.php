<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIK-SP1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIKSP1--garant';
$conf['manager'] = '@--BIKSP1--author, @--BIKSP1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIK-SP1--';
$conf['edux']['subject']['code']['clean']='--BIKSP1--';