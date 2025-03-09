<div class="projects__container">
    <div class="project-list">
        <ul class="project-list__container">
            @foreach ($projects as $project)
                <li class="project-list__item" onclick="location.href='{{ route('project.show', $project->id) }}'">
                    <div class="project-list__item--f-inner">
                        <div class="project-list__item--projectName">
                            <p>{{ $project->project_name }}</p>
                        </div>
                        <div class="project-list__item--status">
                            <p>参加中</p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="project__paginate">
        {{ $projects->links() }}
    </div>
</div>
