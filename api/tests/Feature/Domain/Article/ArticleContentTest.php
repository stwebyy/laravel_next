<?php

namespace Tests\Feature\Domain\Article;

use Exception;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Src\Domain\Article\ArticleContent;
use Tests\TestCase;

class ArticleContentTest extends TestCase
{
    /**
     * @return void
     */
    public function testArticleContent()
    {
        $content = new ArticleContent('コンテント');

        $this->assertEquals($content->getContent(), 'コンテント');
    }

    /**
     * @return void
     */
    public function testArticleContentToolong()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('内容は10000文字以内で入力してください');
        $tooLongContent = str_repeat('コンテント', 2001);
        new ArticleContent($tooLongContent);
    }
}
