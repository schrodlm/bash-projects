<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PPA--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPPA--garant';
$conf['manager'] = '@--BIPPA--author, @--BIPPA--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PPA--';
$conf['edux']['subject']['code']['clean']='--BIPPA--';