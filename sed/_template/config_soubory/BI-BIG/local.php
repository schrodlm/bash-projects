<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-BIG--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIBIG--garant';
$conf['manager'] = '@--BIBIG--author, @--BIBIG--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-BIG--';
$conf['edux']['subject']['code']['clean']='--BIBIG--';