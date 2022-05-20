<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--MIE-IBE--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--MIEIBE--garant';
$conf['manager'] = '@--MIEIBE--author, @--MIEIBE--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--MIE-IBE--';
$conf['edux']['subject']['code']['clean']='--MIEIBE--';