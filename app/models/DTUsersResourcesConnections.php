<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class DTUsersResourcesConnections extends CoreModel
{
    /**
     * @var table name
     */
    protected $table = 'dt_users_resources_connections';

    /**
     * @var tables fillables
     */
    protected $fillable = ['id', 'users_id', 'resources_id'];

    /**
     * @var bool
     */
    protected $updated_at = false;

}