@extends('viewer.layouts.master')
@section("main-content")
    <div id="Content">
        <div class="content_wrapper clearfix">
            <!-- .sections_group -->
            <div class="sections_group">
                <div class="entry-content" itemprop="mainContentOfPage">
                    <div class="section the_content has_content">
                        <div class="section_wrapper">
                            <div class="the_content_wrapper">
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1634885949754 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper"><p
                                                    style="font-size: 32px;color: #085895;text-align: center;font-family:Open Sans;font-weight:400;font-style:normal"
                                                    class="vc_custom_heading"> Thermoplastics Resins Products </p>
                                                <div class="vc_empty_space" style="height: 32px"><span
                                                        class="vc_empty_space_inner"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid vc_custom_1634886019070 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="sliding_box">
                                                    <div class="photo_wrapper"><img class="scale-with-grid"
                                                                                    src="https://starpoltrading.com/wp-content/uploads/2021/10/shutterstock_452339737-scaled.jpg"
                                                                                    alt="" width="" height=""></div>
                                                    <div class="desc_wrapper"><h4>PVC</h4></div>
                                                </div>
                                                <div class="sliding_box">
                                                    <div class="photo_wrapper"><img class="scale-with-grid"
                                                                                    src="https://starpoltrading.com/wp-content/uploads/2016/05/white-masterbatch1.jpg"
                                                                                    alt="white-masterbatch" width="3700"
                                                                                    height="3700"></div>
                                                    <div class="desc_wrapper"><h4>Polyethylene</h4></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="sliding_box">
                                                    <div class="photo_wrapper"><img class="scale-with-grid"
                                                                                    src="https://starpoltrading.com/wp-content/uploads/2021/10/shutterstock_492467776-scaled.jpg"
                                                                                    alt="" width="" height=""></div>
                                                    <div class="desc_wrapper"><h4>Polystyrene</h4></div>
                                                </div>
                                                <div class="sliding_box">
                                                    <div class="photo_wrapper"><img class="scale-with-grid"
                                                                                    src="https://starpoltrading.com/wp-content/uploads/2021/10/shutterstock_1033364095-1-scaled.jpg"
                                                                                    alt="" width="" height=""></div>
                                                    <div class="desc_wrapper"><h4>PET</h4></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wpb_column vc_column_container vc_col-sm-4">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class="sliding_box">
                                                    <div class="photo_wrapper"><img class="scale-with-grid"
                                                                                    src="https://starpoltrading.com/wp-content/uploads/2021/10/shutterstock_1730482867-scaled.jpg"
                                                                                    alt="" width="" height=""></div>
                                                    <div class="desc_wrapper"><h4>Polypropylene</h4></div>
                                                </div>
                                                <div class="sliding_box">
                                                    <div class="photo_wrapper"><img class="scale-with-grid"
                                                                                    src="https://starpoltrading.com/wp-content/uploads/2021/10/shutterstock_549912871-1-scaled.jpg"
                                                                                    alt="" width="" height=""></div>
                                                    <div class="desc_wrapper"><h4>Others</h4></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach($product->productDetails as $detail)
                                        111
                                    @endforeach
                                </div>
                            </div>
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
