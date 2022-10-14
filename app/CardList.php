<?php

namespace App;

use App\Card;
use App\Board;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CardList extends Model
{
    protected $fillable = ['title', 'board_id'];

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class, 'list_id');
    }

    public function board(): BelongsTo
    {
        return $this->belongsTo(Board::class, 'board_id');
    }
}
