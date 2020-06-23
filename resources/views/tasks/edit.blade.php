@extends('layouts.default')

@section('content')

    <!-- Bootstrap шаблон... -->

    <div class="panel-body">
        <!-- Отображение ошибок проверки ввода -->
    @include('common.errors')

    <!-- Форма редактирования задачи -->
        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        {{method_field('PUT')}}
        <!-- Имя задачи -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Редактирование задачи</label>

                <div class="col-sm-6">
                    <input type="text" name="name" value="{{ $task->name }}" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Кнопка добавления задачи -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Сохранить
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection