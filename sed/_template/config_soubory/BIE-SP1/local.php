<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-SP1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIESP1--garant';
$conf['manager'] = '@--BIESP1--author, @--BIESP1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-SP1--';
$conf['edux']['subject']['code']['clean']='--BIESP1--';