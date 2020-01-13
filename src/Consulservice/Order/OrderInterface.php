<?php
declare(strict_types=1);

namespace Consulservice\Order;


interface OrderInterface
{

	public function index(int $a,int $b):int ;

	public function test(string $a,int $b):string ;
}