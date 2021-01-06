<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamAmount extends Model
{
    /**
     *  LT = Less Than
     *  GT = Greater Than
     *  GTE = Greater Than or Equal
     */

    public const LT_10 = 1;

    public const GTE_10_AND_LT_100 = 2;

    public const GTE_100_AND_LT_1000 = 3;

    public const GTE_1000 = 4;

    protected $table = 'teams_amounts';
}
