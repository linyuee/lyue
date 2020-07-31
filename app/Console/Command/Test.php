<?php
namespace App\Console\Command;

use Lyue\Console\Command;


/**
 * Model Test
 *

 * @package App\Console\Command
 */
class Test extends Command
{
    protected $signature = 'test {name}';
    protected $desc = 'desc';


    public function handle(){
        $this->info(111);
        var_dump($this->getArgument('eee'));
    }
}
