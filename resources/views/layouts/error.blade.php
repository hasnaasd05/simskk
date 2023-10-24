@if($errors->any())
@foreach($errors->getMessages() as $this_error)
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <span class="alert-icon text-danger me-2">
      <i class="ti ti-exclamation-circle ti-xs"></i>
    </span>
    {{$this_error[0]}}
</div>
@endforeach
@endif