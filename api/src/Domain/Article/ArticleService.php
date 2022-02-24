<?php

declare(strict_types=1);

namespace Src\Domain\Article;

class ArticleService
{
    /**
     * @var ArticleRepository
     */
    private $articleRepository;

    public function __construct(ArticleRepository $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function findAll()
    {
        return $this->articleRepository->findAll();
    }

    public function findById(int $id)
    {
        return $this->articleRepository->findById($id);
    }

    public function create($title, $content)
    {
        $article = new Article(new ArticleTitle($title), new ArticleContent($content));
        $this->articleRepository->insert($article);
    }
}
