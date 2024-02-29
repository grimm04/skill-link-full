@extends('registration.app')
@section('content') 
        <div id="registration" class="registration_multi registration_03">
        <div class="blur-grey width-40 size-md" id="placeholder-white">
            <form action="" class="width-80">
                <h4>What certification do you have? Where did you go for school?</h4>
                <input type="text" placeholder="Trade ( Skill set, occaupation )" class="size-md">
                <select name="" id="">
                    <option value="">Current Level</option>
                    <option value="">level 1</option>
                    <option value="">level 2</option>
                </select>
                <input type="text" placeholder="Certification number" class="size-md">
                <input type="text" placeholder="Origin of certification" class="size-md"><br><br><br><br>
                <center>
                    <a href="registration_05.html" class="btn size-md btn-yellow"> CONTINUE</a><br><br>
                    <!-- <button class="btn size-md btn-yellow">CONTINUE</button><br><br> -->
                    <a href="registration_05.html" class="btn size-md btn-black">SKIP</a> 
                </center>
            </form>
        </div>
    </div> 
@endsection 
  