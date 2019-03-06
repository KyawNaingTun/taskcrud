@extends('layouts.app')

@section('title') Add Task @endsection
@section('content')
    <form method="POST" action="{{ route('task.store') }}">
        @csrf
        <div class="form-group row">
            <label class="text-left col-md-3 col-form-label" for="type">Task Type</label>
            <div class="col-md-7">
                <select class="form-control {{ $errors->has('type') ? ' is-invalid' : '' }} my-form-control" name="type" id="type">
                    <option value="" disabled selected>Select a Task Type</option>
                    @foreach(config('taskcrud.types') as $key => $value)
                        <option value="{{ $value }}" @if(old('type')==$value) selected @endif>{{ $value }}</option>                        
                    @endforeach
                </select>
                @if ($errors->has('type'))
                    <div class="invalid-feedback" role="alert">
                        {{ $errors->first('type') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="company" class="text-left col-md-3 col-form-label">Company</label>

            <div class="col-md-7">
                <input id="company" type="text" class="form-control {{ $errors->has('company') ? ' is-invalid' : '' }} my-form-control" name="company" value="{{ old('company') }}" autocomplete="off">
                @if ($errors->has('company'))
                    <div class="invalid-feedback" role="alert">
                        {{ $errors->first('company') }}
                    </div>
                @endif
            </div>
        </div>
        

        <div class="form-group row">
            <label class="text-left col-md-3 col-form-label" for="contact">Contact</label>
            <div class="col-md-7">
                <select class="form-control {{ $errors->has('contact') ? ' is-invalid' : '' }} my-form-control" name="contact" id="contact">
                    <option value="" disabled selected>Select a Contact</option>
                    @foreach(config('taskcrud.contacts') as $key => $value)
                        <option value="{{ $value }}" @if(old('contact')==$value) selected @endif>{{ $value }}</option>                        
                    @endforeach
                </select>
                @if ($errors->has('contact'))
                    <div class="invalid-feedback" role="alert">
                        {{ $errors->first('contact') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="text-left col-md-3 col-form-label">Subject / Objective</label>

            <div class="col-md-7">
                <input type="text" name="subject" value="{{ old('subject') }}" class="form-control {{ $errors->has('subject') ? ' is-invalid' : '' }} my-form-control" autocomplete="off">
                @if ($errors->has('subject'))
                    <div class="invalid-feedback" role="alert">
                        {{ $errors->first('subject') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label class="text-left col-md-3 col-form-label" for="assignee">Assigned To</label>
            <div class="col-md-7">
                <select class="form-control {{ $errors->has('assigned_id') ? ' is-invalid' : '' }} my-form-control" name="assigned_id" id="assignee">
                    <option value="" disabled selected>Select an Assignee</option>
                    @foreach($assignee as $asg)
                        <option value="{{ $asg->id }}" @if(old('assigned_id')==$asg->id) selected @endif>{{ $asg->name }}</option>                        
                    @endforeach
                </select>
                @if ($errors->has('assigned_id'))
                    <div class="invalid-feedback" role="alert">
                        {{ $errors->first('assigned_id') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="text-left col-md-3 col-form-label">Due Date</label>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group date">
                                <input type="date" name="due_date" value="{{ old('due_date') }}" class="form-control {{ $errors->has('due_date') ? ' is-invalid' : '' }} my-form-control datetimepicker-input" id=""/>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                </div>
                                @if ($errors->has('due_date'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('due_date') }}
                                    </div>
                                @endif
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group date" >
                                <input type="time" name="due_time" value="{{ old('due_time') }}" class="my-form-control form-control {{ $errors->has('due_time') ? ' is-invalid' : '' }} datetimepicker-input" id=""/>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-clock"></i></div>
                                </div>
                                @if ($errors->has('due_time'))
                                    <div class="invalid-feedback" role="alert">
                                        {{ $errors->first('due_time') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="" class="text-left col-md-3 col-form-label">Set Reminder</label>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group date">
                                <input type="date" name="reminder_date" value="{{ old('reminder_date') }}" class="my-form-control form-control {{ $errors->has('reminder_date') ? ' is-invalid' : '' }} datetimepicker-input" id=""/>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                </div>
                                @if ($errors->has('reminder_date'))
                                    <div class="invalid-feedback" role="alert">
                                        {{ $errors->first('reminder_date') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="input-group date" >
                                <input type="time" name="reminder_time" value="{{ old('reminder_time') }}" class="my-form-control form-control {{ $errors->has('reminder_time') ? ' is-invalid' : '' }} datetimepicker-input" id=""/>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fa fa-clock"></i></div>
                                </div>
                                @if ($errors->has('reminder_time'))
                                    <div class="invalid-feedback" role="alert">
                                        {{ $errors->first('reminder_time') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="text-left col-md-3 col-form-label" for="priority">Priority</label>
            <div class="col-md-7">
                <select class="form-control {{ $errors->has('priority') ? ' is-invalid' : '' }} my-form-control" name="priority" id="priority">
                    <option value="" disabled selected>Select a Priority</option>
                    @foreach(config('taskcrud.priorities') as $key => $value)
                        <option value="{{ $value }}">{{ $value }}</option>                        
                    @endforeach
                </select>
                @if ($errors->has('priority'))
                    <div class="invalid-feedback" role="alert">
                        {{ $errors->first('priority') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-danger my-btn">
                    <i class="fa fa-plus"></i> Add Task
                </button>
            </div>
        </div>
    </form>
@endsection
