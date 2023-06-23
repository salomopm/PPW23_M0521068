<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-light">
        <div class="container-fluid p-3 mb-2 bg-dark">
            <a class="navbar-brand text-white" href="#"><svg xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" version="1.1" id="Layer_1" x="0px" y="0px" width="50%" height="50%" viewBox="0 0 531.74818 180.83616" enable-background="new 0 0 531.74805 277.33643" xml:space="preserve" inkscape:version="0.48.4 r9939" sodipodi:docname="UFC_logo - Copy.svg"><link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-custom-link"/><link xmlns="" type="text/css" rel="stylesheet" id="dark-mode-general-link"/><style xmlns="" lang="en" type="text/css" id="dark-mode-custom-style"/><style xmlns="" lang="en" type="text/css" id="dark-mode-native-style"/><style xmlns="" lang="en" type="text/css" id="dark-mode-native-sheet"/><metadata id="metadata23"><rdf:RDF><cc:Work rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/></cc:Work></rdf:RDF></metadata><defs id="defs21"/><sodipodi:namedview pagecolor="#ffffff" bordercolor="#666666" borderopacity="1" objecttolerance="10" gridtolerance="10" guidetolerance="10" inkscape:pageopacity="0" inkscape:pageshadow="2" inkscape:window-width="640" inkscape:window-height="480" id="namedview19" showgrid="false" fit-margin-top="0" fit-margin-left="0" fit-margin-right="0" fit-margin-bottom="0" inkscape:zoom="0.22627417" inkscape:cx="885.66255" inkscape:cy="55.94122" inkscape:window-x="0" inkscape:window-y="0" inkscape:window-maximized="0" inkscape:current-layer="Layer_1"/>
            <path d="M 40.896296,2.2219693 H 108.79669 L 73.165836,122.02373 c -2.50098,8.4043 2.80518,15.33594 11.54688,15.33594 l 0,0 c 8.74463,0 17.746094,-6.93164 20.244144,-15.33594 L 140.5882,2.2219693 200.79865,2.2205093 159.65754,155.36553 c -3.63135,13.50879 -18.06104,24.56543 -32.06738,24.56543 H 23.417296 c -16.6450205,0 -26.7343805,-13.13574 -22.41992045,-29.19824 L 40.896296,2.2219693 l 0,0 z" id="path11" inkscape:connector-curvature="0"/>
            <polygon points="276.322,67.6616 276.322,67.6631 346.049,67.6631 333.383,109.144 263.632,109.144 244.269,179.931 244.269,179.931 178.717,179.931 210.77,67.6616 " id="polygon13" transform="translate(-1.8445481e-4,-2.0066665e-4)"/>
            <path d="m 411.98908,0.42362933 h 88.67676 c 12.97168,0 34.99023,10.39306967 30.48438,26.92089967 l -1.77539,6.50732 h -79.13086 c -4.06445,0 -8.29395,3.25928 -9.39258,7.24072 l -24.59277,89.056641 c -1.09863,3.98242 1.32715,7.23975 5.39258,7.23975 h 79.49023 l -5.76367,21.13281 c -3.33594,12.24316 -16.49023,22.31445 -29.45605,22.31445 H 372.3055 c -16.5,0 -26.63672,-12.77734 -22.52441,-28.38867 L 384.30746,21.388959 C 387.34455,9.8567293 399.80158,0.42362933 411.98908,0.42362933 l 0,0 z" id="path15" inkscape:connector-curvature="0"/>
            <path d="m 353.0467,43.453409 h -69.58398 l -0.0352,0.11963 H 217.8758 L 230.48761,-2.0066665e-4 c 45.03857,0 90.07764,0 135.11279,0 L 353.0467,43.453409 l 0,0 z" id="path17" inkscape:connector-curvature="0"/>
            </svg></a>

            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item1">
                <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item2">
                <a class="nav-link" href="{{route('form')}}">Input Fighter</a>
                </li>
                <li class="nav-item3">
                <a class="nav-link" href="{{route('table-fighter')}}">Fighter List</a>
                </li>
            </ul>
        </div>
    </nav>
    <form action="{{ route('simpan-fighter') }}" method="post">
        {{ csrf_field() }}
        <div class="mb-3 w-75">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
        </div>
        <div class="mb-3 w-75">
            <label for="exampleFormControlInput1" class="form-label">Age</label>
            <input type="text" class="form-control" name="age" id="age" placeholder="Age">
        </div>
        <div class="mb-3 w-75">
            <label for="exampleFormControlInput1" class="form-label">Weight Class</label>
            <input type="text" class="form-control" name="weightClass" id="weightClass" placeholder="Weight Class">
        </div>
        <div class="select-dropdown">
        <label for="input" class="form-label">Martial Art Basic</label>
            <select class="form-select w-50" name="basic" id="basic" aria-label="Default select example">
                <option selected>None</option>
                <option value="Brazilian Jiu Jutsu">Brazilian Jiu Jutsu</option>
                <option value="Wrestling">Wrestling</option>
                <option value="Judo">Judo</option>
                <option value="Kick Boxing">Kick Boxing</option>
                <option value="Boxing">Boxing</option>
                <option value="Muay Thai">Muay Thai</option>
                <option value="Kick Boxing">Kick Boxing</option>
                <option value="Kyokushin Karate">Kyokushin Karate</option>
            </select>
        </div>
        <div class="tombol-submit">
            <button type="submit" class="btn btn-primary" id="tombol-submit">Submit</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>