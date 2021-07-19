  @if (session()->has('flash_notification'))
    <script>
    $(document).ready(()=>{
        Swal.fire(
          "{{ session()->get('flash_notification.title') }}",
          "{{ session()->get('flash_notification.text') }}",
          "{{ session()->get('flash_notification.icon') }}"
        )
    });
    </script>
@endif