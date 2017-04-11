# Automatically-DI
Inmitate the function of Automatically dependency injection in Laravel

  The function I writted is not as powerful and elegant as laravel. As we know,Laravel use **Ioc Container** to make everything so easy and elegant.
I don't know how to create **Ioc Container** yet. So you have to explicit call by using the function `build($instance)`.

For example： `$instance = build(new object);`  And every dependencies you want automatically inject for you.

> Note:the build function only accept one argument.
>  
> If you want to pass multiple parameters,you can use this: ```foreach($instances as $instance){ build($instance) };``` It will get you what you want.


The function `build($instance)` is easy to write.The core of this function is another funciton  call `RecurDependency($instance)`. It uses the php bottom code
which is the Reflection API and some recursive algorithms.
