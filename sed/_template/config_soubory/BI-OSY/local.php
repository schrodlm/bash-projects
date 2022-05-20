<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-OSY--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIOSY--garant';
$conf['manager'] = '@--BIOSY--author, @--BIOSY--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-OSY--';
$conf['edux']['subject']['code']['clean']='--BIOSY--';