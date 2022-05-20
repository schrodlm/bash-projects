<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-AIB--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIAIB--garant';
$conf['manager'] = '@--NIAIB--author, @--NIAIB--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-AIB--';
$conf['edux']['subject']['code']['clean']='--NIAIB--';