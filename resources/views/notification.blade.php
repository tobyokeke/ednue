<div class="container">
    @if(session()->has('success'))
        <div id="notification" class="alert alert-success" style="background-color:lightgreen;color:black;margin-bottom: -120px;margin-top:120px;" align="center">{{Session::get('success')}}</div>
    @endif

    @if(session()->has('error'))
        <div id="notification" class="alert alert-danger" style="margin-bottom: -120px;margin-top:120px;" align="center">{{Session::get('error')}}</div>
    @endif

    <script>
        window.onload = function () {
            var notification = document.getElementById('notification');

            setTimeout(function () {
                notification.style.display = 'none';
            },5000);
        }
    </script>

</div>
