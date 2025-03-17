<?php

namespace App\Http\Livewire;

use App\Models\TripsModel;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Audit;
use Carbon\Carbon;
use Livewire\WithPagination;

class Trips extends Component
{
    public $admin, $client, $buaccount;
    public $filter, $sort, $badgeColor;
    public $deleteId, $day, $time, $deletedClient;
    public $sortColumn = 'created_at', $sortBy = 'desc', $statusFilter = '', $typeFilter = '', $puFilter = '', $ddFilter = '';
    protected $rules = [
        'client' => 'required',
        'buaccount' => 'required',
    ];

    public $search = '';

    use WithPagination;

    public function mount()
    {
        $this->admin = Auth::user()->name;
    }

    public function getStatus($status)
    {
        $color = "badge-primary";

        if ($status == 'RU' || $status == 'PE') {
            $color = "badge-ru";
        } else if ($status == 'CO' || $status == 'AP') {
            $color = "badge-co";
        } else if ($status == 'CA' || $status == 'DE') {
            $color = "badge-ca";
        } else if ($status == 'NA' || $status == 'WA') {
            $color = "badge-na";
        } else if ($status == 'BI') {
            $color = "badge-bi";
        } else {
            $color = "badge-fr";
        }

        return $color;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;

        $this->dispatchBrowserEvent('showModal');
    }

    public function deleteTrip()
    {
        $trip = TripsModel::find($this->deleteId);
        $this->deletedClient = $trip->client;
        $trip->delete();

        $today = Carbon::now();
        $this->day = $today->format('l');
        $this->time = $today->format('h:i A');

        Audit::create([
            'user' => $this->admin,
            'logs' => 'Deleted a trip from ' . $this->deletedClient,
            'day' => $this->day,
            'time' => $this->time,
        ]);

        $this->dispatchBrowserEvent('notif');
    }

    public function sortColumnBy($column)
    {
        $this->sortColumn = $column;
    }

    public function render()
    {
        $trips = TripsModel::orderBy($this->sortColumn, $this->sortBy)->get();

        if ($this->statusFilter != '') {
            $trips = TripsModel::where('status', 'like', "$this->statusFilter")
                ->orderBy($this->sortColumn, $this->sortBy)
                ->get();
        }
        if ($this->typeFilter != '') {
            $trips = TripsModel::where('type', 'like', "$this->typeFilter")
                ->orderBy($this->sortColumn, $this->sortBy)
                ->get();
        }
        if ($this->puFilter != '') {
            $trips = TripsModel::where('pick_up_date', 'like', "%{$this->puFilter}%")
                ->orderBy($this->sortColumn, $this->sortBy)
                ->get();
        }
        if ($this->ddFilter != '') {
            $trips = TripsModel::where('delivery_date', 'like', "%{$this->ddFilter}%")
                ->orderBy($this->sortColumn, $this->sortBy)
                ->get();
        }
        if ($this->statusFilter != '' && $this->typeFilter != '') {
            $trips = TripsModel::where([
                ['status', $this->statusFilter],
                ['type', $this->typeFilter],
            ])
                ->orderBy($this->sortColumn, $this->sortBy)
                ->get();
        }
        if ($this->puFilter != '' && $this->ddFilter != '') {
            $trips = TripsModel::where([
                ['pick_up_date', $this->puFilter],
                ['delivery_date', $this->ddFilter],
            ])
                ->orderBy($this->sortColumn, $this->sortBy)
                ->get();
        }
        if ($this->statusFilter != '' && $this->puFilter != '' && $this->ddFilter != '') {
            $trips = TripsModel::where([
                ['status', $this->statusFilter],
                ['pick_up_date', $this->puFilter],
                ['delivery_date', $this->ddFilter],
            ])
                ->orderBy($this->sortColumn, $this->sortBy)
                ->get();
        }
        if ($this->typeFilter != '' && $this->puFilter != '' && $this->ddFilter != '') {
            $trips = TripsModel::where([
                ['type', $this->typeFilter],
                ['pick_up_date', $this->puFilter],
                ['delivery_date', $this->ddFilter],
            ])
                ->orderBy($this->sortColumn, $this->sortBy)
                ->get();
        }
        if ($this->statusFilter != '' && $this->typeFilter != '' && $this->puFilter != '' && $this->ddFilter != '') {
            $trips = TripsModel::where([
                ['status', $this->statusFilter],
                ['type', $this->typeFilter],
                ['pick_up_date', $this->puFilter],
                ['delivery_date', $this->ddFilter],
            ])
                ->orderBy($this->sortColumn, $this->sortBy)
                ->get();
        }

        if (strlen($this->search) > 2) {
            $trips = TripsModel::where('consignee', 'like', "%{$this->search}%")
                ->orWhere('client', 'like', "%{$this->search}%")
                ->orWhere('buaccount', 'like', "%{$this->search}%")
                ->orWhere('waybillno', 'like', "%{$this->search}%")
                ->orWhere('plate_no', 'like', "%{$this->search}%")
                ->orWhere('origin', 'like', "%{$this->search}%")
                ->orWhere('destination', 'like', "%{$this->search}%")
                ->orderBy($this->sortColumn, $this->sortBy)
                ->get();
        }

        return view('livewire.trips', ['trips' => $trips]);
    }
}
