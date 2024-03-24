<div class="todo" id="todo" xmlns:wire="http://www.w3.org/1999/xhtml">
    <br><br><br>
    <div class="container">
        <h1>...To Do List...</h1>
        <div class="row">

            <div class="col-md-4 formCountr">
                <form >
                    <label>title:</label><br>
                    <input wire:model.blur="title" class="form form-control" type="text" placeholder="your title for task"><br>
                    <label>content:</label><br>
                    <textarea class="form form-control"
                              wire:model.blur="content" placeholder="type your task..."
                              name="content" id="content" cols="30" rows="10"></textarea><br>
                    <button
                        wire:click="addtask"
                        type="button" class="btn btn-outline-success">save your task</button>
                    <button
                        wire:click="resettask"
                        type="button" class="btn btn-warning">Reset task</button>
                    <br><br>
                    <br><br>

                </form>
            </div>
            <div class="col-md-2">
                <div class="flesh"></div>
            </div>
            <div class="col-md-6 result-todo">
                <h3 class="badge bg-info">count : {{count($taskscontent)}}</h3>
                <ul>

                    @foreach($taskscontent as $item)
                        <li>

                            <span> title : </span><span> {{ $item['title'] }}</span>
                            <div class="pen-li" >
                                <p> {{ $item['content'] }}</p> <p><livewire:pending  wire:key="test{{$loop->index}}"/></p>
                            </div>
                        </li>
                        <hr>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>
</div>
