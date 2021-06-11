@extends('layouts.app')

@section('meta')

    <title>{{ __('FSC') }}{{ __(' - MatteuSan') }}</title>

    <!-- BASIC META -->
    <meta name="description" content="{{ __('Tools') }}" />
    <meta>

    <!-- OPENGRAPH -->
    <meta property="og:title" content="{{ __('FSC') }}{{ __(' - MatteuSan') }}" />
    <meta property="og:description" content="{{ __('Tools') }}" />

    <script type="text/javascript" src="{{ asset('js/fusioncharts/fusioncharts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fusioncharts/fusioncharts.charts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/fusioncharts/themes/fusioncharts.theme.ocean.js') }}"></script>

@endsection

@section('contents')

    <section class="banner">
        <div class="wrap--text">
            <h1>{!! __('PROBABILITY DISTRIBUTION') !!} </h1>
            <h5>{{ __('Simple calculator for probability distribution with data visualization') }}</h5>
        </div>
    </section>

    <section class="wrap--content--no-margin-top">

        <?php
        $barChart = new FusionCharts("bar2d", "myFirstChart", 600, 400, "chart-container", "json",
            ' {
                        "chart": {
                            "caption": "What kind of apps are you building?",
                            "numberSuffix": "%",
                            "paletteColors": "#876EA1",
                            "useplotgradientcolor": "0",
                            "plotBorderAlpha": "0",
                            "bgColor": "#FFFFFFF",
                            "canvasBgColor": "#FFFFFF",
                            "showValues":"1",
                            "showCanvasBorder": "0",
                            "showBorder": "0",
                            "divLineColor": "#DCDCDC",
                            "alternateHGridColor": "#DCDCDC",
                            "labelDisplay": "auto",
                            "baseFont": "Assistant",
                            "baseFontColor": "#153957",
                            "outCnvBaseFont": "Assistant",
                            "outCnvBaseFontColor": "#8A8A8A",
                            "baseFontSize": "13",
                            "outCnvBaseFontSize": "13",
                            "yAxisMinValue":"40",
                            "labelFontColor": "#8A8A8A",
                            " captionFontColor": "#153957",
                            "captionFontBold": "1",
                            "captionFontSize": "20",
                            "subCaptionFontColor": "#153957",
                            "subCaptionfontSize": "17",
                            "subCaptionFontBold": "0",
                            "captionPadding": "20",
                            "valueFontBold": "0",
                            "showAxisLines": "1",
                            "yAxisLineColor": "#DCDCDC",
                            "xAxisLineColor": "#DCDCDC",
                            "xAxisLineAlpha": "15",
                            "yAxisLineAlpha": "15",
                            "toolTipPadding": "7",
                            "toolTipBorderColor": "#DCDCDC",
                            "toolTipBorderThickness": "0",
                            "toolTipBorderRadius": "2",
                            "showShadow": "0",
                            "toolTipBgColor": "#252525",
                            "theme": "ocean"
                          },

                        "data": [{
                            "label": "Consumer general",
                            "value": "60.7"
                          }, {
                            "label": "Enterprise internal app",
                            "value": "41.7"
                          }, {
                            "label": "Progressive Web Apps",
                            "value": "25.1"
                          }, {
                            "label": "Consumer social network",
                            "value": "24"
                          }, {
                            "label": "Desktop web apps",
                            "value": "18.5"
                          }, {
                            "label": "Desktop apps (electron, etc)",
                            "value": "12.3"
                          }, {
                            "label": "Consumer chat",
                            "value": "12.2"
                          }, {
                            "label": "Other",
                            "value": "4.5"
                        }]
                    }');
        $barChart->render();
        ?>

        <div id="chart-container">

        </div>

    </section>

@endsection



