<?php 

function RecurDependency($depcy)//$depcy是依赖类1，也就是第一个依赖类,传入的参数为$parameter->getClass()
{
	$add=[];
	$Constructors=$depcy->getConstructor();//返回ReflectionMethod;
	if($Constructors)//如果依赖类有构造器，那么一直递归直到没有构造器为止
	{
		$depcynexts=$Constructors->getParameters();//取得构造器的参数,可能为数组。
		foreach ($depcynexts as $depcys_next) {
				if(!$depcys_next->getClass()->getConstructor())//该依赖类没有构造器时
				{
					
					$add[]=$depcys_next->getClass()->newInstance();
						
				}
				else{
				
					$add[]=RecurDependency($depcys_next->getClass());
				
				}
			}
	}
	return $depcy->newInstanceArgs($add);
	
}

 function build($instance)
{
	$refclass=$instance;//引用传进来的实例
	$reflection = new \ReflectionClass($instance);
	$constructor = $reflection->getConstructor();
	// if(!$constructor)
	// {
		$methods=$reflection->getMethods();//返回ReflectionMethod 类 array
		foreach ($methods as $method) {//$method is an object
			$parameters=$method->getParameters();//$parameter is an array,获取每个方法的依赖类
			foreach ($parameters as $parameter) {
				$methodname =  $parameter->getName();//return ReflectionClass Name 
				if(!$parameter->getClass()->getConstructor()){//如果该依赖类没有构造器
					$refclass->$methodname = $parameter->getClass()->newInstance();//直接返回该类
				}
				else{//如果该依赖类有构造器，则要继续在该类的构造器注入类实例
						$refclass->$methodname=RecurDependency($parameter->getClass());
				}
			}
		}
		return $instance;
	// }
	// else
	// {
	// 	return "You have to pass a argument.";
	// }
}






