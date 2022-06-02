<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" 
    href="r2style.css">

<?php
$polyurls = [
    "tetrahedron" => "https://en.wikipedia.org/wiki/tetrahedron",
    "cube" => "https://en.wikipedia.org/wiki/cube",
    "octahedron" => "https://en.wikipedia.org/wiki/octahedron",
    "dodecahedron" => "https://en.wikipedia.org/wiki/dodecahedron",
    "icosahedron" => "https://en.wikipedia.org/wiki/icosahedron",
    "truncated_tetrahedron" => "https://en.wikipedia.org/wiki/truncated_tetrahedron",
    "cuboctahedron" => "https://en.wikipedia.org/wiki/cuboctahedron",
    "truncated_cube" => "https://en.wikipedia.org/wiki/truncatedube",
    "truncated_octahedron" => "https://en.wikipedia.org/wiki/truncated_octahedron",
    "rhombicuboctahedron" => "https://en.wikipedia.org/wiki/rhombicuboctahedron",
    "truncated_cuboctahedron" => "https://en.wikipedia.org/wiki/truncateduboctahedron",
    "snub_cube" => "https://en.wikipedia.org/wiki/snubube",
    "snub_cube_c" => "https://en.wikipedia.org/wiki/snubube",
    "icosidodecahedron" => "https://en.wikipedia.org/wiki/icosidodecahedron",
    "truncated_dodecahedron" => "https://en.wikipedia.org/wiki/truncated_dodecahedron",
    "truncated_icosahedron" => "https://en.wikipedia.org/wiki/truncated_icosahedron",
    "rhombicosidodecahedron" => "https://en.wikipedia.org/wiki/rhombicosidodecahedron",
    "truncated_icosidodecahedron" => "https://en.wikipedia.org/wiki/truncated_icosidodecahedron",
    "snub_dodecahedron" => "https://en.wikipedia.org/wiki/snub_dodecahedron",
    "snub_dodecahedron_c" => "https://en.wikipedia.org/wiki/snub_dodecahedron",
    "triangular_prism" => "https://en.wikipedia.org/wiki/triangular_prism",
    "pentagonal_prism" => "https://en.wikipedia.org/wiki/pentagonal_prism",
    "hexagonal_prism" => "https://en.wikipedia.org/wiki/hexagonal_prism",
    "octagonal_prism" => "https://en.wikipedia.org/wiki/octagonal_prism",
    "decagonal_prism" => "https://en.wikipedia.org/wiki/decagonal_prism",
    "dodecagonal_prism" => "https://en.wikipedia.org/wiki/dodecagonal_prism",
    "square_antiprism" => "https://en.wikipedia.org/wiki/square_antiprism",
    "pentagonal_antiprism" => "https://en.wikipedia.org/wiki/pentagonal_antiprism",
    "hexagonal_antiprism" => "https://en.wikipedia.org/wiki/hexagonal_antiprism",
    "octagonal_antiprism" => "https://en.wikipedia.org/wiki/octagonal_antiprism",
    "decagonal_antiprism" => "https://en.wikipedia.org/wiki/decagonal_antiprism",
    "dodecagonal_antiprism" => "https://en.wikipedia.org/wiki/dodecagonal_antiprism",
    "j1" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J1\#Pyramids",
    "j2" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J2\#Pyramids",
    "j3" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J3\#Cupolae_and_rotunda",
    "j4" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J4\#Cupolae_and_rotunda",
    "j5" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J5\#Cupolae_and_rotunda",
    "j6" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J6\#Cupolae_and_rotunda",
    "j7" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J7\#Elongated_and_gyroelongated_pyramids",
    "j8" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J8\#Elongated_and_gyroelongated_pyramids",
    "j9" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J9\#Elongated_and_gyroelongated_pyramids",
    "j10" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J10\#Elongated_and_gyroelongated_pyramids",
    "j11" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J11\#Elongated_and_gyroelongated_pyramids",
    "j12" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J12\#Bipyramids",
    "j13" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J13\#Bipyramids",
    "j14" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J14\#Bipyramids",
    "j15" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J15\#Bipyramids",
    "j16" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J16\#Bipyramids",
    "j17" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J17\#Bipyramids",
    "j18" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J18\#Elongated_and_gyroelongated_cupolae_and_rotundas",
    "j19" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J19\#Elongated_and_gyroelongated_cupolae_and_rotundas",
    "j20" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J20\#Elongated_and_gyroelongated_cupolae_and_rotundas",
    "j21" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J21\#Elongated_and_gyroelongated_cupolae_and_rotundas",
    "j22" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J22\#Elongated_and_gyroelongated_cupolae_and_rotundas",
    "j23" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J23\#Elongated_and_gyroelongated_cupolae_and_rotundas",
    "j24" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J24\#Elongated_and_gyroelongated_cupolae_and_rotundas",
    "j25" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J25\#Elongated_and_gyroelongated_cupolae_and_rotundas",
    "j26" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J26\#Bicupolae",
    "j27" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J27\#Bicupolae",
    "j28" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J28\#Bicupolae",
    "j29" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J29\#Bicupolae",
    "j30" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J30\#Bicupolae",
    "j31" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J31\#Bicupolae",
    "j32" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J32\#Cupola-rotundas_and_birotundas",
    "j33" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J33\#Cupola-rotundas_and_birotundas",
    "j34" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J34\#Cupola-rotundas_and_birotundas",
    "j35" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J35\#Elongated_bicupolae",
    "j36" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J36\#Elongated_bicupolae",
    "j37" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J37\#Elongated_bicupolae",
    "j38" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J38\#Elongated_bicupolae",
    "j39" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J39\#Elongated_bicupolae",
    "j40" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J40\#Elongated_cupola-rotundas_and_birotundas",
    "j41" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J41\#Elongated_cupola-rotundas_and_birotundas",
    "j42" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J42\#Elongated_cupola-rotundas_and_birotundas",
    "j43" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J43\#Elongated_cupola-rotundas_and_birotundas",
    "j44" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J44\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas",
    "j44_c" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J44\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas",
    "j45" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J45\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas",
    "j45_c" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J45\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas",
    "j46" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J46\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas",
    "j46_c" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J46\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas",
    "j47" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J47\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas",
    "j47_c" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J47\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas",
    "j48" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J48\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas",
    "j48_c" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J48\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas",
    "j49" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J49\#Augmented_prisms",
    "j50" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J50\#Augmented_prisms",
    "j51" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J51\#Augmented_prisms",
    "j52" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J52\#Augmented_prisms",
    "j53" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J53\#Augmented_prisms",
    "j54" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J54\#Augmented_prisms",
    "j55" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J55\#Augmented_prisms",
    "j56" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J56\#Augmented_prisms",
    "j57" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J57\#Augmented_prisms",
    "j58" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J58\#Augmented_dodecahedra",
    "j59" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J59\#Augmented_dodecahedra",
    "j60" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J60\#Augmented_dodecahedra",
    "j61" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J61\#Augmented_dodecahedra",
    "j62" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J62\#Diminished_and_augmented_diminished_icosahedra",
    "j63" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J63\#Diminished_and_augmented_diminished_icosahedra",
    "j64" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J64\#Diminished_and_augmented_diminished_icosahedra",
    "j65" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J65\#Augmented_Archimedean_solids",
    "j66" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J66\#Augmented_Archimedean_solids",
    "j67" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J67\#Augmented_Archimedean_solids",
    "j68" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J68\#Augmented_Archimedean_solids",
    "j69" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J69\#Augmented_Archimedean_solids",
    "j70" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J70\#Augmented_Archimedean_solids",
    "j71" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J71\#Augmented_Archimedean_solids",
    "j72" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J72\#Gyrate_and_diminished_rhombicosidodecahedra",
    "j73" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J73\#Gyrate_and_diminished_rhombicosidodecahedra",
    "j74" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J74\#Gyrate_and_diminished_rhombicosidodecahedra",
    "j75" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J75\#Gyrate_and_diminished_rhombicosidodecahedra",
    "j76" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J76\#Gyrate_and_diminished_rhombicosidodecahedra",
    "j77" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J77\#Gyrate_and_diminished_rhombicosidodecahedra",
    "j78" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J78\#Gyrate_and_diminished_rhombicosidodecahedra",
    "j79" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J79\#Gyrate_and_diminished_rhombicosidodecahedra",
    "j80" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J80\#Gyrate_and_diminished_rhombicosidodecahedra",
    "j81" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J81\#Gyrate_and_diminished_rhombicosidodecahedra",
    "j82" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J82\#Gyrate_and_diminished_rhombicosidodecahedra",
    "j83" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J83\#Gyrate_and_diminished_rhombicosidodecahedra",
    "j84" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J84\#Snub_antiprisms",
    "j85" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J85\#Snub_antiprisms",
    "j86" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J86\#Others",
    "j87" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J87\#Others",
    "j88" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J88\#Others",
    "j89" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J89\#Others",
    "j90" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J90\#Others",
    "j91" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J91\#Others",
    "j92" => "https://en.wikipedia.org/wiki/Johnson_solid?solid=J92\#Others",
];
?>

<?php echo '<title>'. ($_GET["p"]) . " on " . ($_GET["t"]) . "</title>"; ?>
</head>
<body>
<div class="gallery">
<?php
echo '<h1><a href="' . $polyurls[$_GET["p"]] . '">' . ($_GET["p"]) . "</a> on " . ($_GET["t"]) . "</h1>";
?>
</div>
<h2> Type:
<?php
if($_GET["r"] == "SPR"){
echo "Stable Plane Roller";
}elseif($_GET["r"] == "PR"){
echo "Plane Roller";
}elseif($_GET["r"] == "SQPR"){
echo "Stable Quasi-Plane Roller";
}elseif($_GET["r"] == "QPR"){
echo "Quasi-Plane Roller";
}elseif($_GET["r"] == "HPR"){
echo "Hollow Plane Roller";
}elseif($_GET["r"] == "br"){
echo "Band Roller";
}elseif($_GET["r"] == "ar"){
echo "Area Roller";
}elseif($_GET["r"] == "x"){
echo "Cannot escape starting cell";
}elseif($_GET["r"] == "_"){
echo "Incompatible";
}


echo '<a href="./search.php?q='.$_GET["r"].'">[search]</a>'

?>
</h2>
<p><a href="..">Back to HUB</a></p>
<p><a href="./">Back to Table</a></p>

<div class="flextable">
    <span class="element">
        <span>
            <div class="centered">Reachable area</div>
            <?php echo "<img src='smallpics/" . ($_GET["p"]) . "[on]" . ($_GET["full"]) . ".png' width=400px>"; ?>
        </span>
    
        <span class="smaller">
            <div class="centered">Rolling pattern</div>
            <?php echo "<img class='filler' src='svg/" . ($_GET["p"]) . "@" . ($_GET["t"]) . ".svg'>"; ?>
            <div class=legend>
                <?php
                if(strtolower($_GET["r"])!=$_GET["r"] or ($_GET["r"])=="br"){
                echo '<span style="color:RoyalBlue">■ Blue</span> line: symmetry vector <br/>';
                }?>

                <span style="color:DarkGray">■ Grey</span> tile: reached tile <br>
                <span style="color:Brown">■ Brown</span> tile: reached with all compatible face <br>
                <span style="color:Red">■ Red</span> tile: reached with all faces in all orientations <br>
                ⬤ Circle mark: guaranteed starting point in any orientations<br>
                <?php
                if($_GET["r"] != "SPR" and $_GET["r"] != "PR"){
                echo "✕ Cross mark: incompatible tile";
                }?>
            </div>
        </span>
    </span>

    
    <span class="element">
        <span class="smaller">
            <div class="centered"><?php echo "Tiling: " . $_GET["full"] . ""; ?></div>
            <?php echo "<img src=t/" . ($_GET["t"]) . ".png width=400px>";?>
            <div class=legend>
                Letters: tile-wise symmetries. <br>
                Colors: self-rotationnal symmetries.<br>
                Bold: parallelogon supertile.
            </div>
        </span>
    </span>
    <span class="element">
        <span>
            <div class="centered"><?php echo "Polyhedron: " . $_GET["p"] . " "; ?>  <?php echo '<a href="./search.php?q='.$_GET["p"].'">[search]</a>'; ?></div>
            <?php echo "<img src='p/" . ($_GET["p"]) . ".png' max-height=400px max-width=400px width=auto height=auto>"; ?>
        </span>
    
        <span class="smaller">
            <div class="centered">Polyhedron Net</div>
            <?php echo "<img src=n/" . ($_GET["p"]) . "@" . ($_GET["t"]) . ".svg max-height=350px max-width=400px width=auto height=auto><br/>";?>
            <div class=legend>
                <span style="color:blue">■ Blue</span>:used faces. <br>
                <span style="color:red">■ Red</span>: unused.
            </div>
        </span>
    </span>
</div>

</div>
</body>
</html>