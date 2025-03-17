<?php

namespace App\Http\Livewire;

use App\Models\TripsModel;
use App\Models\TripOrders;
use App\Models\Audit;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Tripedit extends Component
{
    public $origin, $destination, $originStreet, $originAddress, $originCity, $destiStreet, $destiAddress, $destiCity;
    public $waybillNo, $controlNo, $client, $buAccount, $consignee;
    public $pickUpDate, $puAAT, $puADT, $delDate, $delAAT, $delADT;
    public $plateNo, $driver, $helper, $driverNo, $helperNo, $fleet, $requestor, $tempRequirements;
    public $tripType, $tripStatus, $admin, $tripID;
    public $day, $time; //day and time for audit
    public $tripOrders;

    public function render()
    {
        return view('livewire.tripedit');
    }

    public function loadOrigin()
    {
        $this->originStreet = "3 Esperanza St";
        $this->originAddress = "G/F, Greenbelt, Manila";
        $this->originCity = "1200 Makati";
    }

    public function loadDestination()
    {
        $this->destiStreet = "C2HV+8G6";
        $this->destiAddress = " Cupang, Muntinlupa, Metro Manila";
        $this->destiCity = "1781 Muntinlupa";
    }

    public function loadDriver()
    {
        $this->driver = "Jose Delafuente";
        $this->helper = "Juan Santiago";
        $this->driverNo = "09234214511";
        $this->helperNo = "09234151514";
    }

    public function updateTrip()
    {
        // $trips = TripsModel::find($this->tripID)->update([
        //     'waybillno' => $this->waybillNo,
        // ]);

        // $today = Carbon::now();
        // $this->day = $today->format('l');
        // $this->time = $today->format('h:i A');

        // Audit::create([
        //     'user' => $this->admin,
        //     'logs' => 'Updated a trip for ' . $this->client,
        //     'day' => $this->day,
        //     'time' => $this->time,
        // ]);

        $this->dispatchBrowserEvent('notif');
    }

    public function mount($id)
    {
        $this->admin = Auth::user()->name;
        $trips = TripsModel::where('id', $id)->first();
        $this->tripID  = $trips->id;
        $this->waybillNo  = $trips->waybillno;
        $this->pickUpDate  = $trips->pick_up_date;
        $this->puAAT = $trips->pu_actual_at;
        $this->puADT = $trips->pu_actual_td;
        $this->delDate = $trips->delivery_date;
        $this->delAAT = $trips->dd_actual_at;
        $this->delADT = $trips->dd_actual_td;
        $this->origin = $trips->origin;
        $this->client = $trips->client;
        $this->buAccount = $trips->buaccount;
        $this->consignee = $trips->consignee;
        $this->destination = $trips->destination;
        $this->fleet = $trips->fleet_type;
        $this->plateNo = $trips->plate_no;
        $this->driver = $trips->driver;
        $this->driverNo = $trips->contact_no_driver;
        $this->helper = $trips->helper;
        $this->helperNo = $trips->contact_no_helper;
        $this->tripType = $trips->type;
        $this->tripStatus = $trips->status;
        $this->controlNo = $trips->controlno;
        $this->requestor = $trips->requestor;
        $this->tempRequirements = $trips->temp_requirements;

        $this->loadOrigin();
        $this->loadDestination();
        $this->loadDriver();

        $this->tripOrders = TripOrders::all();
    }
}
