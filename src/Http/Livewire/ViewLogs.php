<?php

namespace nplesa\ViewLogs\Http\Livewire;

use Livewire\Component;
use nplesa\ActivityLog\Models\ActivityLog;

class ViewLogs extends Component
{
    public $logs;
    public $perPage;

    public function mount()
    {
        $this->perPage = config('viewlogs.per_page', 20);
        $this->logs = ActivityLog::latest()->take(\$this->perPage)->get();
    }

    public function render()
    {
        return view('viewlogs::livewire.view-logs', [
            'logs' => $this->logs
        ]);
    }
}
