<?php

declare(strict_types=1);

namespace Src\Http\Action;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Src\Domain\Article\ArticleRepository;
use Src\Domain\Article\ArticleService;
use Src\Http\Responder\ArticleResponder;

class ArticleIndexAction extends Controller
{
    /**
     * @var ArticleRepository
     */
    private $articleRepository;

    /**
     * @var ArticleResponder
     */
    private $articleResponder;

    public function __construct(ArticleRepository $articleRepository, ArticleService $articleService, ArticleResponder $articleResponder)
    {
        $this->articleRepository = $articleRepository;
        $this->articleService = $articleService;
        $this->articleResponder = $articleResponder;
    }

    public function __invoke(): JsonResponse
    {
        return $this->articleResponder->response($this->articleService->findAll());
    }
}
