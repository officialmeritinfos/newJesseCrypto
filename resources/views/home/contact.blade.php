@extends('home.innerBase')
@section('content')

    @push('body')

        <body class="envato_tk_templates-template envato_tk_templates-template-elementor_header_footer single single-envato_tk_templates postid-294 elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-294">
        @endpush
        <div data-elementor-type="wp-post" data-elementor-id="294" class="elementor elementor-294" data-elementor-settings="[]">
            <div class="elementor-section-wrap">
                <style>
                    .fullscreen-bg {
                        position: absolute;
                        top: 0;
                        right: 0;
                        bottom: 0;
                        left: 0;
                        overflow: hidden;
                    }
                    .fullscreen-bg__video {
                        position: absolute;
                        top: 0;
                        right: 0;
                        bottom: 0;
                        left: 0;
                        width: 100%;
                        height: auto;
                    }
                    @media (min-aspect-ratio: 16/9) {
                        .fullscreen-bg__video {
                            width: 100%;
                            height: auto;
                        }
                    }
                    @media (max-width: 767px) {
                        .fullscreen-bg__video {
                            width: auto;
                            height: auto;
                        }
                        .fullscreen-bg{
                            width: 1000px;
                        }
                    }
                    #overlay {
                        position: absolute;
                        display: block;
                        width: 100%;
                        height: 100%;
                        top: 0;
                        left: 0;
                        right: 0;
                        bottom: 0;
                        background-color: rgba(0,0,0,0.3);
                        z-index: 1;
                        cursor: pointer;
                    }
                </style>
                <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-f1ac91d elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="f1ac91d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                    <div class="elementor-background-overlay">
                    </div>
                    <div id="overlay"></div>
                    <div class="fullscreen-bg">
                        <video autoplay muted loop playsinline class="fullscreen-bg__video">
                            <source src="{{asset('home/static/temp/video/video7.mp4')}}" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                    <div class="elementor-container elementor-column-gap-default" style="z-index: 2">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b36272c elementor-invisible" data-id="b36272c" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-467b2a0 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="467b2a0" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h1 class="elementor-heading-title elementor-size-default">{{$pageName}}
                                        </h1>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-293bf1b ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="293bf1b" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h5 class="elementor-heading-title elementor-size-default">
                                            Do you have any queries or suggestions? Please contact us about all enquiries including membership and volunteer work using the form below.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-a38a14b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a38a14b" data-element_type="section" data-settings="{&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5dd92e3 elementor-invisible" data-id="5dd92e3" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInDown&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-7f7d120 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="7f7d120" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h6 class="elementor-heading-title elementor-size-default">Let's Talk
                                        </h6>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-c190791 ob-harakiri-inherit elementor-widget elementor-widget-heading" data-id="c190791" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">Get in Touch.
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-39008fe ob-harakiri-inherit elementor-widget elementor-widget-text-editor" data-id="39008fe" data-element_type="widget" data-settings="{&quot;_ob_harakiri_writing_mode&quot;:&quot;inherit&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        <p>Having troubles, suggestions or informations you will like to share? Drop a message.
                                        </p>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-60251ad elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="60251ad" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="divider.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-divider">
                      <span class="elementor-divider-separator">
                      </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-8ca106e elementor-widget elementor-widget-eael-feature-list" data-id="8ca106e" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="eael-feature-list.default">
                                    <div class="elementor-widget-container">
                                        <div class="-icon-position-left -tablet-icon-position-left -mobile-icon-position-left">
                                            <ul id="eael-feature-list-8ca106e" class="eael-feature-list-items circle stacked ">
                                                <li class="eael-feature-list-item">
                                                    <div class="eael-feature-list-icon-box">
                                                        <div class="eael-feature-list-icon-inner">
                              <span class="eael-feature-list-icon fl-icon-0">
                                <i aria-hidden="true" style="color:;" class="fa fa-map-marker">
                                </i>
                              </span>
                                                        </div>
                                                    </div>
                                                    <div class="eael-feature-list-content-box">
                                                        <h4 class="eael-feature-list-title">
                                                            Head Office
                                                        </h4>
                                                        <p class="eael-feature-list-content">
                                                            {{$web->address}}
                                                        </p>
                                                    </div>
                                                </li>
                                                <li class="eael-feature-list-item">
                                                    <div class="eael-feature-list-icon-box">
                                                        <div class="eael-feature-list-icon-inner">
                              <span class="eael-feature-list-icon fl-icon-1">
                                <i aria-hidden="true" style="color:;" class="fa fa-envelope">
                                </i>
                              </span>
                                                        </div>
                                                    </div>
                                                    <div class="eael-feature-list-content-box">
                                                        <h4 class="eael-feature-list-title">Email Us
                                                        </h4>
                                                        <p class="eael-feature-list-content">
                                                            {{$web->email}}
                                                        </p>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-781bd30 elementor-invisible" data-id="781bd30" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-c1e7231 elementor-button-align-stretch elementor-widget elementor-widget-form" data-id="c1e7231" data-element_type="widget" data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;,&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="form.default">
                                    <div class="elementor-widget-container">
                                        <img src="{{asset('home/static/temp/wp-content/uploads/sites/56/2021/07/customer.jpg')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="ob-is-breaking-bad elementor-section elementor-top-section elementor-element elementor-element-bbbba46 elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="bbbba46" data-element_type="section" data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;_ob_bbad_use_it&quot;:&quot;yes&quot;,&quot;_ob_bbad_sssic_use&quot;:&quot;no&quot;,&quot;_ob_glider_is_slider&quot;:&quot;no&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-aff910f" data-id="aff910f" data-element_type="column" data-settings="{&quot;_ob_bbad_is_stalker&quot;:&quot;no&quot;,&quot;_ob_teleporter_use&quot;:false,&quot;_ob_column_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_column_has_pseudo&quot;:&quot;no&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-5e13199 elementor-widget elementor-widget-google_maps" data-id="5e13199" data-element_type="widget" data-settings="{&quot;_ob_perspektive_use&quot;:&quot;no&quot;,&quot;_ob_shadough_use&quot;:&quot;no&quot;,&quot;_ob_allow_hoveranimator&quot;:&quot;no&quot;,&quot;_ob_widget_stalker_use&quot;:&quot;no&quot;}" data-widget_type="google_maps.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-custom-embed">
                                            <div style="max-width:100%;overflow:hidden;color:red;width:100%;height:500px;"><div id="embeddedmap-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=HANHAM+BRISTOL+UNITED+KINGDOM&amp;key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="embed-maphtml" href="https://www.embed-map.com/" id="enablemap-info">https://www.embed-map.com</a><style>#embeddedmap-display img{max-width:none!important;background:none!important;font-size: inherit;font-weight:inherit;}</style></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
        @endsection
