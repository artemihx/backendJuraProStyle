<?php
return [
  'auth' => \Src\Auth\Auth::class,
  'identity'=> \Model\User::class,
    'routeMiddleware'=>[
        'auth'=>\Middlewares\AuthMiddleware::class],
    'routeAppMiddleware' => [
        'trim' => \Middlewares\TrimMiddleware::class,
    ],
    'validators' => [
    'required' => Validators\RequireValidator::class,
    'unique' => \Validators\UniqueValidator::class]
];