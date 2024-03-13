use App\Models\Task;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $showCompleted = $request->has('show_completed');

        if ($showCompleted) {
            $tasks = Task::where('completed', true)->get();
        } else {
            $tasks = Task::where('completed', false)->get();
        }

        return view('tasks.index', compact('tasks', 'showCompleted'));
    }
}
