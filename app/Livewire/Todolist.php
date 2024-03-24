<?php

namespace App\Livewire;

use Livewire\Component;

class Todolist extends Component
{
    public $title = "";
    public $content = "";
    public $taskscontent = [];


    public function addtask()
    {
        $task = [
            'title' => $this->title,
            'content' => $this->content,
        ];

        $this->taskscontent[] = $task;

        $this->title = "";
        $this->content = "";

    }

    public function resettask()
    {
        $this->taskscontent = []; // تمام آیتم‌های آرایه را خالی می‌کند
        $this->title = ""; // عنوان را ریست می‌کند
        $this->content = ""; // محتوا را ریست می‌کند
    }
    public function render()
    {
        return view('livewire.todolist');
    }
}
