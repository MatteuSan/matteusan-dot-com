<?php

namespace App\Http\Livewire;

use Illuminate\Support\Arr;
use Livewire\Component;

class ProbabilityDistCalculator extends Component
{

    public $input = [];
    public $count = 0;

    public function mount() {
        $this->input = [
            [
                'x' => '0',
                'f' => '1'
            ]
        ];
    }

    public function addInput() {
        $this->input[] = [
            'x' => '0',
            'f' => '1'
        ];
    }

    public function deleteInput($index) {
        unset($this->input[$index]);
        array_values($this->input);
    }

    public function calculate() {

        $array = $this->input;;

        //$fPluck = Arr::pluck($array, 'f', 'x');

        //$total = array_sum($fPluck);
        $count = count($array);

        $arrLabelValueData = array();

        for($i = 0; $i < $count; $i++) {

            $chartData = [
                "label" => $array[$i]['x'],
                "value" => $array[$i]['f']
            ];

            dd($chartData);
        }
    }

    public function render()
    {

        $array = $this->input;

        $count = count($array);

        for($i = 0; $i < $count; $i++) {
            array_push($array, [
                "label" => $array[$i]['x'],
                "value" => $array[$i]['f']
            ]);
        }

        info($this->input);
        return view('livewire.probability-dist-calculator');
    }
}
