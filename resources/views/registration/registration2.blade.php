@extends('registration.app')
@section('content') 
<div id="registration" class="registration_multi registration_03">
        <div class="blur-grey width-40 size-md" id="placeholder-white">
            <form action="" class="width-80">
                <input type="text" placeholder="Address line" class="size-md">
                <input type="text" placeholder="Province and Country" class="size-md">
                <select name="" id="" class="size-md">
                    <option value="">Gender</option>
                    <option value="">Male</option>
                    <option value="">Female</option>
                </select>
                <input type="text" placeholder="Date of birth" class="size-md">
                <input type="text" placeholder="Marital Status" class="size-md">
                <input type="text" placeholder="Aboriginal" class="size-md">
                <input type="text" placeholder="Member of a visable minority" class="size-md">
                <input type="text" placeholder="Emergency Contacts" class="size-md">
                <center>
                    <a href="registration_04.html" class="btn size-md btn-yellow"">
                        CONTINUE
                    </a>
                    <!-- <button class="btn size-md btn-yellow">CONTINUE</button> -->
                </center>
            </form>
        </div>
    </div>
@endsection 