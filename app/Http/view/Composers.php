<?
namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\ServiceCategory;

class ServiceCategoryComposer
{
    public function compose(View $view)
    {
        $services = ServiceCategory::all();
        $view->with('services', $services);
    }
}
