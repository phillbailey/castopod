<?php

declare(strict_types=1);

namespace App\Views\Components\Forms;

class Radio extends FormComponent
{
    protected array $props = ['isChecked'];

    protected array $casts = [
        'isChecked' => 'boolean',
    ];

    protected bool $isChecked = false;

    public function render(): string
    {
        $radioInput = form_radio(
            [
                'id'    => $this->value,
                'name'  => $this->name,
                'class' => 'text-accent-base bg-elevated border-contrast border-3 w-6 h-6',
            ],
            $this->value,
            old($this->name) ? old($this->name) === $this->value : $this->isChecked,
        );

        $this->mergeClass('inline-flex items-center');

        return <<<HTML
            <label {$this->getStringifiedAttributes()}>{$radioInput}<span class="ml-2">{$this->slot}</span></label>
        HTML;
    }
}
