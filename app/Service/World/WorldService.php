<?php


namespace App\Service\World;


use App\Contracts\World\WorldServiceInterface;
use App\World;
use Illuminate\Support\Facades\Auth;

/**
 * Class WorldService
 * @package App\Service\World
 */
class WorldService implements WorldServiceInterface
{
    /** @inheritDoc */
    public function loadWorlds(int $userId, int $paginate = 5)
    {
        $worldFactory = app(World::class );
        return $worldFactory->where('user_id', $userId)->with('parties')->paginate($paginate);
    }
}
