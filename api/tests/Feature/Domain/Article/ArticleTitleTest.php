<?php

namespace Tests\Feature\Domain\Article;

use Exception;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Src\Domain\Article\ArticleTitle;
use Tests\TestCase;

class ArticleTitleTest extends TestCase
{
    /**
     * @return void
     */
    public function testArticleTitle()
    {
        $title = new ArticleTitle('タイトル');

        $this->assertEquals($title->getTitle(), 'タイトル');
    }

    /**
     * @return void
     */
    public function testArticleTitleTooLong()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('登録できるタイトルは50文字未満です');
        $tooLongTitle = str_repeat('タイトル', 13);
        new ArticleTitle($tooLongTitle);
    }
}
