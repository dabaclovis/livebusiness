<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userinformation extends Model
{
    use HasFactory;

    protected $table = 'userinformations';

    protected $guarded = [];

    /**
     * Get the user that owns the Userinformation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
