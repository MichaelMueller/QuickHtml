<?php

/* @var $ServiceRepo Qck\ServiceRepo */
$ServiceRepo = Qck\ServiceRepo::getInstance();

// ADD
$ServiceRepo->addServiceFactory( Qck\Html\Page::class, function()
{
  return new Qck\Html\Page();
} );

$ServiceRepo->addServiceFactory( Qck\Html\LoginForm::class, function()
{
  return new Qck\Html\LoginForm();
} );
