<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-VR1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIVR1--garant';
$conf['manager'] = '@--BIVR1--author, @--BIVR1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-VR1--';
$conf['edux']['subject']['code']['clean']='--BIVR1--';