<?php

declare(strict_types=1);

namespace Src\Domain\Article;

use Illuminate\Support\Collection;

interface ArticleRepository
{
    public function findAll(bool $desc = false): Collection;
    public function findById(int $id): Article;
    public function insert(Article $article): void;
    public function update(Article $article): void;
}
