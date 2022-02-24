<?php

namespace Tests\Feature\Domain\Article;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Src\Domain\Article\Article;
use Src\Domain\Article\ArticleContent;
use Src\Domain\Article\ArticleTitle;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * @return void
     */
    public function testArticle()
    {
        $article = new Article(new ArticleTitle('テストタイトル'), new ArticleContent('テストコンテント'));
        $title = $article->getTitle();
        $content = $article->getContent();
        $created_at = $article->getCreatedAt();

        $this->assertEquals($title->getTitle(), 'テストタイトル');
        $this->assertEquals($content->getContent(), 'テストコンテント');
        $this->assertEquals($created_at, date('Y/m/d H:i:00'));
    }
}
