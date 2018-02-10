<?php


if ( ! function_exists('translate_seed_array'))
{
    /**
     * translate
     *
     * @param array $arrayToParse
     *
     * @return \array
     */
    function translate_seed_array($arrayToParse = [])
    {

        $client = new \GuzzleHttp\Client();

        $newArray = [];

        foreach ($arrayToParse as $item)
        {
            if (!isset($item['name_fr'])){
                echo 'No name_fr in array provided ';
                continue;
            }
            $res = $client->request('GET', 'https://translate.yandex.net/api/v1.5/tr.json/translate', [
                'query' => [
                    'key'  => config('services.yandex.translate_key'),
                    'text' => $item['name_fr'],
                    'lang' => 'ru-fr',
                ]
            ]);
            $item['name_fr'] = json_decode($res->getBody())->text[0];
            $newArray[] = $item;
        }


        return $newArray;
    }
}


if ( ! function_exists('str_for_search')) {

    /**
     * Подготавливает строку для поиска в БД
     * (для использования конструкции like)
     *
     * @param  string $str
     * @return string
     */
    function str_for_search( $str )
    {
        $trimmed = trim($str);

        return $trimmed !== '' ? '%' . $trimmed . '%' : '';
    }
}

if ( ! function_exists('log_i')) {
    /**  Log::info implementation
     *   Write logs
     *
     * @param string $message
     * @param array $context
     */
    function log_i( $message, array $context = [] )
    {
        Log::info($message, $context);
    }
}
if ( ! function_exists('log_e')) {
    /**  Log::error implementation
     *   Write logs
     *
     * @param string $message
     * @param array $context
     */
    function log_e( $message, array $context = [] )
    {
        Log::error($message, $context);
    }
}
if ( ! function_exists('log_w')) {
    /**  Log::warning implementation
     *   Write warning logs
     *
     * @param string $message
     * @param array $context
     */
    function log_w( $message, array $context = [] )
    {
        Log::warning($message, $context);
    }
}
