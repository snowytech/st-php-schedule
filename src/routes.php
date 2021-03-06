<?php
use Slim\Http\Request;
use Slim\Http\Response;

//HOME
$app->get('/', 'stphpschedule\Controller\HomepageController:home');

//QUEUE - queries queue table.
$app->get('/boxes/queue','stphpschedule\Controller\HomepageController:queue');

//JOBS - queries job table.
$app->get('/boxes/jobs','stphpschedule\Controller\HomepageController:job');

//API Routes--------------/

//POST JOB to QUEUE.
$app->post('/api/postQueue','stphpschedule\Controller\HomepageController:postQueue');

//POST Hold/Run JOB in QUEUE.
$app->post('/api/holdJob','stphpschedule\Controller\HomepageController:holdJob');

//POST Hold/Run Globally in JOBS table.
$app->post('/api/holdJobGlobal','stphpschedule\Controller\HomepageController:holdJobGlobal');

//DELETE Job in QUEUE
$app->post('/api/deleteJobqueue','stphpschedule\Controller\HomepageController:deleteJobq');

//DELETE Job in JOBS table
$app->post('/api/deleteJobGlobal','stphpschedule\Controller\HomepageController:deleteJobGlobal');

//CREATE new job in JOBS table
$app->post('/api/createJobGlobal','stphpschedule\Controller\HomepageController:createJobGlobal');

//Edit exsisting Job.
//$app->post()
