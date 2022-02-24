import { articleService } from '@/modules/domains/provider';
import { Backdrop, CircularProgress } from '@mui/material';
import { useRouter } from 'next/router';
import { ParsedUrlQueryInput } from 'querystring';

interface IArticleNumber extends ParsedUrlQueryInput {
  id: number;
}

const ArticleDetail = (): JSX.Element => {
  const router = useRouter();
  const articleId = router.query as IArticleNumber;
  const articleDetailHooks = articleService.useGetArticleDetail(articleId.id);

  return (
    <>
      <Backdrop open={articleDetailHooks.isLoading} color={'gray'}>
        <CircularProgress color="inherit" />
      </Backdrop>
      <p>{articleDetailHooks.data?.title}</p>
      <p>{articleDetailHooks.data?.content}</p>
    </>
  );
};

export default ArticleDetail;
