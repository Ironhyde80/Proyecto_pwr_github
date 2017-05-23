<?php
  $accesoLogin = function($request, $response, $next) use($app){
        if(!isset($_SESSION['user'])){
            return $response->withRedirect($app->getContainer()->get('router')->pathFor('login'));
        }else{
            return $next($request, $response);
        }
    };
    $datosVistas=function ($request, $response, $next){ // Crea una variable global para el user
  		$user=null;
  		if(isset($_SESSION['user'])){
  			$user=$_SESSION['user'];
  		}
  		$this->get('view')->getEnvironment()->addGlobal('user',$user);
  		$response = $next($request,$response);
  		return $response;
  	};
  	$app->add($datosVistas);
