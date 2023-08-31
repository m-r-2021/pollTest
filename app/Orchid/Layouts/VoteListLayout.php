<?php

namespace App\Orchid\Layouts;

use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class VoteListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'votes';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('User', __('Usuario'))
                ->sort(),
            TD::make('Candidate', __('Opcion 1'))
                ->sort(),
            TD::make('candidate2', __('Opcion 2'))
                ->sort(),
            TD::make('candidate3', __('Opcion 3'))
                ->sort(),
            TD::make('candidate4', __('Opcion 4'))
                ->sort(),
            TD::make('candidate5', __('Opcion 5'))
                ->sort(),
            TD::make('candidate6', __('Opcion 6'))
                ->sort(),
            TD::make('candidate7', __('Opcion 7'))
                ->sort(),
            TD::make('candidate8', __('Opcion 8'))
                ->sort(),
            TD::make('created_at', __('Fecha'))
                ->sort(),   
        ];
    }
}
