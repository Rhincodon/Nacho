<?php

namespace Rhincodon\Learn;

class TasksController
{
    private $auth;
    private $repository;

    public function __construct(Authorizer $auth, TaskRepository $repository)
    {
        $this->auth = $auth;
        $this->repository = $repository;
    }

    public function store()
    {
        if ($this->auth->guest()) {
            return 'redirect';
        }

        $this->repository->create('...');

        return true;
    }

    public function show()
    {
        return "a task";
    }
}
