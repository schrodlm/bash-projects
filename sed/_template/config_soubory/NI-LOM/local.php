<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-LOM--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NILOM--garant';
$conf['manager'] = '@--NILOM--author, @--NILOM--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-LOM--';
$conf['edux']['subject']['code']['clean']='--NILOM--';