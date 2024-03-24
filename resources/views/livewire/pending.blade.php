<div>
    <button class="{{$isDone ? 'btn btn-success' : "btn btn-warning"}}" type="button" wire:click="toggle" >{{$isDone ? 'done' : "pending"}}</button>
</div>
