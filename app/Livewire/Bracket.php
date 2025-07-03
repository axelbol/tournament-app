<?php

namespace App\Livewire;

use Livewire\Component;

class Bracket extends Component
{
    public $selections = [];
    public $winners = [];
    public $winner = null;
    public $locked = false;

    public function mount()
    {
        // Estado inicial
        $this->selections = [
            'match1' => null,
            'match2' => null,
            'match3' => null,
            'match4' => null,
            'quarter1' => null,
            'quarter2' => null,
            'semifinal' => null,
            'final' => null,
        ];

        $this->winners = [
            'match1' => null,
            'match2' => null,
            'match3' => null,
            'match4' => null,
            'quarter1' => null,
            'quarter2' => null,
            'semifinal' => null,
        ];
    }

    public function selectWinner($match, $team)
    {
        if ($this->locked) {
            return;
        }

        // Guardar selección
        $this->selections[$match] = $team;
        $this->winners[$match] = $team;

        // Lógica de progresión automática
        if ($match === 'match1' || $match === 'match2') {
            if ($this->winners['match1'] && $this->winners['match2']) {
                $this->winners['quarter1'] = null;
                $this->selections['quarter1'] = null;
            }
        }

        if ($match === 'match3' || $match === 'match4') {
            if ($this->winners['match3'] && $this->winners['match4']) {
                $this->winners['quarter2'] = null;
                $this->selections['quarter2'] = null;
            }
        }

        if ($match === 'quarter1' || $match === 'quarter2') {
            if ($this->winners['quarter1'] && $this->winners['quarter2']) {
                $this->winners['semifinal'] = null;
                $this->selections['semifinal'] = null;
            }
        }

        if ($match === 'semifinal') {
            $this->winner = $team;
            $this->locked = true;
        }
    }

    public function getTeamClass($match, $team)
    {
        if (!isset($this->selections[$match])) {
            return '';
        }

        if ($this->selections[$match] === $team) {
            return 'bg-green-300 text-black';
        } elseif ($this->selections[$match] !== null) {
            return 'bg-red-300 text-black';
        }

        return '';
    }

    public function canShowMatch($match)
    {
        // Mostrar el siguiente partido solo si los anteriores están definidos
        switch ($match) {
            case 'quarter1':
                return $this->winners['match1'] && $this->winners['match2'];
            case 'quarter2':
                return $this->winners['match3'] && $this->winners['match4'];
            case 'semifinal':
                return $this->winners['quarter1'] && $this->winners['quarter2'];
            default:
                return false;
        }
    }

    public function downloadBracket()
    {
        // Solo mostrar botón en la vista, la descarga es manejada con JS (html2canvas)
        // Este método existe solo por si se quiere hacer lógica futura
    }

    public function resetBracket()
    {
        $this->mount(); // Volver a estado inicial
        $this->winner = null;
        $this->locked = false;
    }

    public function render()
    {
        return view('livewire.bracket');
    }
}
