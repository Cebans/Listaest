<?php

namespace controllers;

interface IController
{
    public function list();
    public function detail($id);
    public function create($request);
    public function uptade ($id,$request);
    public function delete ($id);
}