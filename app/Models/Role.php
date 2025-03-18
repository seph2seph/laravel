<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;
class Role extends Model
{
    use HasFactory;
    use Notifiable;

    protected $table = 'roles';
    protected $primaryKey = 'role_id';

    protected $fillable = [
        'role_type',
    ];

    public function role(): BelongsTo
    {
        return $this->belongsTo(related: Role::class, foreignKey:  'role_id');
    }
}
