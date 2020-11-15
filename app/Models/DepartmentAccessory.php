<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Model;

class DepartmentAccessory extends Model
{
    // protected $injectUniqueIdentifier = true;

    // use ValidatingTrait, UniqueUndeletedTrait;

    // protected $casts = [
    //     'department_id'   => 'integer',
    //     'accessory_id'  => 'integer',
    // ];

    // protected $rules = [
    //     'department_id'            => 'numeric|nullable',
    //     'accessory_id'            => 'numeric|nullable',
    // ];

    protected $fillable = [
        'department_id',
        'accessory_id',
    ];
    public function department()
    {
        return $this->belongsTo('\App\Models\Department', 'department_id');
    }

    public function accessory()
    {
        return $this->belongsTo('\App\Models\Accessory', 'accessory_id');
    }
}
