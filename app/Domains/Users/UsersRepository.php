<?php

namespace App\Domains\Users;

class UsersRepository
{
    /**
     * @param bool $paginate
     * @param int $take
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll($paginate = false, $take = 15)
    {
        $query = User::query();

        if ($paginate) {
            return $query->paginate($take);
        }

        if (is_int($take)) {
           $query->take($take);
        }

        return $query->get();
    }
}