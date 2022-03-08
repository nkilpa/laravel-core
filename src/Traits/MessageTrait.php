<?php

namespace nikitakilpa\Core\Traits;

trait MessageTrait
{
    private $errors = [];

    public function addErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}