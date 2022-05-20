<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--MI-AVY--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--MIAVY--garant';
$conf['manager'] = '@--MIAVY--author, @--MIAVY--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--MI-AVY--';
$conf['edux']['subject']['code']['clean']='--MIAVY--';