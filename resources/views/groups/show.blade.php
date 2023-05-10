@extends('layouts.master')
@section('content')
<style>
    .list-role {
        width: 250px;
        display: flex;
        justify-content: space-between;
        margin: 10px 0 10px 0;
      }

      .list-container {
        display: flex;
        flex-wrap: wrap;
        max-height: 300px;
        overflow-y: auto;
        gap: 20px;
      }

      .list-group-header {
        background-color: #f5f5f5;
        padding: 5px;
        margin-bottom: 10px;
      }

      .list-group-header h5 {
        margin: 0;
      }

      .checkbox-header {
        
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
      }

      .checkbox-header label {
        margin-bottom: 0;
      }

      .checkbox-all {
        margin-right: 5px;
      }
</style>
<main class="page-content">
    <div class="container">
        <section class="wrapper">
            <main id="main" class="main">
                <div class="panel-panel-default">
                    <div class="market-updates">
                        <div class="container">
                            <div class="pagetitle">
                                <h1 class="offset-4">Chức Vụ</h1>
                            </div>
                            <div class="page-section">
                                <form method="post" action="{{ route('groups.updateRoles', $group->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="card">
                                        <div class="card-body">
                                            <hr>
                                            <div class="form-group">
                                                <label for="tf1">Tên Quyền:</label> {{ $group->name }}
                                            </div><br>
                                            <div class="form-group">
                                                <input type="checkbox" id="checkAll" class="form-check-input"
                                                    value="Quyền hạn">
                                                <label class="w3-button w3-blue">{{ __('Cấp toàn bộ quyền') }}
                                                    <div class="row">
                                                        {{-- @foreach ($group_names as $group_name) --}}
                                                        <div class="col-lg-10">
                                                            <div class="list-group-header"
                                                                style="color:rgb(2, 6, 249) ;">
                                                                <h5> Nhóm: {{ __($group->name) }}</h5>
                                                            </div>
                                                            <div class="list-container">
                                                                @foreach ($roles as $role)
                                                                <div class="list-role">
                                                                    <span style="color: rgb(4, 5, 5) ;">{{ __($role
                                                                        ->name) }}</span>
                                                                    <label class=" ">
                                                                        <input type="checkbox" @checked(in_array($role
                                                                            ->id ,$active_roles )) name="roles[]"
                                                                        class="form-check-input check-role" value="{{
                                                                        $role->id }}">
                                                                        <span class="switcher-indicator"></span>
                                                                    </label>
                                                                </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                        {{-- @endforeach --}}
                                                    </div>
                                            </div>
                                            <div class="form-actions">
                                                <button class="btn btn-success" type="submit">Duyệt</button>
                                                <a href="{{ route('groups.index') }}" class="btn btn-danger"
                                                    type="submit">Hủy</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
            </main>
            <script>
                $('#checkAll').click(function() {
                    console.log(this.checked)
                    $('.check-role').prop('checked', this.checked);
                });
            </script>
        </section>
    </div>
</main>
@endsection
