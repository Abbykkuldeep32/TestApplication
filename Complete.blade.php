@foreach($tasks as $task)
    <div>
        <input type="checkbox" id="task_{{ $task->id }}" class="task-checkbox" data-task-id="{{ $task->id }}">
        <label for="task_{{ $task->id }}">{{ $task->name }}</label>
    </div>
@endforeach

<script>
    $(document).ready(function() {
        $('.task-checkbox').click(function() {
            var taskId = $(this).data('task-id');
            
            $.ajax({
                type: 'PATCH',
                url: '/tasks/' + taskId + '/complete',
                data: {
                    _token: '{{ csrf_token() }}',
                },
                success: function(response) {
                    // Handle success, update the frontend as needed
                    console.log(response.message);
                    // Hide or remove the completed task from the UI
                    $('#task_' + taskId).parent().remove();
                },
                error: function(error) {
                    // Handle errors
                    console.log(error.responseJSON.message);
                }
            });
        });
    });
</script>
