<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use HasRoles;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'uid',
        'name',
        'phone',
        'email',
        'password',
        'text_password',
        'profile_photo_path',
        'status',
    ];

    public function product(){
        return $this->has(Product::class);
    }
    public function post(){
        return $this->has(Post::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function deposit(){
        return $this->hasMany(Deposit::class);
    }
    public function profit(){
        return $this->hasMany(Profit::class);
    }

    // custom function
    public static function getPermissionGroups(){
        $permission_groups = DB::table('permissions')
            ->select('group_name as name')
            ->groupBy('group_name')
            ->get();

        return $permission_groups;
    }

    public static function getPermissionGroupName($groupName){
        $getPermissionGroupName = DB::table('permissions')
            ->select('name')
            ->where('group_name',$groupName)
            ->get();

        return $getPermissionGroupName;
    }
}
