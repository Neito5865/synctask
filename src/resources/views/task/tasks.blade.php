<div class="tasks__container">
    <div class="tasks-table">
        <table class="tasks-table__inner">
            <thead>
                <tr class="tasks-table__row">
                    <th class="tasks-table__heading">タスク名</th>
                    <th class="tasks-table__heading">担当者</th>
                    <th class="tasks-table__heading">状態</th>
                    <th class="tasks-table__heading">期限日</th>
                    <th class="tasks-table__heading">登録日</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr class="tasks-table__row" onclick="location.href='{{ route('task.show', ['project_id' => $project->id, 'task_id' => $task->id]) }}'">
                        <td class="tasks-table__item">{{ $task->title }}</td>
                        <td class="tasks-table__item">{{ $task->assignee->name ?? '未設定' }}</td>
                        <td class="tasks-table__item">{{ $task->status->name }}</td>
                        <td class="tasks-table__item">{{ $task->deadline ? $task->deadline->format('Y/n/j') : '未設定' }}</td>
                        <td class="tasks-table__item">{{ $task->created_at->format('Y/n/j') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="task__paginate">
        {{ $tasks->links() }}
    </div>
</div>
