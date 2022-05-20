<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-DDW--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIDDW--garant';
$conf['manager'] = '@--NIDDW--author, @--NIDDW--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-DDW--';
$conf['edux']['subject']['code']['clean']='--NIDDW--';