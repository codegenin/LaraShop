<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Mass fillable fields
    protected $fillable = [
        'name', 'title',
        'description','price',
        'category_id','brand_id',
        'created_at_ip', 'updated_at_ip'
    ];

    /**
     * A product belongs to a brand
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    /**
     * A product belongs to a category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
