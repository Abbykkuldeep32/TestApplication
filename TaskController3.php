use App\Models\Task;
use Illuminate\Http\Request;

class TaskController3 extends Controller
{
    public function index(Request $request)
    {
        // Your existing code to fetch tasks...

        return view('tasks.index', compact('tasks'));
    }

    public function delete(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');
    }
}
