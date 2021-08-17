<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    protected array $categoryList = [
        [
            'id' => 1,
            'title' => 'Interesting'
        ],
        [
            'id' => 2,
            'title' => 'Economy'
        ],
        [
            'id' => 3,
            'title' => 'Science'
        ],
        [
            'id' => 4,
            'title' => 'Sport'
        ],
        [
            'id' => 5,
            'title' => 'Culture'
        ]
    ];

    protected array $newsList = [
        [
            'id' => 1,
            'title' => 'News 1',
            'description' => 'News 1',
            'category' => 'Interesting'
        ],
        [
            'id' => 2,
            'title' => 'News 2',
            'description' => 'News 2',
            'category' => 'Interesting'
        ],
        [
            'id' => 3,
            'title' => 'News 3',
            'description' => 'News 3',
            'category' => 'Interesting'
        ],
        [
            'id' => 4,
            'title' => 'News 4',
            'description' => 'News 4',
            'category' => 'Interesting'
        ],
        [
            'id' => 5,
            'title' => 'News 5',
            'description' => 'News 5',
            'category' => 'Economy'
        ],
        [
            'id' => 6,
            'title' => 'News 6',
            'description' => 'News 6',
            'category' => 'Economy'
        ],
        [
            'id' => 7,
            'title' => 'News 7',
            'description' => 'News 7',
            'category' => 'Economy'
        ],
        [
            'id' => 8,
            'title' => 'News 8',
            'description' => 'News 8',
            'category' => 'Economy'
        ],
        [
            'id' => 9,
            'title' => 'News 9',
            'description' => 'News 9',
            'category' => 'Science'
        ],
        [
            'id' => 10,
            'title' => 'News 10',
            'description' => 'News 10',
            'category' => 'Science'
        ],
        [
            'id' => 11,
            'title' => 'News 11',
            'description' => 'News 11',
            'category' => 'Science'
        ],
        [
            'id' => 12,
            'title' => 'News 12',
            'description' => 'News 12',
            'category' => 'Science'
        ],
        [
            'id' => 13,
            'title' => 'News 13',
            'description' => 'News 13',
            'category' => 'Sport'
        ],
        [
            'id' => 14,
            'title' => 'News 14',
            'description' => 'News 14',
            'category' => 'Sport'
        ],
        [
            'id' => 15,
            'title' => 'News 15',
            'description' => 'News 15',
            'category' => 'Sport'
        ],
        [
            'id' => 16,
            'title' => 'News 16',
            'description' => 'News 16',
            'category' => 'Sport'
        ],
        [
            'id' => 17,
            'title' => 'News 17',
            'description' => 'News 17',
            'category' => 'Culture'
        ],
        [
            'id' => 18,
            'title' => 'News 18',
            'description' => 'News 18',
            'category' => 'Culture'
        ],
        [
            'id' => 19,
            'title' => 'News 19',
            'description' => 'News 19',
            'category' => 'Culture'
        ],
        [
            'id' => 20,
            'title' => 'News 20',
            'description' => 'News 20',
            'category' => 'Culture'
        ]
    ];

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
