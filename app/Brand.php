<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    // Mass fillable fields
    protected $fillable   = [
        'name', 'create_at_ip', 'updated_at_ip'
    ];

    /**
     * Brand has many product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    /**
     * Brand belongs to a category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
