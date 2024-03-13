Route::post('/your-endpoint', 'YourController@yourMethod');
Route::patch('/tasks/{id}/complete', 'TaskController@complete');
Route::get('/tasks', 'TaskController2@index')->name('tasks.index');
Route::delete('/tasks/{task}', 'TaskController3@delete')->name('tasks.delete');

