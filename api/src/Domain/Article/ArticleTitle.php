<?php

declare(strict_types=1);

namespace Src\Domain\Article;

use Exception;

final class ArticleTitle
{
    /**
     * @var string
     */
    private $title;

    public function __construct(string $title)
    {
        if (strlen($title) > 50) {
            throw new Exception('登録できるタイトルは50文字未満です');
        }
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
