<?php

namespace Tests\Feature\Domain\Article;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Src\Domain\Article\Article;
use Src\Domain\Article\ArticleContent;
use Src\Domain\Article\ArticleTitle;
use Src\Infra\ArticleRepositoryInfra;
use Src\Infra\Eloquent\ArticleEloquent;
use Tests\TestCase;

class ArticleServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCreateSuccess()
    {
        $article = new Article(new ArticleTitle('testtest'), new ArticleContent('testxontent'));
        $eloquent = new ArticleEloquent();
        $repo = new ArticleRepositoryInfra($eloquent);
        $repo->insert($article);
        // TODO: テスト用DBに差し替え、findで期待値通りの値が入っている事を確認する
    }
}
