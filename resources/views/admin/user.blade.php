@extends('layout.master_admin')

@section('title')
  price
@endsection

@section('css')
  
@livewireStyles
@endsection

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <!-- زر Create أعلى الجدول -->
          
            @livewire('user')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@livewireScripts
@endsection

@section('js')

<script>
  window.addEventListener('close-modal', event => {
      $('#deleteUserModal').modal('hide');
  });
</script>
@endsection