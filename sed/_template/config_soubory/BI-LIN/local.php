<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-LIN--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BILIN--garant';
$conf['manager'] = '@--BILIN--author, @--BILIN--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-LIN--';
$conf['edux']['subject']['code']['clean']='--BILIN--';