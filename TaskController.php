//   TaskController
public function complete($id)
{
    $task = Task::findOrFail($id);
    $task->completed = true;
    $task->save();

    return response()->json(['message' => 'Task marked as completed']);
}
