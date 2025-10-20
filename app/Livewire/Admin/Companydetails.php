<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\company_detail;
use Livewire\Attributes\Layout;
class Companydetails extends Component
{
    #[Layout('components.layouts.app')]
    public function render()
    {
        $company_details = company_detail::get();
        return view('livewire.admin.companydetails',compact('company_details'));
    }
}
