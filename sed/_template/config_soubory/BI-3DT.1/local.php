<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-3DT.1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BI3DT.1--garant';
$conf['manager'] = '@--BI3DT.1--author, @--BI3DT.1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-3DT.1--';
$conf['edux']['subject']['code']['clean']='--BI3DT.1--';