<?php

namespace App\Models;

use CodeIgniter\Model;

class CmsModel extends Model
{
    protected $table      = 'cms_data';
    protected $primaryKey = 'id';

}

//CREATE TABLE `jns_l9`.`lrvl_cms_data`( `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT, `heading` VARCHAR(200), `detail_data` TEXT, `created_at` DATETIME, `updated_at` DATETIME, PRIMARY KEY (`id`) ) ENGINE=INNODB; 