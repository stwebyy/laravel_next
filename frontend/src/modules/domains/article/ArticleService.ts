import { IArticle, IArticleList } from 'modules/domains/models';
import { useEffect, useState } from 'react';
import { IArticleRepository } from '.';
import { IArticleTranslator } from './ArticleTranslator';

interface IArticleService {
  useGetAllArticle(): { isLoading: boolean; data: IArticleList };
  useGetArticleDetail(id: number): {
    isLoading: boolean;
    data: IArticle | null;
  };
}

export class ArticleService implements IArticleService {
  private readonly repository: IArticleRepository;
  private readonly translator: IArticleTranslator;

  constructor(repository: IArticleRepository, translator: IArticleTranslator) {
    this.repository = repository;
    this.translator = translator;
  }
  public useGetAllArticle(): { isLoading: boolean; data: IArticleList } {
    const [isLoading, setIsLoading] = useState<boolean>(false);
    const [data, setData] = useState<IArticleList>([]);
    const onEvent = async () => {
      setIsLoading(true);
      await this.repository
        .getArticleList()
        .then((res) => {
          setData(res.data);
        })
        .catch((err: string) => {
          throw new Error(err);
        })
        .finally(() => {
          setIsLoading(false);
        });
    };

    // void onEvent();
    useEffect(() => {
      void onEvent();
    }, []);

    return { isLoading, data };
  }

  public useGetArticleDetail(id: number): {
    isLoading: boolean;
    data: IArticle | null;
  } {
    const [isLoading, setIsLoading] = useState<boolean>(false);
    const [data, setData] = useState<IArticle | null>(null);
    const onEvent = async () => {
      setIsLoading(true);
      await this.repository
        .getArticleDetail(id)
        .then((res) => {
          setData(res.data);
        })
        .catch((err: string) => {
          throw new Error(err);
        })
        .finally(() => {
          setIsLoading(false);
        });
    };

    // void onEvent();
    useEffect(() => {
      void onEvent();
    }, []);

    return { isLoading, data };
  }
}
