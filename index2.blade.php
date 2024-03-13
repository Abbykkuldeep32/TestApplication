@foreach($tasks as $task)
    <div>
        <span>{{ $task->name }}</span>
        <form action="{{ route('tasks.delete', $task->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach
