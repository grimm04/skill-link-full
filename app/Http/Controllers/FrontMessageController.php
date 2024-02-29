<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Follow;
use App\Models\Conversation;
use App\Models\Message;
use App\Models\GroupMember;
use App\Models\Groups;
use App\Models\MessageGroup;
use App\Models\ConversationRecruit;
use App\Models\MessageRecruit;
use Auth; 
use DB;
use App\Employees; 
use App\User; 
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Notifications\UserMessage; 

class FrontMessageController extends Controller
{ 
    public function home() 
    {   
        $conversation = Conversation::with(array('one','two','message' => function($query){ 
                 $query->orderBy('messages.created_at', 'DESC');
                 $query->limit(1);
            }))->where('userone',Auth::user()->id)->orWhere('usertwo',Auth::user()->id)->orderBy('created_at','DESC')->get();
        // dd($conversation);
        $groups = GroupMember::with('groups')->where('userid',Auth::user()->id)->where('status',1)->get(); 
    	return view('frontmessages.home',compact('conversation','groups')); 
    }
    public function active()
    {
    	return view('frontmessages.active');
    }
    public function group()
    {   
        $groups = GroupMember::with('groups')->where('userid',Auth::user()->id)->where('status',1)->get(); 

    	return view('frontmessages.group' ,compact('groups'));
    }
    public function interview()
    {
    	return view('frontmessages.interview');
    }
    public function personal_chat($username = '')
    {    
        
       $user = Employee::where('username',$username)->first();
       return view('frontmessages.personal_chat',compact('username','user'));
    }
    public function personal_group($username = '')
    {
        $groups = Groups::where('ref_number',$username)->first();  
        if (!$groups) {
            abort(404);
        }
        $member = GroupMember::where('groupid',$groups->id)->limit(4)->get(); 
        $countmember = GroupMember::where('groupid',$groups->id)->count();  
    	return view('frontmessages.personal_group',compact('groups','countmember','member'));
    }

    public function online()
    {
        $time = date("Y-m-d H:i:s");
        // $follow = Employee::where('id',Auth::user()->id)->update(['real_time' => $time]);
        $online = Employee::find(Auth::user()->id);

        $online->real_time = $time;

        $online->save();

       return response()->json(['data' => $online]); 

    }
    public function list_online()
    {   
 
        $active = Follow::with('usersfollow')->where('userid',Auth::user()->id)->where('status','1')->get(); 
        // dd($active);
        return view('frontmessages.list_active',compact('active'));
    }

    public function list_message()
    {   
        
        $conversation_recruit = ConversationRecruit::with(array('one','two','messages' => function($query){ 
             $query->orderBy('message_recruits.created_at', 'DESC');
             $query->limit(1);
        }))->where('useremployee',Auth::user()->id)->orderBy('created_at','DESC')->get();

        $conversation = Conversation::with(array('one','two','message' => function($query){ 
             $query->orderBy('messages.created_at', 'DESC');
             $query->limit(1);
        }))->where('userone',Auth::user()->id)->orWhere('usertwo',Auth::user()->id)->orderBy('created_at','DESC')->get(); 

        return view('frontmessages.list_message',compact('conversation','conversation_recruit'));
    }

    public function messages($username='')
    {   
        $user = Employee::where('username',$username)->first();
        $conversation = Conversation::with('messages')->where('userone',Auth::user()->id)->where('usertwo',$user->id)->orderBy('created_at','DESC')->get();
        $conversation2 = Conversation::with('messages')->where('userone',$user->id)->where('usertwo',Auth::user()->id)->orderBy('created_at','DESC')->get();
        $message = '';
        $userwho = '';
        $conversationid = '';
        $userid = Auth::user()->id;
        if (count($conversation)>0) {
            $message = $conversation;
            $userwho = 'userone';
            $conversationid = $message[0]->id;
        }else if(count($conversation2)>0) {
            $message = $conversation2;
            $userwho = 'usertwo';
            $conversationid = $message[0]->id;
        }else { 
            $message = null; 
            $userwho = 'userone';
        } 
        // dd($message);
        
        return view('frontmessages.message',compact('message','userid','userwho','user','conversationid'));
    }

    public function messagegroup($username='')
    {   
        $group = Groups::where('ref_number',$username)->first();
        $conversation = MessageGroup::where('groupid',$group->id)->orderBy('created_at','ASc')->get();
        // dd($conversation); 
        return view('frontmessages.messagegroup',compact('conversation','group'));
    }

    public function getmessagerecruit($username='')
    {   

        $user = User::where('email',$username)->first(); 
        $conversation = ConversationRecruit::with('messages','one','two')->where('useremployee',Auth::user()->id)->where('useradmin',$user->id)->orderBy('created_at','DESC')->first();
        $message = '';
        $userwho = '';
        $userid = Auth::user()->id;
        // if (count($conversation)>0) {
        //     $message = $conversation; 
        // }else {
        //     $conversationcreate = new ConversationRecruit; 
        //     $conversationcreate->useradmin = Auth::user()->id;
        //     $conversationcreate->useremployee = $user->id;
        //     $conversationcreate->name = Auth::user()->id.''.$user->id; 
        //     $conversationcreate->save();

        //     $message = $conversationcreate;  
        // } 
        // $sidebarprofile = User::where('id',$user->id)->first(); 

        // dd($conversation->messages); 
        return view('frontmessages.messagerecruit',compact('conversation','user'));
    }

    public function messagesave(Request $request)
    {    
        // Validator::make($request->all(), [
        //     'msg'     => 'required',  
        // ])->validate();   
 
        $validator = Validator::make($request->all(), [
           'msg'     => 'required'
        ]);

         if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        if ($request->conversationid != null) {
            $status = 'lama';
            $message = Message::create(['userfrom' => Auth::user()->id  ,'userto' => $request->userto,'conversationid' => $request->conversationid,'msg' => $request->msg,'status'=>1]);
        }else {
            $status = 'baru';
            $conversation = new Conversation;  
            $conversation->userone = Auth::user()->id;  
            $conversation->usertwo = $request->userto;  
            $conversation->name = Auth::user()->id .''. $request->userto;  
            $conversation->save();  
            $message = Message::create(['userfrom' => Auth::user()->id  ,'userto' => $request->userto,'conversationid' => $conversation->id,'msg' => $request->msg,'status'=>1]);
        }

        $getnotif = DB::table('notifications')
            ->where('notifiable_id', $request->userto) 
            ->where('read_at', null) 
            ->where('type', 'App\Notifications\UserMessage') 
            ->first();
      
        if (count($getnotif) != 0) {
            $decode = json_decode($getnotif->data); 
            if ($decode->id != Auth::user()->id) {
                $mess    = Employees::find(Auth::user()->id);
                $user    = Employees::find($request->userto);
                $user->notify(new UserMessage($mess));
            }
            
        }else {
            $mess    = Employees::find(Auth::user()->id);
            $user    = Employees::find($request->userto);
            $user->notify(new UserMessage($mess));
        }
       

        // $message = Message::create(['userfrom' => Auth::user()->id  ,'userto' => $request->userto,'conversationid' => $request->conversationid,'msg' => $request->msg,'status'=>1]);
        return response()->json(['data' => true,'status'=> $status] ,200);  
        
    }
    public function messagesavephoto(Request $request)
    {    
        // dd($request->all());
        Validator::make($request->all(), [
            'photochat'     => 'image|mimes:jpg,png',  
        ])->validate(); 
        
        if ($request->hasFile('photochat')) { 
            $filenamefile = time().''.$request->photochat->getClientOriginalName(); 
            $tes = $request->photochat->move(public_path('message_images'),$filenamefile);   
            $message = Message::create(['userfrom' => Auth::user()->id ,
                                        'userto' => $request->userto,
                                        'conversationid' => $request->conversationid,
                                        'images' => $filenamefile,
                                        'status'=>1]); 
        }   
         return Redirect::back(); 
    }

    public function messagegroupsave(Request $request)
    {    
         $validator = Validator::make($request->all(), [
           'msg'     => 'required'
        ]);

        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        $message = MessageGroup::create(['userid' => Auth::user()->id  ,'groupid' => $request->groupid,'msg' => $request->msg,'status'=>1]);
        return response()->json(['data' => $message] ,200);  
        
    }
    public function messagegroupphoto(Request $request)
    {    
        // dd($request->all());
        Validator::make($request->all(), [
            'photochat'     => 'image|mimes:jpg,png',  
        ])->validate(); 
        
        if ($request->hasFile('photochat')) { 
            $filenamefile = time().''.$request->photochat->getClientOriginalName(); 
            $tes = $request->photochat->move(public_path('message_images'),$filenamefile);   
            $message = MessageGroup::create(['userid' => Auth::user()->id , 
                                        'groupid' => $request->groupid,
                                        'images' => $filenamefile,
                                        'status'=>1]); 
        }   
        return redirect()->route('message_home');
    }


    public function message_delete(Request $request)
    {   

        if ($request->type == 'personal') {
            $unfollow = Message::where('conversationid',$request->id);  
            $unfollow->forceDelete();

            $unfollow = Conversation::where('id',$request->id);  
            $unfollow->forceDelete(); 
        } 
       
        return response()->json(['data' => true,'type'=>$request->all() ] ,200);  
    }


    public function messagerecruitsave(Request $request)
    {    
         $validator = Validator::make($request->all(), [
           'msg'     => 'required'
        ]);

         if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }

        if ($request->conversationid != null) {
            $status = 'lama';
            $message = MessageRecruit::create(['userfrom' => Auth::user()->id  ,'userto' => $request->userto,'conversationid' => $request->conversationid,'msg' => $request->msg,'status'=>1]);
        }else {
            $status = 'baru';
            $conversation = new ConversationRecruit;  
            $conversation->userone = Auth::user()->id;  
            $conversation->usertwo = $request->userto;  
            $conversation->name = Auth::user()->id .''. $request->userto;  
            $conversation->save();  
            $message = MessageRecruit::create(['userfrom' => Auth::user()->id  ,'userto' => $request->userto,'conversationid' => $conversation->id,'msg' => $request->msg,'status'=>1]);
        } 
 
        return response()->json(['data' => true,'status'=> $status] ,200);  
        
    }
    public function messagerecruitphoto(Request $request)
    {    
        // dd($request->all());
        Validator::make($request->all(), [
            'photochat'     => 'image|mimes:jpg,png',  
        ])->validate(); 
        
         if ($request->hasFile('photochat')) { 
            $filenamefile = time().''.$request->photochat->getClientOriginalName(); 
            $tes = $request->photochat->move(public_path('message_images'),$filenamefile);   
            $message = MessageRecruit::create(['userfrom' => Auth::user()->id ,
                                        'userto' => $request->userto,
                                        'conversationid' => $request->conversationid,
                                        'images' => $filenamefile,
                                        'status'=>1]); 
        }   
         return Redirect::back(); 
    }


    public function message_recruit_delete(Request $request)
    {   

        if ($request->type == 'personal') {
            $unfollow = MessageRecruit::where('conversationid',$request->id);  
            $unfollow->forceDelete();

            $unfollow = MessageRecruit::where('id',$request->id);  
            $unfollow->forceDelete(); 
        } 
       
        return response()->json(['data' => true,'type'=>$request->all() ] ,200);  
    }
}
