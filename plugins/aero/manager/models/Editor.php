<?php namespace Aero\Manager\Models;

use Model;

/**
 * Model
 */
class Editor extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'aero_manager_editor';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
    
    protected $jsonable = ['slider', 'about_faqs', 'services'];
    
    public $attachOne = [
        'about_image1' => 'System\Models\File',
        'about_image2' => 'System\Models\File',
        'about_bg'     => 'System\Models\File',
        'services_bg'  => 'System\Models\File',
        'services_bg2' => 'System\Models\File',
    ];    
}
