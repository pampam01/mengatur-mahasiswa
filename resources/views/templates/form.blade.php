<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>UTS | {{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/svg/school.svg') }}" type="image/x-icon">
    <!-- CSS files -->
    <link href="{{ asset('storage/template-assets/dist/css/tabler.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('storage/template-assets/dist/css/tabler-flags.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('storage/template-assets/dist/css/tabler-payments.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('storage/template-assets/dist/css/tabler-vendors.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('storage/template-assets/dist/css/demo.min.css?1692870487') }}" rel="stylesheet" />
    <link href="{{ asset('storage/custom/main.css') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body>
    <script src="{{ asset('storage/template-assets/dist/js/demo-theme.min.js?1692870487') }}"></script>
    <div class="page">
        <!-- Navbar -->
        <header class="navbar-expand-md">
            <div class="collapse navbar-collapse" id="navbar-menu">
                <div class="navbar">
                    <div class="container-xl">
                        <ul class="navbar-nav">
                            <li @class(['nav-item'])>
                                <a class="nav-link"
                                    href="{{ $halaman == 'mahasiswa' ? route('mahasiswa.data.page') : route('kelas.data.page') }}">
                                    <span
                                        class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-back-up">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M9 14l-4 -4l4 -4" />
                                            <path d="M5 10h11a4 4 0 1 1 0 8h-1" />
                                        </svg>
                                    </span>
                                    <span class="nav-link-title">
                                        Kembali
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
