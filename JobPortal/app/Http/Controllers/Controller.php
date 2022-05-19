<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Twilio\Rest\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $public_path ="/home2/fancycro/live.handyjobs.fancycrockery.com/";

    public function send_sms($data = []){
       
     // dd($data);
      $sid    = getenv("MESSAGE_SID", "msg_sid");
      $token  = getenv("MESSAGE_TOKEN", "msg_token");
      $twilio = new Client($sid, $token);

      $message = $twilio->messages
                        ->create('+923402717629', // to
                                 array(
                                     "messagingServiceSid" => "MG76aa35059856c11e82ddf78180642fdb",
                                     "body" => $data['message']
                                 )
                        );

//     print($message->sid);
 
//                     $sid    = "ACc240831509c7e6f7f5e9de4fb0a35512"; 
//                     $token  = "0a4386169e7484d91229719797360929"; 
//                     $twilio = new Client($sid, $token); 
                     
//                     $message = $twilio->messages 
//                                       ->create("+923402717629",  //"+4593841333", // to 
//                                               array(  
//                                                   "messagingServiceSid" => "MGacd47d4bacde31c6c2961fa61f10ea3e",      
//                                                   "body" => "testing" 
//                                               ) 
//                                       ); 
                     
//                 print($message->sid);

    } 


    public function send_notification_to_user($data = [] ){
    	// dd($data);

    	 date_default_timezone_set("asia/karachi");

        $Notification_types = array('web_notification','app_notification');
        foreach($Notification_types as $types){

        $ch = curl_init();
        $carbon = Carbon::now();
        // echo $data['user_id'] . "\n" .Auth::id() . "    ";
          $data_json = '{"text": "'.$data['message'].'","user_id": "'.$data['user_id'].'" ,"url": "'.$data['url'].'", "date": "'.$carbon->format('d-m-Y h:i A').'"}';
            // dd($data);

        curl_setopt($ch, CURLOPT_URL, "https://jobportal2-903d9.firebaseio.com/user_id_".$data['user_id']."/".$types."/".$carbon->format('YmdGis').".json");
        // dd($data,$text,$link,$User_id,$notification_id,$lead_type);
        $server_key ='AIzaSyApzKmXOl1znu4NK4OODtH6as4LhfFxgF4';
        $headers = array(
            'Content-Type:application/json',
        'Authorization:key='.$server_key
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        $res = curl_exec($ch);
        $httpCode = curl_getinfo($ch);
       // dd($res);
        curl_close($ch);
       }

       //dd($res);

        return $res;



    }
    
    




  public function send_message_to_user($data = [] ){
           //dd($data);
         date_default_timezone_set("asia/karachi");
         $return_array = [];

        $Notification_types = array($data['id']=>Auth::id(),Auth::id()=> $data['id']);
        foreach($Notification_types as $firstkey=>$secondKey){
            $user = User::find($firstkey);
            $user_sec = User::find($secondKey);
        //  dd($user,$user_sec);

        $ch = curl_init();
        $carbon = Carbon::now();
        // echo $data['user_id'] . "\n" .Auth::id() . "    ";
          $data_json = '{"text": "'.$data['message'].'","user_id":"'.Auth::user()->id.'" ,"is_read":"0","link": "'.$data['link'].'","link_for_privider": "'.$data['link_for_privider'].'","username": "'.Auth::user()->name.'", "files": "'.$data['files'].'","file_type":"'.$data['file_type'].'", "date": "'.$carbon->format('d-m-Y h:i A').'"}';
            // dd($data);
            array_push($return_array, [$secondKey => $data_json]);

        curl_setopt($ch, CURLOPT_URL, "https://jobportal2-903d9.firebaseio.com/user_id_".$secondKey."/messages/user_id_".$firstkey."/".$carbon->format('YmdGis').".json");
        // dd($data,$text,$link,$User_id,$notification_id,$lead_type);
        $server_key ='AIzaSyApzKmXOl1znu4NK4OODtH6as4LhfFxgF4';
        $headers = array(
            'Content-Type:application/json',
        'Authorization:key='.$server_key
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        $res = curl_exec($ch);
        $httpCode = curl_getinfo($ch);
       // dd($res);
        curl_close($ch);
       }
       
       //dd($return_array);
       $user = User::find($data['id']);
              $this->send_notification_to_user(['user_id'=>$data['id'] , 'message'=>Auth::user()->name." Sent You a message", 'url'=>'/Conversation/'.$user_sec->id.'/'.$user_sec->name, 'noti_type'=>'message_noti','title'=>'New Message' ,]);


       return $res;



    }







  public function send_message_to_admin($data = [] ){
    //      dd($data, User::find($data['id']),Auth::id());
         date_default_timezone_set("asia/karachi");
         $return_array = [];

        $Notification_types = array($data['id']=>Auth::id(),Auth::id()=> $data['id']);
        foreach($Notification_types as $firstkey=>$secondKey){
            $user = User::find($firstkey);
             $user_sec = User::find($secondKey);
              $user_admin = User::where('account_type','admin')->get();

        //  dd($user,$user_sec);

        $ch = curl_init();
        $carbon = Carbon::now();
        // echo $data['user_id'] . "\n" .Auth::id() . "    ";
          $data_json = '{"text": "'.$data['message'].'","username": "'.Auth::user()->name.'","user_id":"'.Auth::user()->id.'" ,"link": "'.$data['link'].'", "files": "'.$data['files'].'","file_type":"'.$data['file_type'].'", "date": "'.$carbon->format('d-m-Y h:i A').'"}';
            // dd($data);
            array_push($return_array, [$secondKey => $data_json]);

              
        curl_setopt($ch, CURLOPT_URL, "https://jobportal2-903d9.firebaseio.com/user_id_".$secondKey."/support_messages/".$carbon->format('YmdGis').".json");
 
        // dd($data,$text,$link,$User_id,$notification_id,$lead_type);
        $server_key ='AIzaSyApzKmXOl1znu4NK4OODtH6as4LhfFxgF4';
        $headers = array(
            'Content-Type:application/json',
        'Authorization:key='.$server_key
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        $res = curl_exec($ch);
        $httpCode = curl_getinfo($ch);
       // dd($res);
        curl_close($ch);
       }
       
       //dd($return_array);

       if(Auth::user()->account_type == 'admin'){
        
    $this->send_notification_to_user(['user_id'=>$data['id'], 'message'=>Auth::user()->name." Send You a message", 'url'=>'/Conversation/'.$user_sec->id.'/'.$user_sec->name]);

}else
{

    $user = User::where('account_type','admin')->get();

       
     foreach ($user as $key) {
    
     $this->send_notification_to_user(['user_id'=>$key->id, 'message'=>Auth::user()->name." Send You a message", 'url'=>'/Conversation/'.$user_sec->id.'/'.$user_sec->name]);
     }

}

       return $res;



    }
    
    
    
    
    
    
      public function send_app_message_to_user($data = [] ){
           //dd($data);
         date_default_timezone_set("asia/karachi");
         $return_array = [];

        $Notification_types = array($data['sender']=>$data['id'],$data['id']=> $data['sender']);
        foreach($Notification_types as $firstkey=>$secondKey){
            $user = User::find($firstkey);
            $user_sec = User::find($secondKey);
          //dd($user->name,$user_sec->name);

        $ch = curl_init();
        $carbon = Carbon::now();
        // echo $data['user_id'] . "\n" .Auth::id() . "    ";
          $data_json = '{"text": "'.$data['message'].'","user_id":"'.$data['sender'].'" ,"is_read":"0","link": "'.$data['link'].'","link_for_privider": "'.$data['link_for_privider'].'","username": "'.$user->name.'", "files": "'.$data['files'].'","file_type":"'.$data['file_type'].'", "date": "'.$carbon->format('d-m-Y h:i A').'"}';
            // dd($data);
            array_push($return_array, [$secondKey => $data_json]);

        curl_setopt($ch, CURLOPT_URL, "https://jobportal2-903d9.firebaseio.com/user_id_".$secondKey."/messages/user_id_".$firstkey."/".$carbon->format('YmdGis').".json");
        // dd($data,$text,$link,$User_id,$notification_id,$lead_type);
        $server_key ='AIzaSyApzKmXOl1znu4NK4OODtH6as4LhfFxgF4';
        $headers = array(
            'Content-Type:application/json',
        'Authorization:key='.$server_key
        );
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
        $res = curl_exec($ch);
        $httpCode = curl_getinfo($ch);
       // dd($res);
        curl_close($ch);
       }
       
       //dd($return_array);
       $user = User::find($data['id']);
              $this->send_notification_to_user(['user_id'=>$data['id'] , 'message'=>$user_sec->name." Sent You a message", 'url'=>'/Conversation/'.$user_sec->id.'/'.$user_sec->name, 'noti_type'=>'message_noti','title'=>'New Message' ,]);


       return $res;



    }

}
