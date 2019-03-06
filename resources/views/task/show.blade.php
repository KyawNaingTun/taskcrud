@extends('layouts.app')

@section('title') Task Detail @endsection
@section('content')
    <table class="table table-borderless">
        <tbody>
            <tr>
                <td class="font-weight-bolder" width="15%">Subject/Objective</td> <td>- {{ $task->subject }}</td>
            </tr>
            <tr>
                <td class="font-weight-bolder" width="15%">Due Date</td> <td>- {{ $task->due_at->format('Y-m-d h:i A') }}</td>
            </tr>
            <tr>
                <td class="font-weight-bolder" width="15%">Reminder Date</td> <td>- {{ $task->reminder_at->format('Y-m-d h:i A') }}</td>
            </tr>
            <tr>
                <td class="font-weight-bolder" width="15%">Priority</td> <td>- {{ $task->priority }}</td>
            </tr>
            <tr>
                <td class="font-weight-bolder" width="15%">Task Type</td> <td>- {{ $task->type }}</td>
            </tr>
            <tr>
                <td class="font-weight-bolder" width="15%">Company</td> <td>- {{ $task->company }}</td>
            </tr>
            <tr>
                <td class="font-weight-bolder" width="15%">Contact</td> <td>- {{ $task->contact }}</td>
            </tr>
            <tr>
                <td class="font-weight-bolder" width="15%">Created By</td> <td>- {{ $task->creator->name }}</td>
            </tr>
        </tbody>
    </table>
@endsection