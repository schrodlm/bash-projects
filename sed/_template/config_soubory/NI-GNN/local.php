<?php
// protected configuration of a particular course

// URL path must be set, canonical urls cannot be used because of cluster impl.
define('DOKU_BASE','/courses/--NI-GNN--/');

// allow course garant to manage wiki
$conf['superuser'] .= ', @--NIGNN--garant';
$conf['manager'] = '@--NIGNN--author, @--NIGNN--lector';

$conf['edux']['subject']['title']['cs']='--COURSE-NAME--';
$conf['edux']['subject']['title']['en']='--COURSE-NAME--';
$conf['edux']['subject']['code']['full']='--NI-GNN--';
$conf['edux']['subject']['code']['clean']='--NIGNN--';