<?php


namespace App\Support\Traits;


trait ResetLivewireFieldValidationBag
{

    public function updated($name, $value): void
    {
        if (!empty($this->fields()) && in_array($name, $this->fields(), true)) {
            $this->resetErrorBag($name);
        }
    }
}
