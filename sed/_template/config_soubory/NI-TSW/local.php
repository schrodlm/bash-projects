<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-TSW--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NITSW--garant';
$conf['manager'] = '@--NITSW--author, @--NITSW--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-TSW--';
$conf['edux']['subject']['code']['clean']='--NITSW--';