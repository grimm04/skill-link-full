<?php

namespace App\Models;

use Eloquent as Model;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

/**
 * Class Employee
 * @package App\Models
 * @version January 5, 2018, 8:34 am UTC
 *
 * @property string fname
 * @property string lname
 * @property string email
 * @property string phone
 * @property string address
 * @property date birth
 * @property string photo
 * @property string emergency_contact_1
 * @property string emergency_contact_2
 * @property string certifiction_number
 * @property integer provinceid
 * @property integer genderid
 * @property integer tradeid
 * @property integer child_tradeid
 * @property integer maritialid
 * @property integer certifictionoriginid
 */
class Employee extends Model
{
    use SoftDeletes;
    use Notifiable;
    use Searchable;
    public $table = 'employees';
    

    protected $dates = ['deleted_at','real_time'];


    public $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'address',
        'birth',
        'photo',
        'emergency_contact_1',
        'emergency_contact_2',
        'certifiction_number',
        'provinceid',
        'genderid',
        'tradeid',
        'child_tradeid',
        'maritialid',
        'certifictionoriginid',
        'employe_status',
        'web',
        'about',
        'fb',
        'twitter',
        'ig','mdname','status_share','real_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'fname' => 'string',
        'lname' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'birth' => 'date',
        'photo' => 'string',
        'emergency_contact_1' => 'string',
        'emergency_contact_2' => 'string',
        'certifiction_number' => 'string',
        'provinceid' => 'integer',
        'genderid' => 'integer',
        'tradeid' => 'integer',
        'child_tradeid' => 'integer',
        'martialid' => 'integer',
        'certifictionoriginid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fname' => 'required',
        'lname' => 'required'
    ];

    public function province()
    {
        return $this->belongsTo('App\Models\Province', 'provinceid', 'id');
    }

    public function follower()
    {
        return $this->hasMany('App\Models\Follow', 'followid');
    } 

     public function follows() 
    {
        return $this->belongsToMany('App\Models\Follow','userid');
    }

    public function follow($userId) 
    {
        $this->follows()->attach($userId);
        return $this;
    }

    public function unfollow($userId)
    {
        $this->follows()->detach($userId);
        return $this;
    }

    public function isFollowing($userId) 
    {
        return (boolean) $this->follows()->where('followid', $userId)->first(['id']);
    }
    
    public function chtrade() 
    {
        return $this->belongsTo('App\Models\ChildTrade','child_tradeid');
    }

    public function gender() 
    {
        return $this->belongsTo('App\Models\Gender','genderid');
    }

    public function martial() 
    {
        return $this->belongsTo('App\Models\Martial','martialid');
    }

    public function status() 
    {
        return $this->belongsTo('App\Models\EmploymentStatus','employe_status');
    }
    
    public function job() 
    {
        return $this->hasMany('App\Models\JobApplyUser','userid');
    }

    public function network() 
    {
        return $this->hasMany('App\Models\Follow','followid');
    }

    public function experience() 
    {
        return $this->hasMany('App\Models\Experience','userid');
    }

    public function certificate() 
    {
        return $this->hasMany('App\Models\Certificate','userid');
    }
    public function education() 
    {
        return $this->hasMany('App\Models\Education','userid');
    }

    public function ticket() 
    {
        return $this->hasMany('App\Models\Ticket','userid');
    }
    public function addtional() 
    {
        return $this->hasMany('App\Models\Addtional','userid');
    }

    public function timeline() 
    {
        return $this->hasMany('App\Models\Timeline','userid');
    }

    public function skill() 
    {
        return $this->hasMany('App\Models\Employeskill','userid');
    }

    public function endorsment() 
    {
        return $this->hasMany('App\Models\Employeendorsment','userid');
    }

    public function fitduties() 
    {
        return $this->hasMany('App\Models\EmployeDuty','userid');
    }

     public function medical() 
    {
        return $this->hasMany('App\Models\Medical','userid');
    }

    public function interest() 
    {
        return $this->belongsTo('App\Models\Interest','id','userid');
    }
    public function company() 
    {
        return $this->belongsTo('App\Models\Interest','id','userid');
    }
}
