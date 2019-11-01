<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\Category\CategoryRepository;

class CategoryComposer
{
    /**
     * The user repository implementation.
     *
     * @var CategoryRepository
     */
    protected $category;

    /**
     * Create a new Category composer.
     *
     * @param  CategoryRepository  $category
     * @return void
     */
    public function __construct(CategoryRepository $category)
    {
        // Dependencies automatically resolved by service container...
        $this->category = $category;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $category = $this->category->all();
        $category = $this->category->sortToBar($category);
        $view->with('categories', $category);
    }
}
