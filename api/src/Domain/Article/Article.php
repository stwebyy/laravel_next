<?php

declare(strict_types=1);

namespace Src\Domain\Article;

final class Article
{
    /**
     * @var ArticleTitle
     */
    private $title;

    /**
     * @var ArticleContent
     */
    private $content;

    /**
     * @var string
     */
    private $created_at;

    /**
     * @var string
     */
    private $updated_at;

    /**
     * @var integer
     */
    private $createUserId;

    /**
     * @var bool
     */
    private $status;

    public function __construct(ArticleTitle $title, ArticleContent $content, $status = false)
    {
        $this->title = $title;
        $this->content = $content;
        $this->created_at = date('Y/m/d H:i:00');
        $this->status = $status;
    }

    public function getTitle(): ArticleTitle
    {
        return $this->title;
    }

    public function getContent(): ArticleContent
    {
        return $this->content;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }

    public function getUpdatedAt(): string
    {
        return $this->updated_at;
    }

    public function getCreateUserId(): int
    {
        return $this->createUserId;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }
}
