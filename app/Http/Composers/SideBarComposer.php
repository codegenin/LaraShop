<?php namespace App\Http\Composers;

use App\Brand;
use App\Category;
use Illuminate\Contracts\View\View;

class SideBarComposer
{
    /**
     * Compose sidebar data to be displayed
     *
     * @internal param $view
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with([
                'categories' => $this->getCategories(),
                'brands' => $this->getBrands()
            ]);
    }

    /**
     * Get all categories data including brands
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    private function getCategories()
    {
        $categories = Category::with('brands')->get();
        return $categories;
    }

    /**
     * Get all brands
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    private function getBrands()
    {
        $brands = Brand::all();
        return $brands;
    }
}