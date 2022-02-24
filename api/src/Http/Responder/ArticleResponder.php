<?php

declare(strict_types=1);

namespace Src\Http\Responder;

use Illuminate\Http\JsonResponse;

class ArticleResponder
{
    public function response($data): JsonResponse
    {
        // TODO: エラーハンドリング
        return response()->json($data);
    }
}
