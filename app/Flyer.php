<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flyer extends Model
{
    protected $fillable = [
        'street',
        'city',
        'zip',
        'country',
        'state',
        'price',
        'description'
    ];

    /**
     * Scope query to those located at zip and street
     *
     * @param builder $query
     * @param string $zip
     * @param string $street
     * @return Builder $query
     */
    public static function locatedAt($zip, $street)
    {
        $street = str_replace('-', ' ', $street);

        return static::where(['zip' => $zip, 'street' => $street])->first();
    }
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function addPhoto(Photo $photo)
    {
        return $this->photos()->save($photo);
    }

    public function getPriceAttribute($price)
    {
        return '$'. number_format($price);
    }

}
