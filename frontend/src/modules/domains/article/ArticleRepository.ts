import { Axios, AxiosResponse } from 'axios';
import { IArticle, IArticleList } from '../models';

export interface IArticleRepository {
  getArticleList(): Promise<AxiosResponse<IArticleList>>;
  getArticleDetail(id: number): Promise<AxiosResponse<IArticle>>;
}

export class ArticleRepository implements IArticleRepository {
  private axiosInstance: Axios;

  constructor(axiosInstance: Axios) {
    this.axiosInstance = axiosInstance;
  }

  getArticleList(): Promise<AxiosResponse<IArticleList>> {
    return this.axiosInstance.get('api/articles');
  }

  getArticleDetail(id: number): Promise<AxiosResponse<IArticle>> {
    return this.axiosInstance.get(`api/articles/${id}`);
  }
}
