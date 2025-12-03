{{-- LOGIN --}}
@if(Session::has('userlogin'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '50px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.success("{{ Session::get('userlogin') }}");
 </script>

@endif

{{-- REJECT YOUR OFFER --}}
 
@if(Session::has('rejectrule'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '60px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.info("{{ Session::get('rejectrule') }}");
 </script>
@endif

{{-- EMP PERSONAL DETAIL INSERT --}}
@if(Session::has('emppersonaldetail'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '60px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.info("{{ Session::get('emppersonaldetail') }}");
 </script>
@endif


{{-- EMP Education DETAIL INSERT --}}
@if(Session::has('educationdetails'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '60px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.info("{{ Session::get('educationdetails') }}");
 </script>
@endif

{{-- EMP Education DETAIL INSERT --}}
@if(Session::has('documentdetails'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '60px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.info("{{ Session::get('documentdetails') }}");
 </script>
@endif

{{-- Profile data completed--}}
@if(Session::has('profiledetails'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '60px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.success("{{ Session::get('profiledetails') }}");
 </script>
@endif


{{-- JOIN USER --}}

@if(Session::has('joinnow'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '60px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.success("{{ Session::get('joinnow') }}");
 </script>
@endif

{{-- UPDATE PASSWORD --}}

@if(Session::has('updatepwd'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '60px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.warning("{{ Session::get('updatepwd') }}");
 </script>
@endif

{{-- ASSIGN WORK --}}

@if(Session::has('Assignwork'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '60px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.success("{{ Session::get('Assignwork') }}");
 </script>
@endif

{{-- ASSIGN ACCEPT WORK --}}

@if(Session::has('acceptwork'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '60px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.success("{{ Session::get('acceptwork') }}");
 </script>
@endif


@if(Session::has('message'))
<script>
    toastr.options = {
        "progressBar": true,
        "closeButton": true,
        "onShown": function() {
            var toastElement = document.querySelector('.toast-success');
            toastElement.style.color = 'white'; // Example green color
            toastElement.style.marginTop = '60px'; // Example margin top
            toastElement.style.fontWeight = '600'; // Example font color (black)
        }
    }
    toastr.info("{{ Session::get('message') }}");
 </script>
@endif
  