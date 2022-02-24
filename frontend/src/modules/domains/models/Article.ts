import * as t from 'io-ts';

export const Article = t.type({
  title: t.string,
  content: t.string,
  status: t.boolean,
  createUserId: t.number,
  created_at: t.string,
  updated_at: t.string
});
export const ArticleList = t.array(Article);

export type IArticle = t.TypeOf<typeof Article>;
export type IArticleList = t.TypeOf<typeof ArticleList>;
