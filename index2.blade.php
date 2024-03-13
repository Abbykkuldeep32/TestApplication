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

<script>
    // JavaScript to show confirmation dialog
    const deleteForms = document.querySelectorAll('.delete-form');

    deleteForms.forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            if (confirm('Are you sure you want to delete this task?')) {
                this.submit();
            }
        });
    });
</script>
