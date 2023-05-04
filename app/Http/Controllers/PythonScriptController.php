<?php

namespace App\Http\Controllers;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;
use Illuminate\Http\Request;
use robertogallea\LaravelPython\Services\LaravelPython;
use Illuminate\Support\Facades\File;

class PythonScriptController extends Controller
{
    public function PythonScript()
{
  //$process = new Process(['python','E:\Lara Project\python-script/Scrape.py']);
  //$process = new Process(['python', base_path() . '/Scrape.py']);
//    print_r($process) ;
//    die();
 // $process = new Process(["E:\Lara Project\python-script/Scrape.py"]);
   //$process = new Process(["py", base_path() . "/Scrape.py"]);

   
  $process = Process::fromShellCommandline('python','/var/www/Techniques.IO\app/pythonScrape.py');
  //$process = Process::fromShellCommandline('python',base_path() .'\Scrape.py');
 /////////////////////////////////////////
  //$process = Process::fromShellCommandline("python".app_path()."\Http\Controllers/Scrape.py2>&1");
   $process->run();
    
   if (!$process->isSuccessful()) {
       throw new ProcessFailedException($process);
   }
 
   $data = $process->getOutput();

   dd($data);


// $py='E:\LaraProject\Techniques.IO\public\Scrape.py';
// $scriptLocation =$py;
// $args =  [$scriptLocation];
// $process = new Process($args);
// $process->run();
// if (!$process->isSuccessful()) {
//     throw new ProcessFailedException($process);
// }
// echo $process->getOutput();



}

function p (){
    $service = new LaravelPython();
    $result = $service->run('E:\LaraProject\Techniques.IO\public\Scrape.py');


//    $command_exec = escapeshellcmd('C:\Users\USER\Desktop\Scrape.py');
//    $str_output = shell_exec($command_exec);
//    echo $str_output;
}

}
