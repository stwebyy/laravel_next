<?php

namespace Src\Infra\Eloquent;

class ArticleEloquent extends Eloquent
{
    protected $table = 'articles';

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'created_at',
        'updated_at',
        'createUserId',
        'status',
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d'
    ];
}
