<!DOCTYPE html>
<html>
<head>
<style>
i {
  display: block;
  overflow: hidden;
  background-image: url(c.png);
  background-repeat: none;
  text-indent: 10000px;
  width: 10px;
  height: 10px;
}

.cell {
    border: 1px solid black;
}

i.SPR { background-position: 0px 0px; }
i.PR { background-position: -10px 0px; }
i.SQPR { background-position: -20px 0px; }
i.QPR { background-position: 0px -10px; }
i.HPR { background-position: -10px -10px; }
i.br { background-position: -20px -10px; }
i.ar { background-position: 0px -20px; }
i.x { background-position: -10px -20px; }
i._ { background-position: -20px -20px; }

</style>
<link rel="stylesheet" type="text/css" 
    href="r2style.css">

	<style>
		
img.poly {  
max-width: 200px;  
height: auto;  
}  
	
img.rolling {  
max-width:300px;  
max-height:300px;  
}  

.top{
    vertical-align: top;
}

	</style>
<title>Search <?php echo $_GET["q"] ?></title>
</head>
<body>
<h1>Search result for query: "<?php echo $_GET["q"] ?>"</h1>
<p><a href="..">Back to HUB</a></p>
<p><a href="./">Back to Table</a></p>
<table >
  <tr><td><a href="./search.php?q=SPR">[search]</a></td><td><i class=SPR></td><td>Perfectly Stable Plane Roller <td></tr>
  <tr><td><a href="./search.php?q=PR">[search]</a></td><td><i class=PR></td><td>Other Plane Roller<td></tr>
  <tr><td><a href="./search.php?q=SQPR">[search]</a></td><td><i class=SQPR></td><td>Perfectly Stable Quasi-Plane Roller<td></tr>
  <tr><td><a href="./search.php?q=QPR">[search]</a></td><td><i class=QPR></td><td>Other Quasi-Plane Roller<td></tr>
  <tr><td><a href="./search.php?q=HPR">[search]</a></td><td><i class=HPR></td><td>Hollow-Plane Roller<td></tr>
  <tr><td><a href="./search.php?q=br">[search]</a></td><td><i class=br></td><td>Band Roller<td></tr>
  <tr><td><a href="./search.php?q=ar">[search]</a></td><td><i class=ar></td><td>Area Roller<td></tr>
  <tr><td><a href="./search.php?q=x">[search]</a></td><td><i class=x></td><td>Area Roller (cannot escape starting tile)<td></tr>
  <tr><td><a href="./search.php?q=_">[search]</a></td><td><i class=_></td><td>Incompatible<td></tr>
</table >


<script type="text/javascript">
var polylinks = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'snub_cube', 0, 0, 0, 0, 0, 0, 'snub_dodecahedron', 'Johnson_solid?solid=J1\\#Pyramids', 'Johnson_solid?solid=J2\\#Pyramids', 'Johnson_solid?solid=J3\\#Cupolae_and_rotunda', 'Johnson_solid?solid=J4\\#Cupolae_and_rotunda', 'Johnson_solid?solid=J5\\#Cupolae_and_rotunda', 'Johnson_solid?solid=J6\\#Cupolae_and_rotunda', 'Johnson_solid?solid=J7\\#Elongated_and_gyroelongated_pyramids', 'Johnson_solid?solid=J8\\#Elongated_and_gyroelongated_pyramids', 'Johnson_solid?solid=J9\\#Elongated_and_gyroelongated_pyramids', 'Johnson_solid?solid=J10\\#Elongated_and_gyroelongated_pyramids', 'Johnson_solid?solid=J11\\#Elongated_and_gyroelongated_pyramids', 'Johnson_solid?solid=J12\\#Bipyramids', 'Johnson_solid?solid=J13\\#Bipyramids', 'Johnson_solid?solid=J14\\#Bipyramids', 'Johnson_solid?solid=J15\\#Bipyramids', 'Johnson_solid?solid=J16\\#Bipyramids', 'Johnson_solid?solid=J17\\#Bipyramids', 'Johnson_solid?solid=J18\\#Elongated_and_gyroelongated_cupolae_and_rotundas', 'Johnson_solid?solid=J19\\#Elongated_and_gyroelongated_cupolae_and_rotundas', 'Johnson_solid?solid=J20\\#Elongated_and_gyroelongated_cupolae_and_rotundas', 'Johnson_solid?solid=J21\\#Elongated_and_gyroelongated_cupolae_and_rotundas', 'Johnson_solid?solid=J22\\#Elongated_and_gyroelongated_cupolae_and_rotundas', 'Johnson_solid?solid=J23\\#Elongated_and_gyroelongated_cupolae_and_rotundas', 'Johnson_solid?solid=J24\\#Elongated_and_gyroelongated_cupolae_and_rotundas', 'Johnson_solid?solid=J25\\#Elongated_and_gyroelongated_cupolae_and_rotundas', 'Johnson_solid?solid=J26\\#Bicupolae', 'Johnson_solid?solid=J27\\#Bicupolae', 'Johnson_solid?solid=J28\\#Bicupolae', 'Johnson_solid?solid=J29\\#Bicupolae', 'Johnson_solid?solid=J30\\#Bicupolae', 'Johnson_solid?solid=J31\\#Bicupolae', 'Johnson_solid?solid=J32\\#Cupola-rotundas_and_birotundas', 'Johnson_solid?solid=J33\\#Cupola-rotundas_and_birotundas', 'Johnson_solid?solid=J34\\#Cupola-rotundas_and_birotundas', 'Johnson_solid?solid=J35\\#Elongated_bicupolae', 'Johnson_solid?solid=J36\\#Elongated_bicupolae', 'Johnson_solid?solid=J37\\#Elongated_bicupolae', 'Johnson_solid?solid=J38\\#Elongated_bicupolae', 'Johnson_solid?solid=J39\\#Elongated_bicupolae', 'Johnson_solid?solid=J40\\#Elongated_cupola-rotundas_and_birotundas', 'Johnson_solid?solid=J41\\#Elongated_cupola-rotundas_and_birotundas', 'Johnson_solid?solid=J42\\#Elongated_cupola-rotundas_and_birotundas', 'Johnson_solid?solid=J43\\#Elongated_cupola-rotundas_and_birotundas', 'Johnson_solid?solid=J44\\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas', 'Johnson_solid?solid=J44\\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas', 'Johnson_solid?solid=J45\\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas', 'Johnson_solid?solid=J45\\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas', 'Johnson_solid?solid=J46\\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas', 'Johnson_solid?solid=J46\\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas', 'Johnson_solid?solid=J47\\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas', 'Johnson_solid?solid=J47\\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas', 'Johnson_solid?solid=J48\\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas', 'Johnson_solid?solid=J48\\#Gyroelongated_bicupolae,_cupola-rotundas,_and_birotundas', 'Johnson_solid?solid=J49\\#Augmented_prisms', 'Johnson_solid?solid=J50\\#Augmented_prisms', 'Johnson_solid?solid=J51\\#Augmented_prisms', 'Johnson_solid?solid=J52\\#Augmented_prisms', 'Johnson_solid?solid=J53\\#Augmented_prisms', 'Johnson_solid?solid=J54\\#Augmented_prisms', 'Johnson_solid?solid=J55\\#Augmented_prisms', 'Johnson_solid?solid=J56\\#Augmented_prisms', 'Johnson_solid?solid=J57\\#Augmented_prisms', 'Johnson_solid?solid=J58\\#Augmented_dodecahedra', 'Johnson_solid?solid=J59\\#Augmented_dodecahedra', 'Johnson_solid?solid=J60\\#Augmented_dodecahedra', 'Johnson_solid?solid=J61\\#Augmented_dodecahedra', 'Johnson_solid?solid=J62\\#Diminished_and_augmented_diminished_icosahedra', 'Johnson_solid?solid=J63\\#Diminished_and_augmented_diminished_icosahedra', 'Johnson_solid?solid=J64\\#Diminished_and_augmented_diminished_icosahedra', 'Johnson_solid?solid=J65\\#Augmented_Archimedean_solids', 'Johnson_solid?solid=J66\\#Augmented_Archimedean_solids', 'Johnson_solid?solid=J67\\#Augmented_Archimedean_solids', 'Johnson_solid?solid=J68\\#Augmented_Archimedean_solids', 'Johnson_solid?solid=J69\\#Augmented_Archimedean_solids', 'Johnson_solid?solid=J70\\#Augmented_Archimedean_solids', 'Johnson_solid?solid=J71\\#Augmented_Archimedean_solids', 'Johnson_solid?solid=J72\\#Gyrate_and_diminished_rhombicosidodecahedra', 'Johnson_solid?solid=J73\\#Gyrate_and_diminished_rhombicosidodecahedra', 'Johnson_solid?solid=J74\\#Gyrate_and_diminished_rhombicosidodecahedra', 'Johnson_solid?solid=J75\\#Gyrate_and_diminished_rhombicosidodecahedra', 'Johnson_solid?solid=J76\\#Gyrate_and_diminished_rhombicosidodecahedra', 'Johnson_solid?solid=J77\\#Gyrate_and_diminished_rhombicosidodecahedra', 'Johnson_solid?solid=J78\\#Gyrate_and_diminished_rhombicosidodecahedra', 'Johnson_solid?solid=J79\\#Gyrate_and_diminished_rhombicosidodecahedra', 'Johnson_solid?solid=J80\\#Gyrate_and_diminished_rhombicosidodecahedra', 'Johnson_solid?solid=J81\\#Gyrate_and_diminished_rhombicosidodecahedra', 'Johnson_solid?solid=J82\\#Gyrate_and_diminished_rhombicosidodecahedra', 'Johnson_solid?solid=J83\\#Gyrate_and_diminished_rhombicosidodecahedra', 'Johnson_solid?solid=J84\\#Snub_antiprisms', 'Johnson_solid?solid=J85\\#Snub_antiprisms', 'Johnson_solid?solid=J86\\#Others', 'Johnson_solid?solid=J87\\#Others', 'Johnson_solid?solid=J88\\#Others', 'Johnson_solid?solid=J89\\#Others', 'Johnson_solid?solid=J90\\#Others', 'Johnson_solid?solid=J91\\#Others', 'Johnson_solid?solid=J92\\#Others', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
var polynames = ["tetrahedron","cube","octahedron","dodecahedron","icosahedron","truncated_tetrahedron","cuboctahedron","truncated_cube","truncated_octahedron","rhombicuboctahedron","truncated_cuboctahedron","snub_cube","snub_cube_c","icosidodecahedron","truncated_dodecahedron","truncated_icosahedron","rhombicosidodecahedron","truncated_icosidodecahedron","snub_dodecahedron","snub_dodecahedron_c","j1","j2","j3","j4","j5","j6","j7","j8","j9","j10","j11","j12","j13","j14","j15","j16","j17","j18","j19","j20","j21","j22","j23","j24","j25","j26","j27","j28","j29","j30","j31","j32","j33","j34","j35","j36","j37","j38","j39","j40","j41","j42","j43","j44","j44_c","j45","j45_c","j46","j46_c","j47","j47_c","j48","j48_c","j49","j50","j51","j52","j53","j54","j55","j56","j57","j58","j59","j60","j61","j62","j63","j64","j65","j66","j67","j68","j69","j70","j71","j72","j73","j74","j75","j76","j77","j78","j79","j80","j81","j82","j83","j84","j85","j86","j87","j88","j89","j90","j91","j92","triangular_prism","pentagonal_prism","hexagonal_prism","octagonal_prism","decagonal_prism","dodecagonal_prism","square_antiprism","pentagonal_antiprism","hexagonal_antiprism","octagonal_antiprism","decagonal_antiprism","dodecagonal_antiprism"]
var tilingnames = ["1u01 (3^6)","1u02 (4^4)","1u03 (6^3)","1u04 (3^4x6)","1u05 (3^3x4^2)","1u06 (3^2x4x3x4)","1u07 (3x4x6x4)","1u08 (3x6x3x6)","1u09 (3x12^2)","1u10 (4x6x12)","1u11 (4x8^2)","2u01 (3^6;3^4x6)1","2u02 (3^6;3^4x6)2","2u03 (3^6;3^3x4^2)1","2u04 (3^6;3^3x4^2)2","2u05 (3^6;3^2x4x3x4)","2u06 (3^6;3^2x4x12)","2u07 (3^6;3^2x6^2)","2u08 (3^4x6;3^2x6^2)","2u09 (3^3x4^2;3^2x4x3x4)1","2u10 (3^3x4^2;3^2x4x3x4)2","2u11 (3^3x4^2;3x4x6x4)","2u12 (3^3x4^2;4^4)1","2u13 (3^3x4^2;4^4)2","2u14 (3^2x4x3x4;3x4x6x4)","2u15 (3^2x6^2;3x6x3x6)","2u16 (3x4x3x12;3x12^2)","2u17 (3x4^2x6;3x4x6x4)","2u18 (3x4^2x6;3x6x3x6)1","2u19 (3x4^2x6;3x6x3x6)_2)","2u20 (3x4x6x4;4x6x12)","3uhv01 (3^6;3^4x6;3^2x6^2)1","3uhv02 (3^6;3^4x6;3^2x6^2)2","3uhv03 (3^6;3^4x6;3^2x6^2)3","3uhv04 (3^6;3^4x6;3x6x3x6)1","3uhv05 (3^6;3^4x6;3x6x3x6)2","3uhv06 (3^6;3^4x6;3x6x3x6)3","3uhv07 (3^6;3^3x4^2;3^2x4x3x4)","3uhv08 (3^6,3^3x4^2;3^2x4x12)","3uhv09 (3^6;3^3x4^2;3x4x6x4)","3uhv10 (3^6;3^3x4^2;4^4)1","3uhv11 (3^6;3^3x4^2;4^4)2","3uhv12 (3^6;3^3x4^2;4^4)3","3uhv13 (3^6;3^3x4^2;4^4)4","3uhv14 (3^6;3^2x4x3x4;3^2x4x12)","3uhv15 (3^6;3^2x4x3x3x4;3x4^2x6)","3uhv16 (3^6;3^2x4x3x4;3x4x6x4)1","3uhv17 (3^6;3^2x4x3x4;3x4x6x4)2","3uhv18 (3^6;3^2x4x12;4x6x12)","3uhv19 (3^6;3^2x6^2;6^3)","3uhv20 (3^4x6;3^3x4^2;3^2x4x3x4)","3uhv21 (3^4x6;3^3x4^2;3x4^2x6)","3uhv22 (3^4x6;3^2x6^2;6^3)","3uhv23 (3^3x4^2;3^2x4x3x4;4^4)","3uhv24 (3^3x4^2;3^2x4x12;3x4x6x4)","3uhv25 (3^3x4^2;3^2x6^2;3x4^2x6)","3uhv26 (3^2x4x3x4;3x4^2x6;3x4x6x4)","3uhv27 (3^2x4x12;3x4x3x12;3x12^2)","3uhv28 (3^2x4x12;3x4x6x4;3x12^2)","3uhv29 (3^2x6^2;3x4^2x6;3x6x3x6)1","3uhv30 (3^2x6^2;3x4^2x6;3x6x3x6)2","3uhv31 (3^2x6^2;3x6x3x6;6^3)1","3uhv32 (3^2x6^2;3x6x3x6;6^3)2","3uhv33 (3x4x3x12;3x4x6x4;3x12^2)","3uhv34 (3x4^2x6;3x4x6x4;4^4)","3uhv35 (3x4^2x6;3x6x3x6;4^4)1","3uhv36 (3x4^2x6;3x6x3x6;4^4)2","3uhv37 (3x4^2x6;3x6x3x6;4^4)3","3uhv38 (3x4^2x6;3x6x3x6;4^4)4","3uhv39 (3x4^2x6;3x6x3x6;4x6x12)","3unhv40 (3^6;3^6;3^4x6^1)","3unhv41 (3^6;3^6;3^4x6^2)","3unhv42 (3^6;3^6;3^4x6^3)","3unhv43 (3^6;3^4x6;3^4x6)","3unhv44 (3^6;3^6;3^3x4^2)1","3unhv45 (3^6;3^6;3^3x4^2)2","3unhv46 (3^6;3^3x4^2;3^3x4^2)1","3unhv47 (3^6;3^3x4^2;3^3x4^2)2","3unhv48 (3^6;3^2x4x3x4;3^2x4x3x4)","3unhv49 (3^4x6;3^4x6;3x6x3x6)1","3unhv50 (3^4x6;3^4x6;3x6x3x6)2","3unhv51 (3^3x4^2;3^3x4^2;3^2x4x3x4)","3unhv52 (3^3x4^2;3^2x4x3x4;3^2x4x3x4)","3unhv53 (3^3x4^2;3^3x4^2;4^4)1","3unhv54 (3^3x4^2;3^3x4^2;4^4)2","3unhv55 (3^3x4^2;4^4;4^4)1","3unhv56 (3^3x4^2;4^4;4^4)2","3unhv57 (3^2x6^2;3x6x3x6;3x6x3x6)","3unhv58 (3x4^2x6;3x4x6x4;3x4x6x4)","3unhv59 (3x4^2x6;3x4^2x6;3x6x3x6)","3unhv60 (3x4^2x6;3x6x3x6;3x6x3x6)1","3unhv61 (3x4^2x6;3x6x3x6;3x6x3x6)2","4u01 (3^6;3^4x6;3^3x4^2;3x4^2x6)1","4u02 (3^6;3^4x6;3^3x4^2;3x4^2x6)2","4u03 (3^6;3^4x6;3^2x6^2;3x6x3x6)","4u04 (3^6;3^4x6;3^2x6^2;6^3)1","4u05 (3^6;3^4x6;3^2x6^2;6^3)2","4u06 (3^6;3^4x6;3^2x6^2;6^3)3","4u07 (3^6;3^4x6;3^2x6^2;6^3)4","4u08 (3^6;3^4x6;3x4^2x6;3x6x3x6)1","4u09 (3^6;3^4x6;3x4^2x6;3x6x3x6)2","4u10 (3^6;3^3x4^2;3^2x4x3x4;3^2x4x12)","4u11 (3^6;3^3x4^2;3^2x4x3x4;3x4x6x4)1","4u12 (3^6;3^3x4^2;3^2x4x3x4;3x4x6x4)2","4u13 (3^6;3^3x4^2;3^2x4x3x4;4^4)","4u14 (3^6;3^3x4^2;3x4^2x6;3x6x3x6)","4u15 (3^6;3^2x4x3x4;3^2x4x12;3x12^2)","4u16 (3^6;3^2x4x3x4;3x4x3x12;3x12^2)","4u17 (3^6;3^2x4x3x4;3x4^2x6;3x4x6x4)","4u18 (3^4x6;3^2x6^2;3x6x3x6;6^3)1","4u19 (3^4x6;3^2x6^2;3x6x3x6;6^3)2","4u20 (3^3x4^2;3^2x4x12;3x4x3x12;3x12^2)","4u21 (3^3x4^2;3^2x4x12;3x4x3x12;3x12^2)2","4u22 (3^3x4^2;3^2x4x12;3x4x3x12;4^4)","4u23 (3^3x4^2;3^2x6^2;3x4^2x6;4x6x12)","4u24 (3^3x4^2;3^2x6^2;3x4^2x6;6^3)1","4u25 (3^3x4^2;3^2x6^2;3x4^2x6;6^3)2","4u26 (3^2x4x3x4;3^2x6^2;3x4^2x6;3x4x6x4)","4u27 (3^2x4x3x4;3^2x6^2;3x4^2x6;4x6x12)","4u28 (3^2x4x3x4;3^2x6^2;3x4^2x6;6^3)","4u29 (3^2x4x12;3x4x3x12;3x4x6x4;4x6x12)","4u30 (3^2x6^2;3x4^2x6;3x6x3x6;4^4)1","4u31 (3^2x6^2;3x4^2x6;3x6x3x6;4^4)2","4u32 (3^2x6^2;3x4^2x6;3x6x3x6;4^4)3","4u33 (3^2x6^2;3x4^2x6;3x6x3x6;4^4)4","4u34 (3^6;3^2x6^2;6^3;6^3)1","4u35 (3^6;3^2x6^2;6^3;6^3)2","4u36 (3^4x6;3^2x6^2;3^2x6^2;3x6x3x6)","4u37 (3^2x6^2;3^2x6^2;3x6x3x6;6^3)","4u38 (3^2x6^2;3x6x3x6;6^3;6^3)","4u39 (3^4x6;3^2x6^2;6^3;6^3)"]
var imagenames = ["SPR","PR","SQPR","QPR","HPR","br","ar","x","_"]
    var byteindex = Uint8Array.from(atob('gChld4coUnV3dWdVZnd3V1VldnZVVXd3d3d1ZnZ2Z3d3d3ciIlVVVnVXVXV3d3dVVVV1dlZ2Z3Zndnd2d3d3V2aFgFh3iHeIVXeId1Z1eFd1iIiId1dVdXd3eIVnZXdViGdVVYaIWFV1iHdVVWhVVYWIiFV3d3VniHdmVXd3VVWIiIiAKGV3hyhSdXd1Z1Vmd3dXVWV2dlVVd3d3d3VmdnZnd3d3dyIiVVVWdVdVdXd3d1VVVXV2VnZndmd2d3Z3d3dXZoWIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIiIAoZXeHKFJ1d3VnVWZ3d1dVZXZ2VVV3d3d3dWZ2dmd3d3d3IiJVVVZ1V1V1d3d3VVVVdXZWdmd2Z3Z3dnd3d1dmdUh2d3SHZnd3YXd3d3VXdWZVRHd3d3d3d3ZWd3V3VUR3VVV2d3d3d1V3d3dlVWVWVVVVd3d1Z0R3Z1Vnd1VVREZUd3gHcnd3ZwZ2F3V3cmd2dnd3Z2dmZmYidmZndmZndmdmZmZ3d3dmcFdldndmZmZ3d3dnZmZndmdmd2dmdnd3d3d3iHd3dzh3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d4dHd0OHd3dzd2d3dnR3ZmVnd3Z3d3R3RmZ3VWd1dWd2ZmZnd3d3d3d3d3d2ZmZldVdXdnd3d2d3dWVUZ2d0dkVXWEVzV3d3dVZHdlVmV3U2V3d3d2VFVlRGRndWZldlV3ZlVVdndXVWV3ZlVVZ1VVdXd3VWZmdWZ3ZmZVZmZVVXd3d3h3d3Q4dHd3d3d3d3dHdnZ3d3dnd3dHdHZnd3Z3Z3Z3ZmZmd3d3d3d3d3d3ZmZmd3d3d2d3d3Z3d2dmZ3Z3d3d3R4dWZHd3RkVmZ1RmZnZmZ2ZmZmZmZWVmZmdmZGZmZnZmZmZmREVUZGZEZmZnZmZmZmZmZmZmZmZmZndmZnd3d2ZmdDhFdndnVGR2RmVmZmd2ZmZmZmZWVmZmdmZmZmZmZmdmZmZGVERFZkZlZnZmZmZmZmZmZmZmZmZmdmdmdnd3Z2Z2iHd3d4h3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3eHeHd3h3h3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d4dIh3iHh3eIiGOIh3iGd3dmdXeIh4iId3d2V3h1eHd1d3d3d3eHiIh3iIiId3d3d1VVd3iHh3h3iGhVZ3d3d0RWVXd4V3N3d2dGdld2d3ZndnZ3d2dnZmZmRHZmZ3ZmZ3ZnZmZmd3d3ZnZnZnZ3ZmZmd3d3Z2ZmZ3ZnZndnZnZ3d3d3h3d3R4dzd3d3d3d3d3dkZ3d3d3d2d3dEZ3d2Z3d3ZndnZmZ2d3d3d3d3d3dnZmZ2d3d3d3Z3Z3d3d2Z2Znd3d3d3hDhmd4doZHV3dmdmZnd3Z2ZmdnZWVnd3d3d2ZnZ2Z3d3d3dGVFVWZnZnZnZ3d3dmZmZ2dmZ2Z3Zndnd2d3d3Z2ZGiGZ2d4hGVndnd2Zmdnd3ZmZmZ2dldXd3d2dnZmd3dnd3d2dEVWVlZndmZnd3d2dmZmZnZ2Z3Zndmd2d3d3d3ZmZ2aBZ2d2dWFnMWZWZmZ3ZmZmYWRmZmYzZ2VmZmZmZmZ2ZmZmZmZmZhVmVmdmZmVWZmZjZkZmZmZmZ2Z2Z2d3dnZmaIZnZ3iGZmd2d3ZmZ2d3dmZmZnZ2Z2d3d3Z2dmZ3d2d3d3Z2ZmZmZmd2Zmd3d3Z2ZmZmdnZndmd2Z3Z3d3d3dmZndnZ2RnZ2ZmZmZ2d2RHZmZmZmZnZmYWRGZmZnZlZ2ZmZmZmd3d3ZmZmZnZnZGZmZmZmZmZmZ2FmZmdWQ2Zmdnd3doZnZndnd2Zmd2ZmZndmZnd3d3ZmZmZmZmd2ZmZ2ZndmZmZ2d2dmZndmZmZnZmZ2d3dmZmZ2ZndmZmZmZmZmd3d3d3hndnd3Z2Z2Z3Z3dmd2dnd3Z2dmZmZmdmZndmZndmdmZmZ3d3dmdmdmdndmZmZ3d3dnZmZndmdmd2dmdnd3d3d3iHd3d4h3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3d3dWaGV2d2dWZXZWRlVmZ1VmZmZGRlVVZmZ2VmZWZlZlZ1ZVZWZmVVVkZlZVdVZVVWZmVmVkVmZmZmZWZWZWVXVnZmaAVmZ3d2ZVZmdmVmV2VmVmZmZmFhVlZGZnZWZlZlV2ZlVVZmZWVWVmZlVVZ1VVZWZmVWYWZWZmZmZVZmZVVXdmZlZoZXZ3Z1ZldmZmVWZnVWZmZmZmVVVmZnZWZlZmVmVnVlVlZmZVVWZmVlV1VlVVZmZWZWZWZmZmZlZlZlZVdWdmBodWZnd3IxExZ2ZWZXZmZ1VVZjFTVTVmY1dmZmZmZnZmZmYmIhNRZVVmVVVnZlZTVVVVMxNlZmZmZndmZnd3d2ZmgGhld4c4UnV3dmdVZnd3V1VldnZVVXd3d3d2ZnZ2Z3d3d3ciMlVVVnVXVXV3d3dVVVV1dlZ2Z3Zndnd2d3d3Z2YGiFJ2d4giVXdXd1Zldnd3VVVmZ1dVdXd3d1dnZmd3dnd3dyciUlVlVXdVVXd3d1dVVVVnZ2V3Zndmd2d3d3d3ZVaAKGV3hyhSdXd1Z1Vmd3dXVWV2dlVVd3d3d3VmdnZnd3d3dyIiVVVWdVdVdXd3d1VVVXV2VnZndmd2d3Z3d3dXZmWFVmV3d2ZRNGdlU2V2VmVmZmY0U1VFZmRHY2ZlZlV2ZlVVZmZWVWVmVlVVZ1U1Y2ZmVUZkZWZmZmZVZWRVVXdmZlZoVXZ3ZxZFc1Y2VWZnVWZmZkYzVVVkRnY0ZlZmVmVnVlVlZmZVVWZmVVV1VlUzZmZWZURWZmZmZlZVRlZVdWdmZoVWZXd3ZlE0Z2VTZXZWZWZmZjRTVUVmZEdjZmVmVXZmVVVmZlZVZWZWVVVnVTVjZmZVRmRlZmZmZlVlZFVVd2ZmgChld4coUnV3dWdVZnd3V1VldnZVVXd3d3d1ZnZ2Z3d3d3ciIlVVVnVXVXV3d3dVVVV1dlZ2Z3Zndnd2d3d3V2Z1dVdmd3Z3VWZ3ZlRFd1Rld3d3dlZVZWRmZ3VGZXZVd1ZVVXZ3V1Vld2ZVVUdVVXV3d1VGZnVmd2ZmVWZmVVV3d3dHeGV2d3ZXZXZnZlV2N1V2d3dnR1VVRmZ2VmdWZld1Z1ZVZXd3VVV2Z1ZVdVZVVXd3V2VmVmd2Z2ZWZWZWVXV3d3eFV2Z3d3dVZndmVmV3VmV3d3d2VlVlZmZndWZldlV3ZlVVdndXVWV3ZlVVZ1VVdXd3VWZmdWZ3ZmZVZmZVVXd3d1d4ZXZ3d1dldmdmVXZnVXZ3d2dnVVVmZnZWZ1ZmV3VnVlVld3dVVXZnVlV1VlVVd3dXZWZWZ3ZnZlZlZlZVdXd3V3dWZnZ3YVVmZmZWZXZmZmZVEWZWVWVmZkZlZmZmZmZmZmZmYVZVZVVmVVVmZlZWVWZVZmZlZmZmZmZmZmZmd2ZmZWhldndXVmV2ZmZVZmdmZlZlZmZVVWZmdmZmZmZmZmdmZmZWZlVVVmVWVXVmZmZVZVZlZlZmZmZmZmZmZmZ2Z2ZWh1Zmd3dlVWZnZlZldmZnZlVmZlZVZWZmZ2ZmZmZmdmZmZmZlVlVlVWZVVWdmZlZVZlVmZmVmZmZmd2Zmd3d3ZmaFaGV3h1hWdXd2Z1Vmd3dnVmV2dlVVd3d3d3ZmdnZnd3d3d1ZmVVVWdVdVdXd3d1VlVnV2VnZndmd2d3Z3d3dnZnaGZ2B3d3dmZncVZiZ3ZmZ3d3d2ZmZmZmZndmZWdmZ3VmZmdndnZgZ3VWZmZ2Zmdnd3ZmZUdmZ3ZmZmZWZmZnd3d2ZoUXZ3Z2ZGdhY1VWRnZmZmZhZmZmZmRnZjVmNTZmZnZmZmZmZmVWRWUVV1Y2ZmZmZmNkNmZmNWZWZWZmVmdmdmZoQWZnd3ZlVmZ1ZTRXZWZWZmZmRWVWVmZmdlNlVlVXZmVVVmZlZVRWZVVVFnVVVlZmZVZGZlZmZVZlVmZFVVd2ZmZ3gWdnd3Z2Z2Z2Vmc2dmdnd3Z2dmZmZmdmZnZmZndmdlZmZ3d2ZmcUdlZnZmZmZ3d2dmZmVndmdmZmZmZmZ2d3dnhhZmd3dmZmZnVlNFdmZmZmZmZGZmZmZmZ2Y2VmVmdmZmZmZmZlZFZlVVVWdmZmZmZmZkZmZmZlVmZmZmZmZ3ZmZ3eAd2d3dnZnZndXdyZ3Z2d3dnZ2ZmZmZ2Zmd2Zmd2Z2ZmZnd3d2ZwV2V2d2ZmZnd3d2dmZmd2Z2Z3Z2Z2d3d3d3eHd2Z3d3dmZndmd2d3Zmd3d3d2ZmZmZmZndmZndmZ3ZmZmdnd3Z2Z3ZmZ3Z2Zmdnd3d2ZmdmZ3ZnZ3ZmZ3d3d3d3ZoZnZ3Z2ZmdmZmZmZndmZmZmZmZmZmZnZmZmZmZmZnZmZmZmZmZmZmZmZ2ZmZmZmZmZmZmZmZmZnZnZnZ3d2dmZohmdneIZmZ3Z3dmZnZ3d2ZmZmdnZnZ3d3dnZ2Znd3Z3d3dnZmZmZmZ3ZmZ3d3dnZmZmZ2dmd2Z3Zndnd3d3d2ZmV3hFc3d3V0V2V2ZVdDdVdnd3Z0dVVTZDdlZnVmZXdWdWVWV3d1VVdFdWVXVWVVV3d1dlZlZndmdmVmU2VlV1d3d3hVdmd3d3VWZ3ZVVld1Zld3d3dVZVZWZmZ3VWVXZVd2ZVVXZ3V1Vld1ZVVWdVVXV3d1VlZnVmd2ZmVWZmVVV3d3cHeGV2d3dXZXZXVlV2N1V2d3dXR1VVRmZ2VmdVZld1Z1ZVZXd3VVV2Z1ZVdVZVVXd3V1VmVmd2Z2ZWZWZWVXV3d3eFVzV3d3dVZHdlVmV3U2V3d3d2VFVlRGRndWZldlV3ZlVVdndXVWV3ZlVVZ1VVdXd3VWZmdWZ3ZmZVZmZVVXd3d1d4ZXZ3d1dldldWVXZnVXZ3d1dnVVVmZnZWZ1VmV3VnVlVld3dVVXZnVlV1VlVVd3dXVWZWZ3ZnZlZlZlZVdXd3d4VXZnd3d1Vmd2ZWZXdWZXd3d3ZWVWVmZmd1ZmV2VXdmVVV2d1dVZXdmVVVnVVV1d3dVZmZ1ZndmZlVmZlVVd3d3V3hldnd3V2V2Z2ZVdmdVdnd3Z2dVVWZmdlZnVmZXdWdWVWV3d1VVdmdWVXVWVVV3d1dlZlZndmdmVmVmVlV1d3d3hVdmd3d3VWZ3ZlZld1Zld3d3dlZVZWZmZ3VmZXZVd2ZVVXZ3V1Vld2ZVVWdVVXV3d1VmZnVmd2ZmVWZmVVV3d3dXeGV2d3dXZXZnZlV2Z1V2d3dnZ1VVZmZ2VmdWZld1Z1ZVZXd3VVV2Z1ZVdVZVVXd3V2VmVmd2Z2ZWZWZWVXV3d1eHVmV3d2VVZGdGVlV2ZmdmVWZmVlVlZmRnZmRmZmZ2ZmZmZmVWVRVVFFVVZ2ZmVlVmVWZjZWZmZmZ3ZmZ3d3dmZnVoVXZ3V1ZFdmZkVWVndmZWZWZmVVVmRnZmZmZmZmZnZmZmVmZVVVFFVVV1ZmZmVWVWZTZWZmZmZnZnZnZ3d2dmVoZWZnd3ZVVmZ1ZGZHZmZmZVZmZWVWVmZmdlZmZmZnZmZmZmZVZVZVVlVVVnZmZWVWZVZmZlZmZmZmZmZmZmd2ZmZWhldndXVmV2ZmVEZmdmZlZlZmZVVWZmdlZWZmZmZmdmZmZWZlVVVlVWVXVmZmZVZVZlZlZmZmZmZmZmZmZ2Z2ZWh1Zmd3dlVWZnVlZldmZnZlVmZlZVZWZmZ2ZmZmZmdmZmZmZlVlVlVWVVVWdmZlZVZlVmZmVmZmZmd2Zmd3d3ZmZ1aGV2d1dWZXZmZVVmZ3ZmVmVmZlVVZmZ2ZmZmZmZmZ2ZmZlZmVVVWVVZVdWZmZlVlVmVmVmZmZmZ2Z2Z2d3dnZlaHVmZ3d2VVZmdmVmV2ZmdmVWZmVlVlZmZnZmZmZmZ2ZmZmZmVWVWVVZlVVZ2ZmVlVmVWZmZWZmZmZ3ZmZ3d3dmZnVoZXZ3V1ZldmZmVWZndmZWZWZmVVVmZnZmZmZmZmZnZmZmVmZVVVZlVlV1ZmZmVWVWZWZWZmZmZnZnZnZ3d2dmVohWdneIZVV3Z3dWZXZ3d2ZVZmdXVXV3d3dnZ2Znd3Z3d3dnZVZVZVV3VVV3d3dXVWZVZ2dld2Z3Zndnd3d3d2ZmhWhld4dYVnV3dmdVZnd3Z1ZldnZVVXd3d3d2ZnZ2Z3d3d3dWZlVVVnVXVXV3d3dVZVZ1dlZ2Z3Zndnd2d3d3Z2ZmhlZmd3dmVWRnVVZldmZmZmZmZFNVZUZkR2ZmZmZmdmZmZmZmVlVlZmZVVWdmZmZmZmY0ZmVmZmZmZmZmZmZ3ZmZwaGV2dycSEXNmZlVmZ3ZmVWVGM1VVYzZ2ZmZmZmZmZ2ZmZiIiEVVWVVZVdWZmNVVlVUUzUWZmZmZ2Z2Z2d3dnZgaIUnZ3iCJVd1d3VmV2d3dVVWZnV1V1d3d3V2dmZ3d2d3d3JyJSVWVVd1VVd3d3V1VVVWdnZXdmd2Z3Z3d3d3dlVmZoZnZ3Z2ZmdmZmZmZnZmZmZmZmZmZmZnZmZmZmZmZnZmZmZmZmZmZmZmZ2ZmZmZmZmZmZmZmZmZmZmZmZmdmdmZoZmZnd3ZmY0Z2ZmZnZmZmZmZmRkZmZmZGdmZmZmZnZmZmZmZmZmZmZmZmZnZmZmZmZmZGZmZmZmZmZmZmZmd2ZmZmdmYTdnZmZmZmZmZkdEZGZmZmZmZkZkZkZmZmRmZmZWVUVmZmZmZmZmZmZEZlVmZmZmZlZmZGZmZFZmZmZ2Z2ZmdmZGdnZkZmZmZmVmdlZFZWZmZGZmZmRmZGRmVmZmZmZmZmZmZmZmVWZmZkZlVmZmZmZkZmZGZmZmZmVmZmZ3ZmZmZ2ZhN0dmRkNmVmZmR2VUVmZmRmZmRkRmRmZVZmZmZmZmRmZmZmZWZWZmZmRmZVZlVmVmZmZkZmZUZWZmZnZnZmZ3ZkZ2c2RmNGRlZGZ2ZGZlZWZmZGZmRGRmZUZlZmZmZmZmZmZmZmZVZmZmZmZmZlVmZmZmZmZmZkZVZmZmZndmZoZoZneHaGZ2d3ZnZmZ3d2dmZnZ2ZmZ3d3d3dmZ2dmd3d3d3ZmZmZmZ2Z2Z2d3d3ZmZmdnZmdmd2Z3Z3dnd3d2dmZohmdneIZmZ3Z3dmZnZ3d2ZmZmdnZnZ3d3dnZ2Znd3Z3d3dnZmZmZmZ3ZmZ3d3dnZmZmZ2dmd2Z3Zndnd3d3d2Zmhmhmd4doZnZ3dmdmZnd3Z2ZmdnZmZnd3d3d2ZnZ2Z3d3d3dmZmZmZnZnZnZ3d3dmZmZ2dmZ2Z3Zndnd2d3d3Z2ZmiGZ2d4hmZndnd2Zmdnd3ZmZmZ2dmdnd3d2dnZmd3dnd3d2dmZmZmZndmZnd3d2dmZmZnZ2Z3Zndmd2d3d3d3ZmaAaGZ3h2hTdXd2Z2Zmd3dnZWV2dlVVd3d3d3ZmdnZnd3d3dzNjVVVmdmdmdnd3d2VmVXV2VnZndmd2d3Z3d3dnZmaIZnZ3iGZmd2d3ZmZ2d3dmZmZnZ2Z2d3d3Z2dmZ3d2d3d3Z2ZmZmZmd2Zmd3d3Z2ZmZmdnZndmd2Z3Z3d3d3dmZoZoZneHaGZ2d3ZnZmZ3d2dmZnZ2ZmZ3d3d3dmZ2dmd3d3d3ZmZmZmZ2Z2Z2d3d3ZmZmdnZmdmd2Z3Z3dnd3d2dmdmd2ZnF3ZmZmZmZ3Z3VWZWZWRnZmZmZmZmZmZmZ2VUZmVVV2d3dnZlVmZndlVWVWZmZVZmZ1ZmZmZmVmZFVVZmZmZ3hmdnd0Z2Z2Z2Zmdmdmdnd3Z2dmZmZmdmZnZmZndmdmZmZ3d2ZmdmdmZnZmZmZ3d2dmZmZndmdmZmZmZmZ2d3d3hmdmd1d3ZmZ3ZmZmd2Zmd3d3dmZmZmZmZ3ZmZnZmd2ZmZnZ3Z2Zmd2ZmZmdmZnZ3d2ZmZnZmd2ZmZmZmZmZ3d3d3eGd2d3dnZnZndnd2Z3Z2d3dnZ2ZmZmZ2Zmd2Zmd2Z2ZmZnd3d2Z2Z2Z2d2ZmZnd3d2dmZmd2Z2Z3Z2Z2d3d3d3eHd2Z3d3dmZndmd2d3Zmd3d3d2ZmZmZmZndmZndmZ3ZmZmdnd3Z2Z3ZmZ3Z2Zmdnd3d2ZmdmZ3ZnZ3ZmZ3d3d3d3d4Z3Z3d2dmdmd2d3ZndnZ3d2dnZmZmZnZmZ3ZmZ3ZnZmZmd3d3ZnZnZnZ3ZmZmd3d3Z2ZmZ3ZnZndnZnZ3d3d3d4d3Znd3d2Zmd2Z3Z3dmZ3d3d3ZmZmZmZmd2Zmd2ZndmZmZ2d3dnZndmZndnZmZ2d3d3ZmZ2ZndmdndmZnd3d3d3Z3hWc3d3Z0Z2Z2Zmdmdmdnd3Z2dmZmZEdmZnZmZndmdmZmZ3d2ZmdmdmZnZmZmZ3d2dmZmZndmdmZmZmZmZ2d3d3hmdVd3d3ZmV3ZmZmd2Zmd3d3dmZmZlZlZ3ZmZnZmd2ZmZnZ3Z2Zmd2ZmZmdmZnZ3d2ZmZnZmd2ZmZmZmZmZ3d3dneGZzd3dnRnZnZmZ2N2Z2d3dnR2ZmRkR2ZmdmZmd2Z2ZmZnd3ZmZ2Z2ZmdmNmZnd3Z2ZkZmd0Z2ZmZmZmZnZ3d3eGZ2Z3d3dmZndmZmZ3Y2Z3d3d2ZGZmZGZndmZmdmZ3ZmZmdndnZmZ3ZmZmN2Zmdnd3ZkZmdkZ3ZmZmZmZmZnd3d3d4V3N3d2dGdmd2d3ZndnZ3d2dnZmZmRHZmZ3ZmZ3ZnZmZmd3d3ZnZnZnZ3ZmZmd3d3Z2ZmZ3ZnZndnZnZ3d3d3d4ZnVXd3d2Zld2ZmZndmZnd3d3ZmZmZWZWd2ZmZ2ZndmZmZ2d2dmZndmZmZnZmZ2d3dmZmZ2ZndmZmZmZmZmd3d3Z3hmc3d3Z0Z2Z2Zmdmdmdnd3Z2dmZmZEdmZnZmZndmdmZmZ3d2ZmdmdmZnZmZmZ3d2dmZmZndmdmZmZmZmZ2d3d3hmdmd3d3ZmZ3ZmZmd2Nmd3d3dmRmZmRmZ3ZmZnZmd2ZmZnZ3Z2Zmd2ZmZjdmZnZ3d2ZGZnZGd2ZmZmZmZmZ3d3d3eFd1d3dnVnZndnd2Z3Z2d3dnZ2ZmZlV2Zmd2Zmd2Z2ZmZnd3d2Z2Z2Z2d2ZmZnd3d2dmZmd2Z2Z3Z2Z2d3d3d3eHdzZ3d3dmZHdmd2d3Zmd3d3d2ZmZmRmRndmZndmZ3ZmZmdnd3Z2Z3ZmZ3Z2Zmdnd3d2ZmdmZ3ZnZ3ZmZ3d3d3d2d4ZnZ3d2dmdmdmZnZnZnZ3d2dnZmZmZnZmZ2ZmZ3ZnZmZmd3dmZnZnZmZ2ZmZmd3dnZmZmZ3ZnZmZmZmZmdnd3d4d3Znd3d2Zmd2Z3Z3dmZ3d3d3ZmZmZmZmd2Zmd2ZndmZmZ2d3dnZndmZndnZmZ2d3d3ZmZ2ZndmdndmZnd3d3d3gChld4coUnV3dWdVZnd3V1VldnZVVXd3d3d1ZnZ2Z3d3d3ciIlVVVnVXVXV3d3dVVVV1dlZ2Z3Zndnd2d3d3V2YFh0Vmd3ciADFXZlZldmZnVVVmNlNVNWZjZ1VkZmZmdmZmZiYiAxBhVVZVVWdmVlNVVVU2E2VmZmZmd2Zmd3d3ZVZgaGV2dzcSEXNmZVVmZ2ZWVWUWMxFVYzZ2ZGZmZmZmZ2ZmZiJSEVVkVlZVdWZmNVVVVTUzUWZmZmZmZmZmZnZnZgaHVGZ3dyIAMWdmVmV2ZmdVVWY0U1U1ZmNHZmZmZmZ2ZmZmJiICUGVVZlVVZ2ZWVFVVVTQTZWZmZmZ3ZmZ3d3dmZmBoZHZ3JwJAc2ZmVWZnZlZVZRZDEVVkRnZWZmZmZmZnZmZmIjIAEWRmVlV1ZmZVVVVVNTRUZmZmZmZmZmZmdmdmBoZGZnd3IhExZ2ZWZXZmZlVVZjFTFTFjY2dlZmZmZnZmZmYmIhMRQWZmVVVnZkZTVVVVM0NlZmZmZmZmZmZmd2ZmYGhkdnc3ExBzVmZUZmdmVlVlFjMRVWM2dmZmZmZmZmdmZmYiQgARUVVWVXVmZmVVVVU1M1FmZmZlZmZmZmZ2Z2Z2h3dmd3d3ZmZ3Zndnd2Znd3d3dmZmZmZmZ3ZmZ3Zmd2ZmZnZ3d2dmd2Zmd2dmZnZ3d3dmZnZmd2Z2d2Zmd3d3d3d2Z2ZmZ2dmZmZmZmZmZ2ZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZmZnZnZnaFVzV3d3dVZHdkVGV3U2V3d3d0VFVlRGRndUZVdlV3ZlVVdndXVWV3VlVVZ1VVdXd3VWRmdWZ3ZmZVZmZVVXd3d1iIdYd4h1h1h3hnVYd3VYeIiHh3VVV3d4dXeFZ2V4V4VlVliIhVVYd4V1WFVlVViIhYdXdXd4Z4Z1Z1d1dVhYiIiHVXN4dzd1V3d3dWdXc0M3d3d3dWVXUzZ3dzZzV3VXdnVVVzd1dVdXd3VVVHUzVzd3dVd3Z1N3d3RlVzZlVVd3d3WIh1h3iEWHWHeGdVh3dVh4iIeHdVVXd3h1d4VnZXhXhWVWWIiFVVh3hXVYVWVVWIiFh1d1d3hnhnVnV3V1WFiIiIhVh3iHeIVXeId1Z1eFd1iIiId1dVdXd3eIVnZXdViGdVVYaIWFV1iHdVVWhVVYWIiFV3d3VniHdmVXd3VVWIiIhYiHWHN4dYdYN4Z1WHd1WGiIh4dlVVdneDV3hWZlaFeFZVZYiIVVWHeFdVhVZVVYiIWHV3V3aGWEZWdXdWVYWIiFiHFmR3d2VVZmdUVlV2ZmdmVWZmVlVlZmZnZmRmZWZ2ZmZmZmVWVVVVRVVVZ2ZmVVVmVWZmZWZmVWN3ZmZ3d3dmZoVoZXeHWFZ1d3ZnVWZ3d2dWZXZ2VVV3d3d3dmZ2dmd3d3d3VmZVVVZ1V1V1d3d3VWVWdXZWdmd2Z3Z3dnd3d2dmVnhRdnaHEVV3FndWZXRndhUVEWdXVXV3d3ZVZ2ZnVVV3ZmZmQVFVZRF3VVVlZmYWVVZVZ2dlZ2Z3ZmZnd1VVd1FVhWhld4dXVnV3dmdVZnd3Z1ZldnZVVXd3d3d2ZnZ2Z3d3d3dWZlVVVnVXVXV3d3dVZVZ1dlZ2Z3Zndnd2d3d3Z2ZWiFZ2d4hlVXdnd1Zldnd3ZlVmZ1dVdXd3d2dnZmd3dnd3d2dlVlVlVXdVVXd3d1dVZlVnZ2V3Zndmd2d3d3d3ZmaFaGV3dlhWdXZ2Z1VmdndnVmV2dlVVdnd2d3ZmNnZnZ3d3d1ZmVVVWdVdVdXd3d1VlVnV2VmZnZmZ2d3Zzd3dnZg=='), c=>c.charCodeAt(0));
var comboindex = byteindex.reduce(function (r, e) { r.push(e & 15, (e >> 4)); return r; }, []);
console.log(comboindex);

var selectiondata = "<?php echo $_GET["q"] ?>"

var descriptions = ["Perfectly Stable Plane Roller", "Plane Roller", "Perfectly Stable Quasi-Plane Roller", "Quasi-Plane Roller", "Hollow-Plane Roller", "Band Roller", "Area Roller", "Area Roller (cannot escape starting supertile)", "Incompatible"];
var polyselection = false;
var counter=0;
let table = document.createElement('table');
var tilingrow = table.insertRow();
tilingrow.classList.add("tilingnames");
tilingrow.insertCell();

var selectionarray = [selectiondata];
let savecounter = 0;

for (const [pindex, poly] of polynames.entries()){
	let newrow = true; 
	let newCell = null;
    if(polyselection)continue;
    if(selectiondata==poly){
        //Polygon mode
        //for every type, go trough the whole tilingname counter and select the ones
        polyselection = poly;
        selectionarray = ["SPR","PR","SQPR","QPR","HPR","br","ar","x","_"];
        savecounter = counter;
    }
    for (let selection of selectionarray)
    {
        if(polyselection){
            counter=savecounter;
            newrow=true
        }
        for (let tiling of tilingnames) {
            let resulttype = imagenames[parseInt(comboindex[counter])];
            let splittiling = tiling.split(" ")[0];
            if(selection == resulttype){
                if(newrow){
                    table.insertRow();
                    let polycell = table.rows[table.rows.length - 1].insertCell();
                    polycell.innerHTML += '<td>';
                    if(polyselection){
                        const description =descriptions[parseInt(comboindex[counter])];
                        polycell.innerHTML += "<h1>"+description+"</h1>";
                        polycell.className += ' top';
                    }
                    polycell.innerHTML +='<span><img class="poly" loading="lazy" src="p/'+poly+'.png"><br>'+poly+' <a href="./search.php?q='+poly+'">[search]</a>'+'</span>'+'</a></td>'
                    polycell.className += ' cell';
                    newrow=false;
                    newCell = table.rows[table.rows.length - 1].insertCell();
                    newCell.setAttribute("width","5000")
                    newCell.className = "cell";
                }
            let cellinside = document.createElement('a');
            cellinside.href = 'r2.php?p='+poly+'&t='+splittiling+'&r='+resulttype+'&full='+tiling;
            let limited = ["SPR","PR","SQPR","QPR"];
            
            if(selection=="SPR"||selection=="PR"||selection=="SQPR"||selection=="QPR"){
            cellinside.innerHTML = '<span><img class="rolling" loading="lazy" src="svg/'+poly+'@'+splittiling+'.svg">'+"</span>"}
            else{
            cellinside.innerHTML = '<span><img class="rolling" loading="lazy" src="smallpics/'+poly+'[on]'+tiling+'.png">'+"</span>"}
            newCell.appendChild(cellinside);
        }
        counter+=1;
	}
}
}
document.body.appendChild(table);
let p = document.createElement('p');
p.style="margin-bottom:300px;"
document.body.appendChild(p)
</script>