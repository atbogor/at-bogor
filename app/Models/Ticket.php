<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $with = ['ticketcategory'];

    public function scopeFilter($query, array $filters)
{
    $query->when($filters['search'] ?? false, function ($query, $search) {
        return $query->where(function ($query) use ($search) {
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->orWhere('location', 'like', '%' . $search . '%');
        });
    });

    $query->when($filters['ticketcategory'] ?? false, function ($query, $ticketcategory) {
        return $query->whereHas('ticketcategory', function ($query) use ($ticketcategory) {
            $query->where('slug', $ticketcategory);
        });
    });
}

    public function ticketcategory(){
        return $this->belongsTo(TicketCategory::class, 'category_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    
}
