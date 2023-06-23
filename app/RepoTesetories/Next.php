<?php
namespace App\RepoTesetories;

use Illuminate\Support\Facades\Facade;

class Next extends Facade{

    protected static function getFacadeAccessor()
    {
        return 'adder';
    }
}

?>
