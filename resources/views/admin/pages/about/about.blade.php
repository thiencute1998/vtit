@extends('admin.layouts.master')
@section('admin-css')
    <style>

    </style>

@endsection
@section('main-content-inner')
    <!-- page title area end -->
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12 col-ml-12">
                <div class="row">
                    <!-- Textual inputs start -->
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <form id="user-form" name="user-form" action="{{ route('admin-about-update') }}" method="POST">
                                    @csrf
                                    @if (session('edit-success'))
                                        <h5 class="about-message mb-2 text-success">{{ session('edit-success') }}</h5>
                                    @endif
                                    <h4 class="header-title user-add-title">About</h4>
                                    <div class="col-md-12">
                                        <label for="product-content" class="col-form-label">Content</label>
                                        <textarea class="form-control" name="content" type="text" id="content">
                                           @if($about)
                                                {{$about->content}}
                                            @endif
                                        </textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/admin/js/jquery341.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('richtexteditor/rte_theme_default.css') }}" />
    <script type="text/javascript" src="{{ asset('richtexteditor/rte.js') }}"></script>
    <script type="text/javascript" src='{{ asset('richtexteditor/plugins/all_plugins.js') }}'></script>
    <script type="text/javascript">
        var editor = new RichTextEditor("#content");

        $(document).ready(function() {
            $('.about-message').delay(5000).fadeOut();
        })
    </script>
@endsection
