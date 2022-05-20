<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-PDB--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIPDB--garant';
$conf['manager'] = '@--NIPDB--author, @--NIPDB--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-PDB--';
$conf['edux']['subject']['code']['clean']='--NIPDB--';