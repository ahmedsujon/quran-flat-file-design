<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DASHBOARD</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
    <link href="{{ asset('assets/plugins/datatables/datatable.css') }}" rel="stylesheet" type="text/css" />
    <!-- CodeMirror -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/codemirror/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/codemirror/theme/monokai.css') }}">
    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

    @livewireStyles
</head>

<body id="body" class="dark-sidebar">

    {{-- @livewire('admin.inc.sidebar')
    @livewire('admin.inc.navbar') --}}
    <div class="page-wrapper">
        <!-- Page Content-->
        <div class="page-content-tab">
            {{ $slot }}
        </div>
    </div>
    <!-- Javascript  -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/pages/analytics-index.init.js') }}"></script>
   
    <!-- Summernote -->
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
     <!-- CodeMirror -->
     <script src="{{ asset('assets/plugins/codemirror/codemirror.js') }}"></script>
     <script src="{{ asset('assets/plugins/codemirror/mode/css/css.js') }}"></script>
     <script src="{{ asset('assets/plugins/codemirror/mode/xml/xml.js') }}"></script>
     <script src="{{ asset('assets/plugins/codemirror/mode/htmlmixed/htmlmixed.js') }}"></script>

     <script src="{{ asset('assets/plugins/datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/pages/datatable.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @stack('scripts')
    @livewireScripts
</body>
</html>