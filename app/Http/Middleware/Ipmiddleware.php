<?php

namespace App\Http\Middleware;

use App\Models\Ip;
use Closure;
use Jenssegers\Agent\Agent;

class Ipmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $agent =new Agent();
        $task = $agent->platform();
        $br =$agent->browser();
        $dd = $agent->device();
        if ($agent->isPhone()){
            $ss ='mobile';
            $data['isphone']=1;
        }else{
            $ss =' ';
        }
        if ($agent->isRobot()){
            $robot = $agent->robot();
            $data['isrobot']=1;
        }else{
            $robot ='';
        }
        if ($agent->isRobot()) {
        }else if ($agent->isPhone()) {
        }else{
            $data['ispc']=1;
        }
        $device = $task.'_'.$br.'-'.$dd.'_'.$ss."_".$robot;
        $data['url']=$request->url();
        $data['ip']=$request->ip();
        $data['device']=$device;
        Ip::create($data);
        return $next($request);
    }
}
