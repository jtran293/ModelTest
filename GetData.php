﻿<?php
// URL of the GLB file to fetch
//$url = 'https://firebasestorage.googleapis.com/v0/b/test2-repo.appspot.com/o/UpperLimb%2FUL_Label.glb?alt=media&token=4605d9ce-ccf6-42b8-841d-ce52886bd4c8';
//$url = 'https://raw.githubusercontent.com/jtran293/ModelTest/main/LabelTest.glb';
$url = 'https://borealisdata.ca/api/access/datafile/447258?key=42620785-9324-475c-a944-8cf5ab03bfcf';
//$url = 'https://borealisdata.ca/api/access/datafile/447259?key=42620785-9324-475c-a944-8cf5ab03bfcf';
//$url = 'https://olrc2.scholarsportal.info/dataverse/10.5683/SP3/BGVIEU/186f127e60b-e988afe851fe?response-content-disposition=attachment%3B%20filename%2A%3DUTF-8%27%27Forearm_2.63_LowPoly.glb&response-content-type=application%2Foctet-stream&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20230422T212641Z&X-Amz-SignedHeaders=host&X-Amz-Expires=7200&X-Amz-Credential=33b141c798354e21a3394e9e4f546bbe%2F20230422%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=747a9db0b58c825169ce148e703c20c87938f511ce32ecb03df1b41cdb883e57';

  // Retrieve the .glb file from the remote server
$fileContent = file_get_contents($url);

// Set the Content-Disposition header to indicate that the response should be downloaded as a file
header('Content-disposition: attachment; filename='.$_GET['filename']);
header('Content-type: application/txt');
header('Content-Transfer-Encoding: binary');
header('Content-Description: File Transfer');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate');
ob_clean();
flush();
//readfile('txt/'.$_GET['filename']);

// Output the file
echo $fileContent;
?>
