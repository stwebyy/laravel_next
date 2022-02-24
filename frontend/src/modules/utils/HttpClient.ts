import axios from 'axios';

// 各メソッドで取得してきたレスポンスをio-tsのバリデーションでフィルタをかけると良い
export const axiosInstance = axios.create({
  baseURL: process.env.NEXT_PUBLIC_API_HOST,
  headers: {
    'X-Requested-With': 'XMLHttpRequest',
    'Access-Control-Allow-Origin': '*'
  },
  withCredentials: true
});
