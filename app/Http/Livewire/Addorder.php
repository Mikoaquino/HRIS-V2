<?php

namespace App\Http\Livewire;

use App\Models\TripOrders;
use Livewire\Component;

class Addorder extends Component
{
    protected $listeners = ['saveOrder' => 'saveOrder'];
    // protected $rules = [
    //     'tripOrder.*.desc' => 'required',
    //     'tripOrder.*.quantity' => 'required',
    //     'tripOrder.*.value' => 'required',
    //     'tripOrder.*.cost' => 'required',
    // ];

    public $tripOrders = [];

    public function render()
    {
        return view('livewire.addorder');
    }

    public function mount()
    {
        $this->tripOrders = TripOrders::all();
        $this->tripOrders = [
            ['desc' => '', 'quantity' => 1, 'value' => '', 'price' => 0]
        ];
    }

    public function saveOrder()
    {
        foreach ($this->tripOrders as $order) {
            TripOrders::create([
                'desc' => $order['desc'],
                'quantity' => $order['quantity'],
                'value' => $order['value'],
                'price' => $order['price'],
            ]);
        }
    }

    public function removeOrder($index)
    {
        array_splice($this->tripOrders, $index, 1);
        array_values($this->tripOrders);
    }

    public function add()
    {
        $this->tripOrders[] = ['desc' => '', 'quantity' => 1, 'value' => '', 'price' => 0];
    }
}
