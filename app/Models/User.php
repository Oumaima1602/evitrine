<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'prenom',
        'email',
        'password',
    ];

    public function panier()
    {
        return $this->belongsTo(Panier::class);
    }
    public function users()  
    {  
        // Un article appartient à une ou plusieurs articles. 
        return $this->belongsToMany(Article::class);  
    } 



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
{
return $this->belongsToMany(Role::class);
}
/**
* @param string|array $roles
*/
public function authorizeRoles($roles)
{
if (is_array($roles)) {
return $this->hasAnyRole($roles) ||
abort(401, 'This action is unauthorized.');
}
return $this->hasRole($roles) ||
abort(401, 'This action is unauthorized.');
}
/**
* Check multiple roles
* @param array $roles
*/
public function hasAnyRole($roles)
{
return null !== $this->roles()->whereIn('name', $roles)->first();
}
/**
* Check one role
* @param string $role
*/
public function hasRole($role)
{
return null !== $this->roles()->where('name', $role)->first();
}



}


