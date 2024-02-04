@extends('viewer.layouts.master')
@section("main-content")
    <div id="Content">
        <div class="content_wrapper clearfix">
            <!-- .sections_group -->
            <div class="sections_group">
                <div class="entry-content" itemprop="mainContentOfPage">
                    <div class="section mcb-section   " style="padding-top:0px; padding-bottom:0px; background-color:">
                        <div class="section_wrapper mcb-section-inner">
                            <div class="wrap mcb-wrap one  valign-top clearfix"
                                 style="padding:40px 20px 20px 20px; background-color:#ffffff">
                                <div class="mcb-wrap-inner">
                                    {!! $about->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section the_content no_content">
                        <div class="section_wrapper">
                            <div class="the_content_wrapper"></div>
                        </div>
                    </div>
                    <div class="section section-page-footer">
                        <div class="section_wrapper clearfix">
                            <div class="column one page-pager">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .four-columns - sidebar -->
        </div>
    </div>
@endsection
