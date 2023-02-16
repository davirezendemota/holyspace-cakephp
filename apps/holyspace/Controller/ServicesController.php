<?php

App::uses('AppController', 'Controller');

class ServicesController extends AppController
{
  public function index()
  {
    $services = $this->Service->find('all');

    $this->set('services', $services);
  }
}