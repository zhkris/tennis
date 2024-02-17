<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Duel extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'player_one_id' => 'integer',
        'player_two_id' => 'integer',
    ];

    public function championship(): BelongsTo
    {
        return $this->belongsTo(
            related: Championship::class,
            foreignKey: 'championship'
        );
    }

    public function playerOne(): BelongsTo
    {
        return $this->belongsTo(
            related: Player::class,
            foreignKey: 'player_one_id'
        );
    }

    public function playerTwo(): BelongsTo
    {
        return $this->belongsTo(
            related: Player::class,
            foreignKey: 'player_two_id'
        );
    }
}
