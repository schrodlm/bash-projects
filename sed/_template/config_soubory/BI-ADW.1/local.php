<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--BI-ADW.1--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--BIADW.1--garant';
$conf['manager'] = '@--BIADW.1--author, @--BIADW.1--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--BI-ADW.1--';
$conf['edux']['subject']['code']['clean']='--BIADW.1--';