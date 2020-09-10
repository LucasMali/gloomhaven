<?php


namespace App\Contracts\World;

/**
 * Interface WorldServiceInterface
 * @package App\Service\World\Api
 */
interface WorldServiceInterface
{
    /**
     * @param int $userId
     * @param int $paginate
     * @return mixed
     */
    public function loadWorlds(int $userId, int $paginate = 5);
}
