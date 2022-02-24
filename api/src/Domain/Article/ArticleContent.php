<?php

declare(strict_types=1);

namespace Src\Domain\Article;

use Exception;

final class ArticleContent
{
    /**
     * @var string
     */
    private $content;

    public function __construct(string $content)
    {
        if (strlen($content) > 10000) {
            throw new Exception('内容は10000文字以内で入力してください');
        }
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
