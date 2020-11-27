<?php

namespace App\Http\Livewire\Expense;

use App\Models\Expense;
use Livewire\Component;

class ExpenseEdit extends Component
{

    public Expense $expense;
    
    public $amount;
    public $description;
    public $type;

    protected $rules = [
        'amount' => 'required',
        'description' => 'required',
        'type' => 'required'
    ];

    public function mount(/*Expense $expense*/)
    {
       
       $this->description = $this->expense->description;
       $this->amount = $this->expense->amount;
       $this->type = $this->expense->type;
    }

    
    public function updateExpense()
{
    $this->validate();

    $this->expense->update([
        'amount' => $this->amount,
        'description' => $this->description,
        'type' => $this->type
    ]);

    session()->flash('message','Registro atualizado com sucesso!');
    
   // $this->amount = $this->description = $this->type = null;

}



    public function render()
    {
        return view('livewire.expense.expense-edit');
    }
}
