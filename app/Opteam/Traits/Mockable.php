<?php


namespace App\Opteam\Traits;

use Mockery;

use App;

trait Mockable {


//    public static function shouldReceive()
//    {
//        $class=  get_called_class();
//        dd('shouldReceive', $class);
//        $repo = "App\\Opteam\\Models\\{$class}";
//        $mock = Mockery::mock($repo);
//
//        if ($repoFromApp =App::resolve($repo)){
//            return $repoFromApp;
//        }
//
//        App::instance($repo, $mock);
//
//        return call_user_func_array([$mock, 'shouldReceive'], func_get_args());
//    }
}