<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PST--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPST--garant';
$conf['manager'] = '@--BIPST--author, @--BIPST--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PST--';
$conf['edux']['subject']['code']['clean']='--BIPST--';