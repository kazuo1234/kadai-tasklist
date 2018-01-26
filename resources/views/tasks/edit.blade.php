@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} の編集画面</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', 'ステータス') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'タスク：') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection