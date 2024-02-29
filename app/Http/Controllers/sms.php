$data = $request->all(); 
              $data['verification_code']  = $user->verification_code;  
                  Mail::send('emails.email', $data, function($message) use ($data)
                    {
                        $message->from('no-reply@site.com', "Skill Link Registration Success");
                        $message->subject("Welcome to site name");
                        $message->to($data['email']);
                    });
            } elseif ($register_type == 'phone') { 
              
                $otp = rand(100000, 999999);
                $MSG91 = new MSG91(); 

                $msg91Response = $MSG91->sendSMS($otp,$request['email']);

                if($msg91Response['error']){
                    $response['error'] = 1;
                    $response['message'] = $msg91Response['message'];
                    $response['loggedIn'] = 1;
                }else{ 
                    $response['error'] = 0;
                    $response['message'] = 'Your OTP is created.';
                    $response['OTP'] = $otp;
                    $response['loggedIn'] = 1; 
                } 
                echo json_encode($response); 