<?php

namespace App\Orchid\Screens;

use App\Models\Vote;
use App\Orchid\Layouts\VoteListLayout;
use Orchid\Screen\Screen;

class VoteScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'votes' => Vote::latest()->get(),
        ];
    }

    public function description(): ?string
    {
        return 'A list of all votes.';
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Lista Votos';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [VoteListLayout::class];
    }
}
