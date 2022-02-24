import { ArticleRepository } from 'modules/domains/article/ArticleRepository';
import { ArticleService } from 'modules/domains/article/ArticleService';
import { ArticleTranslator } from 'modules/domains/article/ArticleTranslator';
import { axiosInstance } from 'modules/utils/HttpClient';

const articleRepository = new ArticleRepository(axiosInstance);
const articleTranslator = new ArticleTranslator();
export const articleService = new ArticleService(
  articleRepository,
  articleTranslator
);
