<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BIE-SP2.2--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIESP2.2--garant';
$conf['manager'] = '@--BIESP2.2--author, @--BIESP2.2--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BIE-SP2.2--';
$conf['edux']['subject']['code']['clean']='--BIESP2.2--';