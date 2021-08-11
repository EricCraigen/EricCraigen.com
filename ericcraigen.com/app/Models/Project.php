<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $primaryKey = 'cardIndex';
    protected $fillable = [
        'cardIndex',
        'featuredProject',
        'featuredProjectFrontDescriptionString',
        'featuredProjectBackDescriptionString',
        'projectName',
        'minifiedBackgroundImage',
        'projectURL',
        'gitHubRepoURL',
        'toolTipString',
        'toolTipIconClassNameString',
        'projectOverlay',
        'projectOverlayAlt',
        'projectGIF',
        'projectGIFAlt',
        'contributorsNameString',
        'subProjectsNameString',
        'gitHubRepoURLString',
        'contributorsLinkString',
        'contributionsString',
        'projectDescriptionString'
    ];
}
