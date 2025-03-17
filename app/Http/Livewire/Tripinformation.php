<?php

namespace App\Http\Livewire;

use App\Models\TripsModel;
use Livewire\Component;
use App\Models\Audit;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class Tripinformation extends Component
{
    protected $listeners = ['saveTrip' => 'saveTrip'];

    public $origin, $destination, $originAddress, $destiAddress;
    public $waybillNo, $controlNo, $client, $buAccount, $consignee;
    public $pickUpDate, $puAAT, $puADT, $delDate, $delAAT, $delADT;
    public $plateNo, $driver, $helper, $driverNo, $helperNo, $fleet, $requestor, $tempRequirements;
    public $tripType, $tripStatus;
    public $admin, $day, $time;

    public function saveTrip()
    {
        TripsModel::create([
            'pick_up_date' => $this->pickUpDate,
            'pu_actual_at' => $this->puAAT,
            'pu_actual_td' => $this->puADT,
            'delivery_date' => $this->delDate,
            'dd_actual_at' => $this->delAAT,
            'dd_actual_td' => $this->delADT,
            'origin' => $this->origin,
            'client' => $this->client,
            'buaccount' => $this->buAccount,
            'consignee' => $this->consignee,
            'destination' => $this->destination,
            'fleet_type' => $this->fleet,
            'plate_no' => $this->plateNo,
            'driver' => $this->driver,
            'contact_no_driver' => $this->driverNo,
            'helper' => $this->helper,
            'contact_no_helper' => $this->helperNo,
            'type' => $this->tripType,
            'status' => $this->tripStatus,
            'waybillno' => $this->waybillNo,
            'controlno' => $this->controlNo,
            'requestor' => $this->requestor,
            'temp_requirements' => $this->tempRequirements,
        ]);

        $today = Carbon::now();
        $this->day = $today->format('l');
        $this->time = $today->format('h:i A');

        Audit::create([
            'user' => $this->admin,
            'logs' => 'Registered a trip for ' . $this->client,
            'day' => $this->day,
            'time' => $this->time,
        ]);
    }

    public function loadOrigin()
    {
        $this->originAddress = "G/F, Greenbelt, Manila";
    }

    public function loadDestination()
    {
        $this->destiAddress = " Cupang, Muntinlupa, Metro Manila";
    }

    public function loadDriver()
    {
        $this->driver = "Jose Delafuente";
        $this->helper = "Juan Santiago";
        $this->driverNo = "09234214511";
        $this->helperNo = "09234151514";
    }

    public function mount()
    {
        $this->admin = Auth::user()->name;
    }

    public function render()
    {
        return view('livewire.tripinformation');
    }
}
