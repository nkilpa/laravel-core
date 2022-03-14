<?php

namespace nikitakilpa\Core\Traits;

trait MessageTrait
{
    private array $errors = [];
    private array $messages = [];

    public function addErrors($errors)
    {
        $this->errors = $errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function addMessages($messages)
    {
        $this->messages = $messages;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }
}