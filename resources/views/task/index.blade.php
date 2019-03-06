@extends('layouts.app')

@section('title') Task List @endsection
@section('content')
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th class="border-0" scope="col">#</th>
                    <th class="border-0" scope="col">Assignor</th>
                    <th class="border-0" scope="col">Assignee</th>
                    <th class="border-0" scope="col">Type</th>
                    <th class="border-0" scope="col">Compnay</th>
                    <th class="border-0" scope="col">Contact</th>
                    <th class="border-0" scope="col">Subject/Objective</th>
                    <th class="border-0" scope="col">Priority</th>
                    <th class="border-0" scope="col">Reminder At</th>
                    <th class="border-0" scope="col">Due Date</th>
                    <th class="border-0" scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $index => $task)
                    <tr>
                        <th scope="row">{{ $index + $tasks->firstItem()  }}</th>
                        <td>{{ $task->creator->name }}</td>
                        <td>{{ $task->assignee->name }}</td>
                        <td>
                            <span class="badge badge-pill badge-secondary">{{ $task->type }}</span>
                        </td>
                        <td>{{ $task->company }}</td>
                        <th>{{ $task->contact }}</th>
                        <th>{{ $task->subject }}</th>
                        <th>
                            @php
                                switch($task->priority){
                                    case 'HIGH':
                                        $badgeClass = 'danger';
                                        break;
                                    case 'MEDIUM':
                                        $badgeClass = 'warning';
                                        break;
                                    default:
                                        $badgeClass = 'primary';
                                }
                            @endphp
                            <span class="badge badge-{{ $badgeClass }}">{{ $task->priority }}</span>
                        </th>
                        <th>{{ $task->reminder_at->format('Y-m-d h:i A') }}</th>
                        <th>{{ $task->due_at->format('Y-m-d h:i A') }}</th>
                        <th>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-danger dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-cogs"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                    <a href="{{ route('task.show', ['id'=>$task->id]) }}" class="dropdown-item">
                                        <i class="icon fa fa-search"></i> 
                                        Detail
                                    </a>
                                    <a href="{{ route('task.edit', ['id'=>$task->id]) }}" class="dropdown-item">
                                        <i class="icon fa fa-edit"></i> 
                                        Edit
                                    </a>
                                    <form action="{{ route('task.destroy', ['id' => $task->id]) }}" method="POST">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="dropdown-item" type="submit">
                                            <i class="icon fa fa-trash-alt"></i>
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </th>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        <div class="pagination-box">
            {!! $tasks->links() !!}
        </div>
    </div>
@endsection
