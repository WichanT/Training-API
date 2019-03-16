<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct()
    {
        $showpage="";
        if ($request->session()->has('userCode')) {
            return redirect('/');
        }else{
            return view('demo.login',['showpage'=>$showpage]);
        }
    }
    public function news(){
        
        $showpage='news';
        
        $client = new \GuzzleHttp\Client(); 
        $response = $client->post(env('API_URL').'newsListGet', [
        'json' => [
            'language' => env('API_LANGUAGE'),
            'userAgent' => env('API_USERAGENT'),
            'actionBy' => env('API_ACTIONBY'),
            'sessionRefCode' => env('API_SESSIONREFCODE'),
            'sessionId' => env('API_SESSIONID'),
            'selectSet' => env('API_SELECTSET'),
            'selectLimit' => env('API_SELECTLIMIT'),
        ]]); 
        $response = json_decode($response->getBody(), true);
        //return $response;
        $newsTopList= $response['newsTopList']; 
        $newsList= $response['newsList'];
        
        return view('demo.news',['showpage'=>$showpage, 'newsTopList'=>$newsTopList, 'newsList'=>$newsList]);

    }
    public function courses(){
        $client = new \GuzzleHttp\Client(); 
        $response = $client->post(env('API_URL').'enrollCourseTypeGet', [
        'json' => [
            'language' => env('API_LANGUAGE'),
            'userAgent' => env('API_USERAGENT'),
            'actionBy' => env('API_ACTIONBY'),
            'sessionRefCode' => env('API_SESSIONREFCODE'),
            'sessionId' => env('API_SESSIONID'),
            'selectSet' => env('API_SELECTSET'),
            'selectLimit' => env('API_SELECTLIMIT'),
        ]]); 
        $response = json_decode($response->getBody(), true);
        //return $response;
        $courseTypeTopList= $response['courseTypeTopList'];
        $courseTypeList= $response['courseTypeList'];
        
        $showpage='courses';
        return view('demo.courses',['showpage'=>$showpage, 'courseTypeTopList'=>$courseTypeTopList, 'courseTypeList'=>$courseTypeList]);
    }
    
    public function subjects(request $request){
        $courseCode=$request->courseCode;
        $courseName=$request->courseName;
        $showpage='courses';
        
        $client = new \GuzzleHttp\Client(); 
        $response = $client->post(env('API_URL').'enrollCourseListGet', [
        'json' => [
            'language' => env('API_LANGUAGE'),
            'userAgent' => env('API_USERAGENT'),
            'actionBy' => env('API_ACTIONBY'),
            'sessionRefCode' => env('API_SESSIONREFCODE'),
            'sessionId' => env('API_SESSIONID'),
            'selectSet' => env('API_SELECTSET'),
            'selectLimit' => env('API_SELECTLIMIT'), 
            'regionCode' => "",
            'courseTypeCode' => $courseCode ,
        ]]); 
        $response = json_decode($response->getBody(), true);
        //return $response;
        $courseTopList= $response['courseTopList'];
        $courseList= $response['courseList'];
        
        return view('demo.subjects',[
            'showpage'=>$showpage, 
            'courseCode'=>$courseCode,
            'courseName'=>$courseName,
            'courseTopList'=>$courseTopList,
            'courseList'=>$courseList
        ]);
    }
    
    public function calendars(request $request){ 
        $courseCode=$request->courseCode;
        $courseName=$request->courseName;
        $subCode=$request->subCode;
        $subName=$request->subName;
        
        $client = new \GuzzleHttp\Client(); 
        $response = $client->post(env('API_URL').'enrollSessionCalendarGet', [
        'json' => [
            'language' => env('API_LANGUAGE'),
            'userAgent' => env('API_USERAGENT'),
            'actionBy' => env('API_ACTIONBY'),
            'sessionRefCode' => env('API_SESSIONREFCODE'),
            'sessionId' => env('API_SESSIONID'),
            'selectSet' => env('API_SELECTSET'),
            'selectLimit' => env('API_SELECTLIMIT'), 
            'monthNumber' => date('m'),
            'yearNumber' => date('Y'),
            'regionCode' => "",
            'courseCode' => $subCode
        ]]); 
        $response = json_decode($response->getBody(), true);
        //return $response;
        $trainingMonthlyList= $response['trainingMonthlyList']; 
        
        $showpage='courses';
        return view('demo.calendars',[
            'showpage'=>$showpage,
            'courseName'=>$courseName,
            'courseCode'=>$courseCode,
            'subCode'=>$subCode,
            'subName'=>$subName,
            'trainingMonthlyList'=>$trainingMonthlyList
        ]);
    }
    
    public function usersselect(request $request){
        $courseCode=$request->courseCode;
        $courseName=$request->courseName;
        $subCode=$request->subCode;
        $subName=$request->subName;
        $startDate=$request->startDate;
        $endDate=$request->endDate;
        $startTime=$request->startTime;
        $endTime=$request->endTime;
        
        $showpage='courses';
        return view('demo.userselect',[
            'showpage'=>$showpage, 
            'courseName'=>$courseName,
            'courseCode'=>$courseCode,
            'subCode'=>$subCode,
            'subName'=>$subName,
            'startDate'=>$startDate,
            'endDate'=>$endDate,
            'startTime'=>$startTime,
            'endTime'=>$endTime
        ]);
    }
    
    public function logout(){
        $client = new \GuzzleHttp\Client(); 
        $response = $client->post(env('API_URL').'logOut', [
        'json' => [
            'language' => env('API_LANGUAGE'),
            'userAgent' => env('API_USERAGENT'),
            'actionBy' => env('API_ACTIONBY'),
            'sessionRefCode' => env('API_SESSIONREFCODE'),
            'sessionId' => env('API_SESSIONID'),
            'selectSet' => env('API_SELECTSET'),
            'selectLimit' => env('API_SELECTLIMIT'),
        ]]); 
        $response = json_decode($response->getBody(), true);
        //return $response; 
        Session::flush();
        return redirect('/login');
    }
    
    public function login(request $request){
        $showpage='';
        //$request->session()->flash('flash_error', 'กรุณาตรวจสอบชื่อผู้ใช้หรือรหัสผ่าน ให้ครบถ้วนและถูกต้องด้วยค่ะ');
        if ($request->session()->has('userCode')) {
            return redirect('/');
        }else{
            return view('demo.login',['showpage'=>$showpage]);
        }
    }
    
    public function dologin(request $request){
        $username=$request->username;
        $password=$request->password;
        $password=md5($password);
        $showpage=''; 
        if($username && $password){
            $client = new \GuzzleHttp\Client(); 
            $response = $client->post(env('API_URL').'logIn', [
            'json' => [
                'language' => env('API_LANGUAGE'),
                'userAgent' => env('API_USERAGENT'),
                'actionBy' => env('API_ACTIONBY'),
                'sessionRefCode' => env('API_SESSIONREFCODE'),
                'sessionId' => env('API_SESSIONID'),
                'username' => $username,
                'password' => $password
            ]]);  
            $response = json_decode($response->getBody(), true);
            if($response['responseStatus']=='SUCCESS'){
                //return $response; 
                session([
                    'userCode' => $response['userCode'],
                    'fullName' => $response['fullName'],
                    'imgProfile' => $response['imgProfile'],
                    'infoStatus' => $response['infoStatus'],
                    'userPositionCode' => $response['userPositionCode'],
                    'userPositionName' => $response['userPositionName'],
                    'dealerCode' => $response['dealerCode'],
                    'dealerName' => $response['dealerName'],
                    'branchCode' => $response['branchCode'],
                    'branchName' => $response['branchName'],
                    'menuList'=> $response['menuList'],
                ]); 
                $request->session()->flash('flash_error', 'ยินดีต้อนรับคุณ '.$response['fullName']);
                return view('demo.index',['showpage'=>$showpage]);
            }else{ 
                $request->session()->flash('flash_error', 'กรุณาตรวจสอบชื่อผู้ใช้หรือรหัสผ่าน ให้ครบถ้วนและถูกต้องด้วยค่ะ');
                return view('demo.login',['showpage'=>$showpage]);
            }
        }else{
            $request->session()->flash('flash_error', 'กรุณาตรวจสอบชื่อผู้ใช้หรือรหัสผ่าน ให้ครบถ้วนและถูกต้องด้วยค่ะ');
            return view('demo.login',['showpage'=>$showpage]);
        } 
    }
}
