<?php namespace Aero\Manager\Models;

use Model;

/**
 * Model
 */
class Packs extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'aero_manager_packs';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    public $attachOne = [
        'bg' => 'System\Models\File',
    ];   
    
    public $attachMany = [
        'gallery' => 'System\Models\File',
    ];   
    
    protected $jsonable = ['itinerary'];
}
