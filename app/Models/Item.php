<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'due_date'];

    /**
     * Get the user that owns the TODO list item.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $attributes = [
        'description' => 'Default description', // Set a default description value
    ];
}
