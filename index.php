<?php 


require 'logic_func/reflection.php';

class User{
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

	public $name;

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

	public $action;
	
	public function __construct(Action $action)
	{
		$this->action = $action;
	}
}

class Action{

	public $test;

	public function __construct(Test $test)
	{
		$this->test=$test;
	}
}
class Test{

}


class Post{

	public $a="a";

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

$post_no_constructor=build(new Post);//You have to remove the constructor function!And you can't also use the next build function at the same time,because the class is referenced 


// $wjq_with_constructor=build(new Post(new User(new Redis(new Name),new Name)));

var_dump($post_with_constructor);
// echo $wjq->usera;




//Once program have started,it will come out
/**
object(Post)#1 (4) { ["a"]=> string(1) "a"
["user"]=> object(User)#14 (2) { ["redis"]=> object(Redis)#16 (1) { ["name"]=> object(Name)#19 (1) { ["action"]=> object(Action)#21 (1) { ["test"]=> object(Test)#22 (0) { } } } } 
	["name"]=> object(Name)#15 (1) { ["action"]=> object(Action)#18 (1) { ["test"]=> object(Test)#23 (0) { } } } } 
["redisc"]=> object(Redis)#12 (1) { ["name"]=> object(Name)#17 (1) { ["action"]=> object(Action)#25 (1) { ["test"]=> object(Test)#26 (0) { } } } }
["redisb"]=> object(Redis)#13 (1) { ["name"]=> object(Name)#20 (1) { ["action"]=> object(Action)#28 (1) { ["test"]=> object(Test)#29 (0) { } } } } }
*/

//And it's automatically inject .Done!!
