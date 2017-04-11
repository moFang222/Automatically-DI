<?php 


require 'logic_func/reflection.php';

class User{
 	// private $redis;
 	public $redis;
 	public $name;
	public function __construct(Redis $redis,Name $name)
	{
		$this->redis = $redis;
		$this->name = $name;
		// echo $redis;
	}
	public function __toString()
	{
		return 'User';
	}
}


class Redis{

	// public $name;

	public function __construct(Name $name)
	{
		$this->name = $name;
	}
	public function __toString()
	{
		return 'User Wjq';
	}

}

class Name{
	// public $action;
	// public function __construct(Action $action)
	// {
	// 	$this->action = $action;
	// }
}

class Action{
	// public function __construct(Test $test)
	// {
	// 	$this->test=$test;
	// }
}
class Test{

}


class Post{

	public $a="a";

	public function __construct(User $user)
	{

	}
	public function __toString()
	{
		return 'people';
	}

	public function index(User $user,Redis $redisc)
	{
		return $usera;
	}
	public function show(Redis $redisb)
	{

	}
}

// $wjq_no_constructor=build(new Post);//You have to remove the constructor function!And can use the next build at the same time,because the class is referenced 
$wjq=build(new Post(new User(new Redis(new Name),new Name)));
var_dump($wjq);
// echo $wjq->usera;




