<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];


    public function adminlte_image()
    {
    }

    public function adminlte_desc()
    {
        $user = DB::table('sessions as s')->select('s.user_id')->where('s.user_id', '!=', 'null')->get();
        $userid = $user[0]->user_id;
        if ($userid !== null) {
            $empleado = Empleado::find($userid);
            $rolid = $empleado->idrol;
            $rol = Role::find($rolid);
            $rolname = $rol->name;
            return $rolname;
        } else {
            return '';
        }
    }

    public function adminlte_profile_url()
    {
    }
}
