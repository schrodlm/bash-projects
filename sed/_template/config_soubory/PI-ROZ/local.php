<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--PI-ROZ--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--PIROZ--garant';
$conf['manager'] = '@--PIROZ--author, @--PIROZ--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--PI-ROZ--';
$conf['edux']['subject']['code']['clean']='--PIROZ--';