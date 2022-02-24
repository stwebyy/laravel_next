<?php

declare(strict_types=1);

namespace Src\Infra;

use Illuminate\Support\Collection;
use Src\Domain\Article\Article;
use Src\Domain\Article\ArticleRepository;
use Src\Infra\Eloquent\ArticleEloquent;

class ArticleRepositoryInfra implements ArticleRepository
{
    private $eloquent;

    public function __construct(ArticleEloquent $eloquent)
    {
        $this->eloquent = $eloquent;
    }

    public function findAll(bool $desc = false): Collection
    {
        return $this->eloquent->get()->sortBy('created_at');
    }

    public function findById(int $id): Article
    {
        return $this->eloquent->find($id);
    }

    public function insert(Article $article): void
    {
        $this->eloquent->fill([
            'title' => $article->getTitle()->getTitle(),
            'content' => $article->getContent()->getContent(),
            'created_at' => $article->getCreatedAt(),
            'status' => $article->getStatus()
        ])->save();
    }

    public function update(Article $article): void
    {
        $this->eloquent->fill([
            'title' => $article->getTitle()->getTitle(),
            'content' => $article->getContent()->getContent(),
            'updated_at' => $article->getUpdatedAt(),
            'status' => $article->getStatus()
        ])->save();
    }
}
