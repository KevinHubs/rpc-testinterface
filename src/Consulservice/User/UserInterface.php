<?php
declare(strict_types=1);

namespace Consulservice\User;


interface UserInterface
{
	public function login(int $user,string $pass):bool ;
}