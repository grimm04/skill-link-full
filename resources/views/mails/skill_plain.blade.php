<html>
    <head>
    </head>
    <body>
        <table align="center" border="0" cellpadding="0" cellspacing="0" class="m_-3334097098004038450container" lang="container" style="max-width:600px; color: black;" width="100%" >
            
            <tr>
                <td style="background-color:#233D5A; padding:0px"> 
                    <a href ="skill-link.net">
                        <center> <img src="http://skill.link/landing_page/image/Skill-Link-GLOSSY-BLACK-BGD.png" style="max-width: 200px;"> </center>
                    </a>
                 </td>
                </td>
            </tr> 
            <tr>
                <td>
                    <center>
                    <p style="font-size:22px; color: black">
                        Hello <b>{{$demo->receiver}}</b>
                    </p>
                    <p style="font-size:16px; color: black">    
                        Thanks for signing up.
                    </p>
                    <p style="font-size:16px; color: black">   
                       Please confirm your email address to get full access Skill-Link.
                    </p> 
                    <a href="{!! url('register/verify', ['code'=>$demo->link]) !!} ">
                    <p bgcolor="#008CC9" align="center" style="padding:6px 16px;word-wrap:break-word;color:#ffffff;white-space:normal!important;font-weight:500;font-size:16px;border-color:#15c;background-color:#15c;border-radius:5px;border-style:solid;text-align:center; width: 120px; text-decoration:none;"> Confirm Email </p>
                    </a>
                    <p style="font-size:16px; color: black">   
                       We are the  leader in verified construction professionals.  
                    </p> 
                    </center>
                </td>
            </tr>

            <tr style="background-color: #233D5A; color: white;">
                <td>
                    <p>
                        <center> Copyright &copy; <a href="skill-link.net" style="text-decoration:none; color:white"> Skill-Link</a> </center>
                    </p>
                </td>
            </tr>
        </table>
    </body>
    </html>