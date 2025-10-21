<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\company_detail;
use Livewire\Attributes\Layout;
class Companydetails extends Component
{
    #[Layout('components.layouts.app')]

    public $company_details_id;

    public function delete($id)
    {
        $company_details_id = company_detail::findOrFail($id);
        $company_details_id->delete();
        return redirect(url('/admin/company-details'))->with('success', 'Company details deleted successfully');
    }

    public function render()
    {
        $company_details = company_detail::all();
        return view('livewire.admin.companydetails',compact('company_details'));
    }
}
