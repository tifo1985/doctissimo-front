<?php

namespace App\Api;

final class ArticleApi extends AbstractRequest
{
    private const URI = '/api/articles';

    public function getList(): \stdClass
    {
        $response = $this->get(self::URI);

        return json_decode($response->getResponse()->getBody()->getContents());
    }

    /**
     * @param array $args
     *
     * @return \stdClass
     */
    public function getDetails(int $id): \stdClass
    {
        $response = $this->get(self::URI . '/' . $id);

        return json_decode($response->getResponse()->getBody()->getContents());
    }
}