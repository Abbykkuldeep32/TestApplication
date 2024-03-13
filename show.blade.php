<a href="{{ route('tasks.index', ['show_completed' => !$showCompleted]) }}">
    @if($showCompleted)
        Show Non-Completed Tasks
    @else
        Show Completed Tasks
    @endif
</a>
