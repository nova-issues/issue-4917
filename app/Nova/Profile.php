<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Country;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Timezone;
use Laravel\Nova\Http\Requests\NovaRequest;

class Profile extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Profile::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('aaa')->readonly(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),
            Text::make('aaa')->readonly()->hideFromIndex(),

            BelongsTo::make('User')
                ->searchable(),
            Select::make('Notification')->options([
                'mail' => 'E-mail Notification',
                'push' => 'Push Notification',
            ])->displayUsingLabels()
            ->nullable()
            ->searchable(),
            Country::make('Country')->nullable()->searchable(),
            Timezone::make('Timezone')->nullable()->searchable(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
