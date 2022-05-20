<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-BLE--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIBLE--garant';
$conf['manager'] = '@--BIBLE--author, @--BIBLE--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-BLE--';
$conf['edux']['subject']['code']['clean']='--BIBLE--';