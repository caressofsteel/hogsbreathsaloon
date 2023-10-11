<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W6YHT9RLND"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-W6YHT9RLND');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Hog's Breath Saloon - Bar Cams">
    <meta name="keywords" content="Hogs, Breath, Saloon, Key West, Florida">
    <meta name="author" content="CaressOfSteel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hog's Breath Saloon - Key West</title>

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- FontAwesome 4.4.0 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Clappr Video Player -->
    <link rel="stylesheet" href="css/clappr.css" />

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet"> 

    <!-- Clappr Video Player -->
    <script src='https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js">
    </script>

</head>

<body>

    <div class="container">
    <!-- Content Begin -->

        <!-- Header Row -->
        <div class="row text-center">

            <div class="col-md-12">
                <!-- Title -->
                <div class="title">
                    <h1>World Famous Hog's Breath Saloon in Key West, FL.</h1>
                </div>
            </div>
            
        </div>

        <!-- Content Row 1 -->
        <div class="row container-fluid">

            <!-- Player 1 - Stage Cam -->
            <div class="col-md-6">
                <div id="player1" >
                    <script>
                        var player = new Clappr.Player({
                            parentId: '#player1',
                            source: 'https://stream.resortcams.com/live-hogsbreath/smil:hogsbreath3.smil/playlist.m3u8',                  
                            mute: false,
                            playback: {
                                controls: false,
                                playInline: true
                            },
                            mediacontrol: {
                                seekbar: "#00bf80",
                                buttons: "#ffffff",
                            },
                            autoPlay: true,
                            plugins: [ChromecastPlugin]
                        });
                    </script>
                </div>
            </div>
            
            <!-- Player 3 - Raw Bar Cam -->
            <div class="col-md-6"">
                <div id="player3" class="16x9">
                    <script>
                        var player = new Clappr.Player({
                            parentId: '#player3',
                            source: 'https://stream.resortcams.com/live-hogsbreath/hogsbreath2-audio.stream/playlist.m3u8',
                            mute: true,
                            playback: {
                                controls: false,
                                playInline: true
                            },
                            mediacontrol: {
                                seekbar: "#00bf80",
                                buttons: "#ffffff",
                            },
                            autoPlay: true,
                            plugins: [ChromecastPlugin]
                        });
                    </script>
                </div>
            </div>

        </div>

        <!-- Content Row 2 -->    
        <div class="row text-center">
           
            <!-- Logo & Counter -->
            <div class="col-md-12">
                 <div class="logo">
                    <a target="_blank" href="https://www.hogsbreath.com/keywest/">
                        <img src="images/keywest-logo-min.png" alt="Hog's Breath Key West Logo"></a>                  
                    </div>
                    <!-- End of Statcounter Code -->

                </div>
            </div>
        
        </div>        
    
        <!-- Footer Row -->
        <div class="row">
            <div class="col-md-12">

                <!-- Greetings -->
                <div class="enjoy">
                    Welcome to the World Famous Hog's Breath Saloon in beautiful Key West, Florida. I've have yet to visit this bar (hope to one day), but I've had their webcam page bookmarked for years so I can enjoy the great live music and atmosphere. This page puts all of their cams on one screen. Enjoy!
                    <br />
                    <span class="sig">- <a target="_blank" href="https://github.com/caressofsteel/hogsbreathsaloon">caressofsteel</a></span>
                </div>

            </div>
        </div>        

    <!-- Container End -->
    </div>

</body>

</html>