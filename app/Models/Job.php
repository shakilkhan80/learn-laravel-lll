<?php

namespace App\Models;

use Illuminate\Support\Arr;


class Job
{
    public static function all(): array
    {
        return [
            [
                'id'          => 1,
                'title'       => 'Job 1',
                'description' => 'Job 1 description',
                'salary'      => '10000',
            ],
            [
                'id'          => 2,
                'title'       => 'Job 21',
                'description' => 'Job 1 description',
                'salary'      => '30000',
            ],
            [
                'id'          => 3,
                'title'       => 'Job 14',
                'description' => 'Job 2 description',
                'salary'      => '40000',
            ],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        if (!$job) {
            abort(404);
        }
        return $job;
    }

}
