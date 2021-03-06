<?php namespace StudyDigital\Demorelationuser\Models;

use Model;

/**
 * Model
 */
class User extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'projects' => [ 
            'StudyDigital\Demorelationuser\Models\Project',
            'table' => 'studydigital_demorelationusers_project_users'
            ]
    ];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'studydigital_demorelationuser_users';
}