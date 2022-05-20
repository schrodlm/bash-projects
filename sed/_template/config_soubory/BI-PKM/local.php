<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-PKM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIPKM--garant';
$conf['manager'] = '@--BIPKM--author, @--BIPKM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-PKM--';
$conf['edux']['subject']['code']['clean']='--BIPKM--';