<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="generator" content="Gatsby 4.3.0" />
        <title data-react-helmet="true">CorporalCoverage - Save hundreds on car insurance - Start Now!!</title>
        <link data-react-helmet="true" href="template/logo.svg" rel="preload" as="image" />
        <meta data-react-helmet="true" charset="utf-8" />
        <meta data-react-helmet="true" http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta data-react-helmet="true" name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0" />
        <meta data-react-helmet="true" name="title" content="CorporalCoverage - Save hundreds on car insurance - Start Now!!" />
        <meta data-react-helmet="true" name="description" content="Find a new insurance plan with ease and save hundreds of dollars every year. Save now, spend on what really matters." />
        <style data-react-helmet="true" type="text/css"></style>
        <link href="{{ asset('_corporal/css/style.css') }}" rel="stylesheet" />
    </head>
    <body>
                <div class="body-bg" data-dynamic-messaging="">
                    @include('corporal.partials.headers.header')
                    <div class="container">
                        @yield('content')
                    </div>
                    @include('corporal.partials.footers.footer')
                </div>
            </div>
            <div id="gatsby-announcer" style="position: absolute; top: 0; width: 1px; height: 1px; padding: 0; overflow: hidden; clip: rect(0, 0, 0, 0); white-space: nowrap; border: 0;" aria-live="assertive" aria-atomic="true"></div>
    </body>
</html>
