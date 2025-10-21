<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\Attributes\Validate;
use App\Models\company_detail;

class EditCompanydetails extends Component
{
    public $companydetailId;
    #[Validate('string|required')]
    public $name;
    #[Validate('string|required')]
    public $address_line_1;
    #[Validate('string|required')]
    public $address_line_2;
    #[Validate('string|nullable')]
    public $address_line_3;
    #[Validate('string|nullable')]
    public $logo;
    #[Validate('string|nullable')]
    public $mobile;

    public function mount(company_detail $companydetail)
    {
        $this->companydetailId = $companydetail->id;
        $this->name = $companydetail->name;

    }

    public function update()
    {
        $this->validate();
        $companydetail = company_detail::findOrFail($this->companydetailId);
        $companydetail->update([
            'name' => $this->name,
        ]);
        session()->flash('success', 'Company details updated successfully');
        return redirect(url('/admin/company-details'));
    }
    
    public function render()
    {
        return view('livewire.admin.edit-companydetails');
    }
}
