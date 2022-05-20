<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-EJA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIEJA--garant';
$conf['manager'] = '@--BIEJA--author, @--BIEJA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-EJA--';
$conf['edux']['subject']['code']['clean']='--BIEJA--';