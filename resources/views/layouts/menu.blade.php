<li class="treeview menu-open">
    <a href="#">
    <i class="fa fa-user"></i> <span>Members</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ Request::is('employees*') ? 'active' : '' }}">
            <a href="{!! route('employees.index') !!}"><i class="fa fa-edit"></i><span>Employees</span></a>
        </li>

        <li class="{{ Request::is('martials*') ? 'active' : '' }}">
            <a href="{!! route('martials.index') !!}"><i class="fa fa-edit"></i><span>Martials</span></a>
        </li>

        <li class="{{ Request::is('follows*') ? 'active' : '' }}">
            <a href="{!! route('follows.index') !!}"><i class="fa fa-edit"></i><span>Follows</span></a>
        </li>

        <li class="{{ Request::is('subcribes*') ? 'active' : '' }}">
            <a href="{!! route('subcribes.index') !!}"><i class="fa fa-edit"></i><span>Subcribes</span></a>
        </li>

        <li class="{{ Request::is('industries*') ? 'active' : '' }}">
            <a href="{!! route('industries.index') !!}"><i class="fa fa-edit"></i><span>Industries</span></a>
        </li>

        <li class="{{ Request::is('experiences*') ? 'active' : '' }}">
            <a href="{!! route('experiences.index') !!}"><i class="fa fa-edit"></i><span>Experiences</span></a>
        </li>

        <li class="{{ Request::is('employeskills*') ? 'active' : '' }}">
            <a href="{!! route('employeskills.index') !!}"><i class="fa fa-edit"></i><span>Employeskills</span></a>
        </li>

        <li class="{{ Request::is('endorsments*') ? 'active' : '' }}">
            <a href="{!! route('endorsments.index') !!}"><i class="fa fa-edit"></i><span>Endorsments</span></a>
        </li>

        <li class="{{ Request::is('employeendorsments*') ? 'active' : '' }}">
            <a href="{!! route('employeendorsments.index') !!}"><i class="fa fa-edit"></i><span>Employe endorsments</span></a>
        </li>

        <li class="{{ Request::is('certificates*') ? 'active' : '' }}">
            <a href="{!! route('certificates.index') !!}"><i class="fa fa-edit"></i><span>Certificates</span></a>
        </li>

        <li class="{{ Request::is('education*') ? 'active' : '' }}">
            <a href="{!! route('education.index') !!}"><i class="fa fa-edit"></i><span>Education</span></a>
        </li>

        <li class="{{ Request::is('timelines*') ? 'active' : '' }}">
            <a href="{!! route('timelines.index') !!}"><i class="fa fa-edit"></i><span>Timelines</span></a>
        </li>

        <li class="{{ Request::is('tickets*') ? 'active' : '' }}">
            <a href="{!! route('tickets.index') !!}"><i class="fa fa-edit"></i><span>Tickets</span></a>
        </li>

        <li class="{{ Request::is('medicals*') ? 'active' : '' }}">
            <a href="{!! route('medicals.index') !!}"><i class="fa fa-edit"></i><span>Medicals</span></a>
        </li>

        <li class="{{ Request::is('interests*') ? 'active' : '' }}">
            <a href="{!! route('interests.index') !!}"><i class="fa fa-edit"></i><span>Interests</span></a>
        </li>

        <li class="{{ Request::is('duties*') ? 'active' : '' }}">
            <a href="{!! route('duties.index') !!}"><i class="fa fa-edit"></i><span>Duties</span></a>
        </li>

        <li class="{{ Request::is('fitDuties*') ? 'active' : '' }}">
            <a href="{!! route('fitDuties.index') !!}"><i class="fa fa-edit"></i><span>Fit Duties</span></a>
        </li>

        <li class="{{ Request::is('employeDuties*') ? 'active' : '' }}">
            <a href="{!! route('employeDuties.index') !!}"><i class="fa fa-edit"></i><span>Employe Duties</span></a>
        </li>

        <li class="{{ Request::is('addtionals*') ? 'active' : '' }}">
            <a href="{!! route('addtionals.index') !!}"><i class="fa fa-edit"></i><span>Addtionals</span></a>
        </li>
    </ul>
</li>

<li class="treeview menu-open">
    <a href="#">
    <i class="fa fa-building"></i> <span>Companies</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('companies*') ? 'active' : '' }}">
            <a href="{!! route('companies.index') !!}"><i class="fa fa-edit"></i><span>Companies</span></a>
        </li>

        <li class="{{ Request::is('typeCompanies*') ? 'active' : '' }}">
            <a href="{!! route('typeCompanies.index') !!}"><i class="fa fa-edit"></i><span>Type Companies</span></a>
        </li>

        <li class="{{ Request::is('companySpecialities*') ? 'active' : '' }}">
            <a href="{!! route('companySpecialities.index') !!}"><i class="fa fa-edit"></i><span>Company Specialities</span></a>
        </li>

        <li class="{{ Request::is('companyIndustries*') ? 'active' : '' }}">
            <a href="{!! route('companyIndustries.index') !!}"><i class="fa fa-edit"></i><span>Company Industries</span></a>
        </li>
    </ul>
</li>

<li class="treeview menu-open">
    <a href="#">
    <i class="fa fa-briefcase"></i> <span>Jobs</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu"> 
        <li class="{{ Request::is('jobs*') ? 'active' : '' }}">
            <a href="{!! route('jobs.index') !!}"><i class="fa fa-edit"></i><span>Jobs</span></a>
        </li>
    </ul>
</li>

<li class="treeview menu-open">
    <a href="#">
    <i class="fa fa-edit"></i> <span>Post Articles</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('postArticles*') ? 'active' : '' }}">
            <a href="{!! route('postArticles.index') !!}"><i class="fa fa-edit"></i><span>Post Articles</span></a>
        </li>

        <li class="{{ Request::is('imageArticles*') ? 'active' : '' }}">
            <a href="{!! route('imageArticles.index') !!}"><i class="fa fa-edit"></i><span>Image Articles</span></a>
        </li>

        <li class="{{ Request::is('commentArticles*') ? 'active' : '' }}">
            <a href="{!! route('commentArticles.index') !!}"><i class="fa fa-edit"></i><span>Comment Articles</span></a>
        </li>

        <li class="{{ Request::is('likeArticles*') ? 'active' : '' }}">
            <a href="{!! route('likeArticles.index') !!}"><i class="fa fa-edit"></i><span>Like Articles</span></a>
        </li>

        <li class="{{ Request::is('hideArticles*') ? 'active' : '' }}">
            <a href="{!! route('hideArticles.index') !!}"><i class="fa fa-edit"></i><span>Hide Articles</span></a>
        </li>

        <li class="{{ Request::is('reportArticles*') ? 'active' : '' }}">
            <a href="{!! route('reportArticles.index') !!}"><i class="fa fa-edit"></i><span>Report Articles</span></a>
        </li>

        <li class="{{ Request::is('postVideos*') ? 'active' : '' }}">
            <a href="{!! route('postVideos.index') !!}"><i class="fa fa-edit"></i><span>Post Videos</span></a>
        </li>
    </ul>
</li>

<li class="treeview menu-open">
    <a href="#">
    <i class="fa fa-users"></i> <span>Groups</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ Request::is('groups*') ? 'active' : '' }}">
            <a href="{!! route('groups.index') !!}"><i class="fa fa-edit"></i><span>Groups</span></a>
        </li>

    </ul>
</li>

<li class="treeview menu-open">
    <a href="#">
    <i class="fa fa-question"></i> <span>FAQ</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('surveys*') ? 'active' : '' }}">
            <a href="{!! route('surveys.index') !!}"><i class="fa fa-edit"></i><span>Surveys</span></a>
        </li>

        <li class="{{ Request::is('questions*') ? 'active' : '' }}">
            <a href="{!! route('questions.index') !!}"><i class="fa fa-edit"></i><span>Questions</span></a>
        </li>

        <li class="{{ Request::is('mcSurveys*') ? 'active' : '' }}">
            <a href="{!! route('mcSurveys.index') !!}"><i class="fa fa-edit"></i><span>Mc Surveys</span></a>
        </li>

        <li class="{{ Request::is('mcAnswers*') ? 'active' : '' }}">
            <a href="{!! route('mcAnswers.index') !!}"><i class="fa fa-edit"></i><span>Mc Answers</span></a>
        </li>

        <li class="{{ Request::is('packageAnswers*') ? 'active' : '' }}">
            <a href="{!! route('packageAnswers.index') !!}"><i class="fa fa-edit"></i><span>Package Answers</span></a>

        <li class="{{ Request::is('essayQuestions*') ? 'active' : '' }}">
            <a href="{!! route('essayQuestions.index') !!}"><i class="fa fa-edit"></i><span>Essay Questions</span></a>
        </li>

        <li class="{{ Request::is('essayAnswers*') ? 'active' : '' }}">
            <a href="{!! route('essayAnswers.index') !!}"><i class="fa fa-edit"></i><span>Essay Answers</span></a>
        </li>
        
        <li class="{{ Request::is('imageSurveys*') ? 'active' : '' }}">
            <a href="{!! route('imageSurveys.index') !!}"><i class="fa fa-edit"></i><span>Image Surveys</span></a>
        </li>

        <li class="{{ Request::is('userSurveys*') ? 'active' : '' }}">
            <a href="{!! route('userSurveys.index') !!}"><i class="fa fa-edit"></i><span>User Surveys</span></a>
        </li>
        
        <li class="{{ Request::is('pushNotif*') ? 'active' : '' }}">
            <a href="{!! route('pushNotif') !!}"><i class="fa fa-edit"></i><span>Push Notification</span></a>
        </li>
        </li>
    </ul>
</li>

<li class="treeview menu-open">
    <a href="#">
    <i class="fa fa-cogs"></i> <span>Settings</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('trades*') ? 'active' : '' }}">
            <a href="{!! route('trades.index') !!}"><i class="fa fa-edit"></i><span>Trades</span></a>
        </li>

        <li class="{{ Request::is('childTrades*') ? 'active' : '' }}">
            <a href="{!! route('childTrades.index') !!}"><i class="fa fa-edit"></i><span>Child Trades</span></a>
        </li>

        <li class="{{ Request::is('levels*') ? 'active' : '' }}">
            <a href="{!! route('levels.index') !!}"><i class="fa fa-edit"></i><span>Levels</span></a>
        </li>

        <li class="{{ Request::is('provinces*') ? 'active' : '' }}">
            <a href="{!! route('provinces.index') !!}"><i class="fa fa-edit"></i><span>Provinces</span></a>
        </li>
    </ul>
</li>

<li class="treeview menu-open">
    <a href="#">
    <i class="fa fa-envelope"></i> <span>Messages</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('messages*') ? 'active' : '' }}">
            <a href="{!! route('messages.index') !!}"><i class="fa fa-edit"></i><span>Messages</span></a>
        </li>

        <li class="{{ Request::is('messageGroups*') ? 'active' : '' }}">
            <a href="{!! route('messageGroups.index') !!}"><i class="fa fa-edit"></i><span>Message Groups</span></a>
        </li>

        <li class="{{ Request::is('conversations*') ? 'active' : '' }}">
            <a href="{!! route('conversations.index') !!}"><i class="fa fa-edit"></i><span>Conversations</span></a>
        </li>
    </ul>
</li>

<!--<li class="{{ Request::is('genders*') ? 'active' : '' }}">
    <a href="{!! route('genders.index') !!}"><i class="fa fa-edit"></i><span>Genders</span></a>
</li>

<li class="{{ Request::is('jobTypes*') ? 'active' : '' }}">
    <a href="{!! route('jobTypes.index') !!}"><i class="fa fa-edit"></i><span>Job Types</span></a>
</li>

<li class="{{ Request::is('jobPositions*') ? 'active' : '' }}">
    <a href="{!! route('jobPositions.index') !!}"><i class="fa fa-edit"></i><span>Job Positions</span></a>
</li>
 

<li class="{{ Request::is('jobApplyUsers*') ? 'active' : '' }}">
    <a href="{!! route('jobApplyUsers.index') !!}"><i class="fa fa-edit"></i><span>Job Apply Users</span></a>
</li>

<li class="{{ Request::is('jobSettingUsers*') ? 'active' : '' }}">
    <a href="{!! route('jobSettingUsers.index') !!}"><i class="fa fa-edit"></i><span>Job Setting Users</span></a>
</li>

<li class="{{ Request::is('jobSettingUsers*') ? 'active' : '' }}">
    <a href="{!! route('jobSettingUsers.index') !!}"><i class="fa fa-edit"></i><span>Job Setting Users</span></a>
</li>

<li class="{{ Request::is('jobSettingPositions*') ? 'active' : '' }}">
    <a href="{!! route('jobSettingPositions.index') !!}"><i class="fa fa-edit"></i><span>Job Setting Positions</span></a>
</li>

<li class="{{ Request::is('jobSettingTypes*') ? 'active' : '' }}">
    <a href="{!! route('jobSettingTypes.index') !!}"><i class="fa fa-edit"></i><span>Job Setting Types</span></a>
</li>

<li class="{{ Request::is('jobSettingLocations*') ? 'active' : '' }}">
    <a href="{!! route('jobSettingLocations.index') !!}"><i class="fa fa-edit"></i><span>Job Setting Locations</span></a>
</li>

<li class="{{ Request::is('jobSkills*') ? 'active' : '' }}">
    <a href="{!! route('jobSkills.index') !!}"><i class="fa fa-edit"></i><span>Job Skills</span></a>
</li>

<li class="{{ Request::is('packages*') ? 'active' : '' }}">
    <a href="{!! route('packages.index') !!}"><i class="fa fa-edit"></i><span>Packages</span></a>
</li>

<li class="{{ Request::is('packageDetails*') ? 'active' : '' }}">
    <a href="{!! route('packageDetails.index') !!}"><i class="fa fa-edit"></i><span>Package Details</span></a>
</li>

<li class="{{ Request::is('packagePrices*') ? 'active' : '' }}">
    <a href="{!! route('packagePrices.index') !!}"><i class="fa fa-edit"></i><span>Package Prices</span></a>
</li>-->

<!-- Group

        <li class="{{ Request::is('groupLevels*') ? 'active' : '' }}">
            <a href="{!! route('groupLevels.index') !!}"><i class="fa fa-edit"></i><span>Group Levels</span></a>
        </li>

        <li class="{{ Request::is('groupTypes*') ? 'active' : '' }}">
            <a href="{!! route('groupTypes.index') !!}"><i class="fa fa-edit"></i><span>Group Types</span></a>
        </li>

        <li class="{{ Request::is('groupMembers*') ? 'active' : '' }}">
            <a href="{!! route('groupMembers.index') !!}"><i class="fa fa-edit"></i><span>Group Members</span></a>
        </li>

-->

<!-- Jobs

        <li class="{{ Request::is('specialities*') ? 'active' : '' }}">
            <a href="{!! route('specialities.index') !!}"><i class="fa fa-edit"></i><span>Specialities</span></a>
        </li>

        <li class="{{ Request::is('skillNeeds*') ? 'active' : '' }}">
            <a href="{!! route('skillNeeds.index') !!}"><i class="fa fa-edit"></i><span>Skill Needs</span></a>
        </li>

        <li class="{{ Request::is('typeJobs*') ? 'active' : '' }}">
            <a href="{!! route('typeJobs.index') !!}"><i class="fa fa-edit"></i><span>Type Jobs</span></a>
        </li>

        <li class="{{ Request::is('employmentStatuses*') ? 'active' : '' }}">
            <a href="{!! route('employmentStatuses.index') !!}"><i class="fa fa-edit"></i><span>Employment Statuses</span></a>
        </li>

-->






<<<<<<< HEAD
<li class="{{ Request::is('jobDurations*') ? 'active' : '' }}">
    <a href="{!! route('jobDurations.index') !!}"><i class="fa fa-edit"></i><span>Job Durations</span></a>
</li>

<li class="{{ Request::is('jobDurations*') ? 'active' : '' }}">
    <a href="{!! route('jobDurations.index') !!}"><i class="fa fa-edit"></i><span>Job Durations</span></a>
</li>

<li class="{{ Request::is('jobRotations*') ? 'active' : '' }}">
    <a href="{!! route('jobRotations.index') !!}"><i class="fa fa-edit"></i><span>Job Rotations</span></a>
</li>

<li class="{{ Request::is('durationJobs*') ? 'active' : '' }}">
    <a href="{!! route('durationJobs.index') !!}"><i class="fa fa-edit"></i><span>Duration Jobs</span></a>
</li>

<li class="{{ Request::is('rotationJobs*') ? 'active' : '' }}">
    <a href="{!! route('rotationJobs.index') !!}"><i class="fa fa-edit"></i><span>Rotation Jobs</span></a>
</li>

<li class="{{ Request::is('conversationRecruits*') ? 'active' : '' }}">
    <a href="{!! route('conversationRecruits.index') !!}"><i class="fa fa-edit"></i><span>Conversation Recruits</span></a>
</li>

<li class="{{ Request::is('messageRecruits*') ? 'active' : '' }}">
    <a href="{!! route('messageRecruits.index') !!}"><i class="fa fa-edit"></i><span>Message Recruits</span></a>
</li>

<li class="{{ Request::is('conversationAdmins*') ? 'active' : '' }}">
    <a href="{!! route('conversationAdmins.index') !!}"><i class="fa fa-edit"></i><span>Conversation Admins</span></a>
</li>

<li class="{{ Request::is('messageAdmins*') ? 'active' : '' }}">
    <a href="{!! route('messageAdmins.index') !!}"><i class="fa fa-edit"></i><span>Message Admins</span></a>
</li>

<li class="{{ Request::is('graders*') ? 'active' : '' }}">
    <a href="{!! route('graders.index') !!}"><i class="fa fa-edit"></i><span>Graders</span></a>
</li>

<li class="{{ Request::is('typeGraders*') ? 'active' : '' }}">
    <a href="{!! route('typeGraders.index') !!}"><i class="fa fa-edit"></i><span>Type Graders</span></a>
</li>

<li class="{{ Request::is('hires*') ? 'active' : '' }}">
    <a href="{!! route('hires.index') !!}"><i class="fa fa-edit"></i><span>Hires</span></a>
=======
<li class="{{ Request::is('postedTimes*') ? 'active' : '' }}">
    <a href="{!! route('postedTimes.index') !!}"><i class="fa fa-edit"></i><span>Posted Times</span></a>
</li>

<li class="{{ Request::is('profileSearchSettings*') ? 'active' : '' }}">
    <a href="{!! route('profileSearchSettings.index') !!}"><i class="fa fa-edit"></i><span>Profile Search Settings</span></a>
</li>

<li class="{{ Request::is('jobSearchSettings*') ? 'active' : '' }}">
    <a href="{!! route('jobSearchSettings.index') !!}"><i class="fa fa-edit"></i><span>Job Search Settings</span></a>
</li>

<li class="{{ Request::is('jobSearchSettingTitles*') ? 'active' : '' }}">
    <a href="{!! route('jobSearchSettingTitles.index') !!}"><i class="fa fa-edit"></i><span>Job Search Setting Titles</span></a>
</li>

<li class="{{ Request::is('jobSearchSettingLocations*') ? 'active' : '' }}">
    <a href="{!! route('jobSearchSettingLocations.index') !!}"><i class="fa fa-edit"></i><span>Job Search Setting Locations</span></a>
</li>

<li class="{{ Request::is('jobSearchSettingCompanies*') ? 'active' : '' }}">
    <a href="{!! route('jobSearchSettingCompanies.index') !!}"><i class="fa fa-edit"></i><span>Job Search Setting Companies</span></a>
</li>

<li class="{{ Request::is('jobSearchSettingTypes*') ? 'active' : '' }}">
    <a href="{!! route('jobSearchSettingTypes.index') !!}"><i class="fa fa-edit"></i><span>Job Search Setting Types</span></a>
>>>>>>> fc016d5425a6ea9d02a65be47cd2735fb2c5317d
</li>

