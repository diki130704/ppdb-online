<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Description">
    <meta name="author" content="Author">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>PPDB Online - SMK Assalaam Bandung</title>

    <!-- Styles -->
    @include('layouts.landing-page.stylesheet')
    <!-- Favicon  -->
    <link rel="icon" href="{{asset('assets/landing-page/images/assalaam.png')}}">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    @include('layouts.landing-page.navbar')
    <!-- end of navigation -->

    <!-- Content -->
    @include('layouts.landing-page.content')
    <!-- End Content -->

    </div> <!-- end of col -->
    </div> <!-- end of row -->
    </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of features -->

    <!-- Footer -->
    @include('layouts.landing-page.footer')
    <!-- end of footer -->

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © Diki Alif Taufik</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->

    <!-- Scripts -->
    @include('layouts.landing-page.javascript')
</body>

</html>
